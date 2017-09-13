<div id="content_box">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-60">
				<div id="page">
					<div class="block_title border_none">
						<h2>
						<img src="/assets/img/title-img-left.png" class="title-img-left" alt="Responsive image">
						User
						<span>Login</span>
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
					<form method="post" action="UserDashboard">
						<div class="row">
										<div class="col-xs-60 text-center">
											
											<div class="reg_form">
												<div class="form-group">
													<label>Username:</label>
													<div data-container="body" data-toggle="popover" data-placement="right" data-content="Please use only Latin letters and numbers" data-original-title="" title="">
														<input type="text" class="form-control" name="username" value="<?php echo !empty($user['username'])?$user['username']:''; ?>">
														<?php echo form_error('username','<span class="help-block">','</span>'); ?>
													</div>
												</div>
												
												
											</div>
										</div>

										<div class="col-xs-60 text-center">
											<div class="reg_form">
											<div class="form-group">
													<label>Password:</label>
													<div data-container="body" data-toggle="popover" data-placement="right" data-content="Please use at least 8 characters" data-original-title="" title="">
														<input type="password" name="password" value="<?php echo !empty($user['password'])?$user['password']:''; ?>" class="form-control">
														<?php echo form_error('password','<span class="help-block">','</span>'); ?>
													</div>
												</div>
												</div>
										</div>
										
										<div class="col-xs-60 text-center">
											<input type="submit" value="Login" name="loginSubmit" class="btn btn_green text-uppercase">
										</div>
									</div>

									<div class="row">
									<div class="col-xs-20">
									<div class="col-xs-20 text-right">
											<!--a href="#">Forgot password?</a-->
											</div>
										</div>
									</div>
									</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>