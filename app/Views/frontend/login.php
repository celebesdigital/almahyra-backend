<?php
	$this->extend('layout/registrasi/header');
	$this->section('content');
?>


			<!-- LOGIN PAGE
			============================================= -->
			<div id="login" class="bg--scroll login-section division">
				<div class="container">
					<div class="row justify-content-center">


						<!-- REGISTER PAGE WRAPPER -->
						<div class="col-lg-11">
							<div class="register-page-wrapper r-16 bg--fixed">
								<div class="row">


									<!-- LOGIN PAGE TEXT -->
									<div class="col-md-6">
										<div class="register-page-txt color--white">

											<!-- Logo -->
											<img class="img-fluid" src="/_web/images/logo/LOGO-ALMAHYRA-2.png" alt="logo-image"
											style="
												width: auto;
												max-height: 230px;
												margin: -125px 0px -33px -8px;
											">


											<!-- Title -->
											<h2 class="s-42 w-700">Selamat</h2>
											<h2 class="s-42 w-700">Datang</h2>

											<!-- Text -->
											<p class="p-md mt-25">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente voluptatum hic architecto</p>

											<!-- Copyright -->
											<div class="register-page-copyright">
												<p class="p-sm">&copy; 2024 ALMAHYRA. <span>All Rights Reserved</span></p>
											</div>

										</div>
									</div>	<!-- END LOGIN PAGE TEXT -->


									<!-- LOGIN FORM -->
									<div class="col-md-6">
										<div class="register-page-form">
											<form name="signinform" class="row sign-in-form">

												<!-- Form Input -->
												<div class="col-md-12">
													<p class="p-sm input-header">Username</p>
													<input class="form-control" type="text" name="username" placeholder="Masukkan Username">
												</div>

												<!-- Form Input -->
												<div class="col-md-12">
													<p class="p-sm input-header">Password</p>
													<div class="wrap-input">
														<span class="btn-show-pass ico-20"><span class="flaticon-visibility eye-pass"></span></span>
														<input class="form-control password" type="password" name="password" placeholder="Masukkan Password">
													</div>
												</div>

												<!-- Reset Password Link -->
												<div class="col-md-12">
													<div class="reset-password-link">
														<p class="p-sm"><a href="reset-password.html" class="color--blue-400">Forgot your password?</a></p>
													</div>
												</div>

												<!-- Form Submit Button -->
												<div class="col-md-12">
													<button type="submit" class="btn btn--blue-400 hover--blue-500 submit">Log In</button>
												</div>

												<!-- Sign Up Link -->
												<div class="col-md-12">
													<p class="create-account text-center">
														Belum Punya Akun Mitra? <a href="/registrasi" class="color--blue-400">Daftar</a>
													</p>
												</div>

											</form>
										</div>
									</div>	<!-- END LOGIN FORM -->


								</div>  <!-- End row -->
							</div>	<!-- End register-page-wrapper -->
						</div>	<!-- END REGISTER PAGE WRAPPER -->


			 		</div>	   <!-- End row -->
			 	</div>	   <!-- End container -->
			</div>	<!-- END LOGIN PAGE -->

<?= $this->endSection()?>