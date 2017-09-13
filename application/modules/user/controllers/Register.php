<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	function __construct()
    {
		parent::__construct();
		//$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->helper('html');
		//$this->load->library('session');
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;
		$this->load->model('user/register_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
	
	public function submit(){
         $data = array();
        $userData = array();
        //if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'UserName', 'required|callback_name_check');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            $userData = array(
                'name' => strip_tags($this->input->post('name')),
				'username' => strip_tags($this->input->post('username')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                'sponser_name' => strip_tags($this->input->post('sponser_name')),
                'phone' => strip_tags($this->input->post('phone')),
				'transaction_pin' => strip_tags($this->input->post('transaction_pin')),
				'pay_account' => strip_tags($this->input->post('pay_account'))
            );

            if($this->form_validation->run() == true){
                $insert = $this->register_model->insert($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    //redirect('users/login');
					$data['success_msg'] = 'User Registered Successfully.';
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        //}
        $data['user'] = $userData;
        //load the view
		$this->load->view('header');
        $this->load->view('register', $data);
		$this->load->view('footer');
	}
	/*
     * Existing email check during validation
     */
    public function name_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('username'=>$str);
        $checkEmail = $this->register_model->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('name_check', 'The given Name already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
