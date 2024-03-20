<?php
	$this->extend('layout/registrasi/header');
	$this->section('content');
?>

<style>
	#login .register-page-wrapper:after, #signup .register-page-wrapper:after {
		background-color: transparent;
	}
</style>
			<!-- LOGIN PAGE
			============================================= -->
			<div id="login" class="bg--scroll login-section division">
				<div class="container">
					<div class="row justify-content-center">


						<!-- REGISTER PAGE WRAPPER -->
						<div class="col-lg-11">
							<div class="register-page-wrapper r-16 bg--fixed login-2">
								<div class="row">


									<!-- LOGIN PAGE TEXT -->
									<div class="col-12">
										<div class="register-page-txt color--white">

											<!-- Logo -->
											<img class="img-fluid" src="/_web/images/logo/LOGO-ALMAHYRA-2.png" alt="logo-image"
											style="
												width: auto;
												max-height: 90px;
											">


											<!-- Title -->
											<h2 class="s-42 w-700">Selamat Datang</h2>

											<!-- Text -->
											<p class="p-md mt-15 fs-3 mb-5">Akun untuk Nomor KTP ini sedang dalam proses</p>

											<!-- Copyright -->
											<div class="register-page-copyright">
												<p class="p-sm">&copy; 2024 ALMAHYRA. <span>All Rights Reserved</span></p>
											</div>

										</div>
									</div>	<!-- END LOGIN PAGE TEXT -->

								</div>  <!-- End row -->
							</div>	<!-- End register-page-wrapper -->
						</div>	<!-- END REGISTER PAGE WRAPPER -->


			 		</div>	   <!-- End row -->
			 	</div>	   <!-- End container -->
			</div>	<!-- END LOGIN PAGE -->

<?= $this->endSection()?>