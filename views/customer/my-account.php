<doctype html>
<html lang="en">

<body>
    <!-- account-details Area Start -->
		<div class="customer-login-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-xs-12">
						<div class="customer-login my-account">
							<form method="post" class="login" action="index.php?url=login">
								<div class="form-fields">
									<h2>Đăng nhập</h2>
									<p class="form-row form-row-wide">
										<label for="username">Tên đăng nhập <span class="required">*</span></label>
										<input type="text" class="input-text" name="user_name" id="username" value="" required>
									</p>
									<p class="form-row form-row-wide">
										<label for="password">Mật khẩu <span class="required">*</span></label>
										<input class="input-text" type="password" name="password" id="password" required> 
									</p>
								</div>
								<div class="form-action">
									<p class="lost_password"> <a href="index.php?url=forget">Quên mật khẩu?</a></p>
									<div class="actions-log">
										<input type="submit" class="button" name="login" value="Đăng nhập">
									</div>
									<!-- <label for="rememberme" class="inline"> 
									<input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label> -->
								</div>
								
							</form>
							
						</div>
						
					</div>
					
					

					<div class="col-sm-12 col-md-6 col-xs-12">
						<div class="customer-register my-account">
							<form method="post" class="register" action="index.php?url=register">
								<div class="form-fields">
									<h2>Đăng kí</h2>
                                    
                                    <p class="form-row form-row-wide">
										<label for="reg_email">Họ tên <span class="required">*</span></label>
										<input type="text" class="input-text" name="name" id="reg_email" value="" required>
									</p>
                                    <p class="form-row form-row-wide">
										<label for="reg_email">Tên đăng nhập <span class="required">*</span></label>
										<input type="text" class="input-text" name="user_name" id="reg_email" value="" required>
									</p>
                                    <p class="form-row form-row-wide">
										<label for="reg_email">Địa chỉ <span class="required">*</span></label>
										<input type="text" class="input-text" name="address" id="reg_email" value="" required>
									</p>
                                    <p class="form-row form-row-wide">
										<label for="reg_email">Số điện thoại <span class="required">*</span></label>
										<input type="number" class="input-text" name="phone" id="reg_email" value="" required>
									</p>
									<p class="form-row form-row-wide">
										<label for="reg_email">Email <span class="required">*</span></label>
										<input type="email" class="input-text" name="email" id="reg_email" value="" required>
									</p>
									<p class="form-row form-row-wide">
                                        <label for="reg_password">Mật khẩu <span class="required">*</span></label>
										<input type="password" class="input-text" name="password" id="reg_password" required>
									</p>
									<div style="left: -999em; position: absolute;">
										<label for="trap">Anti-spam</label>
										<input type="text" name="email_2" id="trap" tabindex="-1">
									</div>
								</div>
								<div class="form-action">
									<div class="actions-log">
										<input type="submit" class="button" name="register" value="Đăng kí">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- account-details Area end -->

    
    
    <!-- Placed js at the end of the document so the pages load faster -->
    
    <!-- All js plugins included in this file. -->
    <!-- <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mail.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script> -->

</body>


<!-- Mirrored from web.dotthemes.com/html/dotbike-preview/dotbike/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 08:55:26 GMT -->
</html>