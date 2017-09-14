<div id="content_box">
				<div class="container-fluid">
	  			<div class="row">
	  				<div class="col-xs-60">
 
	  					<div id="registration_page">

								<div class="block_title border_none">
									<h2>
										<img src="/assets/img/title-img-left.png" class="title-img-left" alt="Responsive image">
										User
										<span>Registration</span>
										<img src="/assets/img/title-img-right.png" class="title-img-right" alt="Responsive image">
									</h2>
									<?php echo validation_errors(); ?>
									<?php
										if(!empty($success_msg)){
											echo '<p class="statusMsg">'.$success_msg.'</p>';
										}elseif(!empty($error_msg)){
											echo '<p class="statusMsg">'.$error_msg.'</p>';
										}
									?>
								</div>
							
								<form method="post" action="register_submit">
									
									<input type="hidden" name="a" value="signup">
									<input type="hidden" name="action" value="signup">
									
									<div class="row">
										<div class="col-xs-20 text-center">
											<h3>
												<img src="/assets/img/personal-icon1.png" class="pull-left" alt="Responsive image">
												Your Personal Data
												<span></span>
											</h3>
											<div class="reg_form">
												<div class="form-group">
													<label>Name:</label>
													<input type="text" name="name" value="<?php echo !empty($user['name'])?$user['name']:''; ?>" class="form-control">
													<?php echo form_error('name','<span class="help-block">','</span>'); ?>
												</div>
												<div class="form-group">
													<label>E-mail:</label>
													<div data-container="body" data-toggle="popover" data-placement="right" data-content="We strongly recommend you to use YAHOO or GMAIL mail clients. Please, don't use other mail clients to avoid confusion and difficulties that could occur while interacting with the Company." data-original-title="" title="">
														<input type="text" name="email" class="form-control" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
														<?php echo form_error('email','<span class="help-block">','</span>'); ?>
													</div>
												</div>
												<div class="form-group">
													<label>Whatsapp</label>
													<input type="text" name="phone" class="form-control" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
													<?php echo form_error('phone','<span class="help-block">','</span>'); ?>
												</div>
															</div> 
										</div>

										<div class="col-xs-20 text-center">
											<h3>
												<img src="/assets/img/personal-icon2.png" class="pull-left" alt="Responsive image">
												Your account information
												<span></span>
											</h3>
											<div class="reg_form">
												<div class="form-group">
													<label>Username:</label>
													<div data-container="body" data-toggle="popover" data-placement="right" data-content="Please use only Latin letters and numbers" data-original-title="" title="">
														<input type="text" class="form-control" name="username" value="<?php echo !empty($user['username'])?$user['username']:''; ?>">
														<?php echo form_error('username','<span class="help-block">','</span>'); ?>
													</div>
												</div>
												<div class="form-group">
													<label>Password:</label>
													<div data-container="body" data-toggle="popover" data-placement="right" data-content="Please use at least 8 characters" data-original-title="" title="">
														<input type="password" name="password" value="<?php echo !empty($user['password'])?$user['password']:''; ?>" class="form-control">
														<?php echo form_error('password','<span class="help-block">','</span>'); ?>
													</div>
												</div>
												<div class="form-group">
													<label>Confirm Password:</label>
													<div data-container="body" data-toggle="popover" data-placement="right" data-content="We strongly recommend remembering and writing down your Password" data-original-title="" title="">
														<input type="password" name="conf_password" value="<?php echo !empty($user['conf_password'])?$user['conf_password']:''; ?>" class="form-control">
														<?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
													</div>
												</div>
												
											</div>
										</div>

										<div class="col-xs-20 text-center">
											<h3>
												<img src="/assets/img/personal-icon3.png" class="pull-left" alt="Responsive image">
												Payment Information
												<span></span>
											</h3>
											<div class="reg_form">
											<div class="form-group">
													<label>Sponser name:</label>
													<div data-container="body" data-toggle="popover" data-placement="right" data-content="We strongly recommend remembering and writing down your Secret Question" data-original-title="" title="">
														<input type="text" name="sponser_name" value="<?php echo !empty($user['sponser_name'])?$user['sponser_name']:''; ?>" class="form-control">
														<?php echo form_error('sponser_name','<span class="help-block">','</span>'); ?>
													</div>
												</div>
												<div class="form-group">
													<label>Transaction pin:</label>
													<div data-container="body" data-toggle="popover" data-placement="right" data-content="We strongly recommend remembering and writing down your Secret Answer" data-original-title="" title="">
														<input type="text" name="transaction_pin" value="<?php echo !empty($user['transaction_pin'])?$user['transaction_pin']:''; ?>" class="form-control">
														<?php echo form_error('transaction_pin','<span class="help-block">','</span>'); ?>
													</div>
												</div>

													<div class="form-group">
													<label>Your Payeer account:</label>
															<input type="text" class="form-control" name="pay_account" value="<?php echo !empty($user['pay_account'])?$user['pay_account']:''; ?>">
															<?php echo form_error('pay_account','<span class="help-block">','</span>'); ?>
														</div>
												</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-46 text-right">
											<div class="radio">
											<input type="radio" name="agree" id="browser_sec_set1" value="1" checked="checked">
										    <label for="browser_sec_set1">I accept the Agreement</label>
											</div>
										</div>
										
										<div class="col-xs-14">
											<input type="submit" value="REGISTRATION" name="regisSubmit" class="btn btn_green text-uppercase">
										</div>
									</div>
								</form>
							</div>
 
 
 	
		
	  				</div>

	  			</div>

	  		</div>

			</div>