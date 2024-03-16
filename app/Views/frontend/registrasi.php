<?php
	$this->extend('layout/registrasi/header');
	$this->section('content');
?>

			<!-- SIGN UP PAGE
			============================================= -->
			<div id="signup" class="bg--scroll login-section division">
				<div class="container">
					<div class="row justify-content-center">


						<!-- REGISTER PAGE WRAPPER -->
						<div class="col-lg-11">
							<div class="register-page-wrapper r-16 bg--fixed">
								<div class="row">


									<!-- SIGN UP FORM -->
									<div class="col-md-6">
										<div class="register-page-form">
											<form name="signupform" class="row sign-up-form">

												<!-- Form Input -->
												<div class="col-md-12">
													<p class="p-sm input-header">Nama Lengkap (sesuai ktp) </p>
													<input class="form-control name" type="text" name="name" placeholder="Nama Lengkap">
												</div>

												<!-- Form Input -->
												<div class="col-md-12">
													<p class="p-sm input-header">No. KTP</p>
													<input class="form-control" type="number" name="ktp" placeholder="Nomor KTP">
												</div>

												<!-- Form Input -->
												<div class="col-md-12">
													<p class="p-sm input-header">No. Telpon (WA Aktif)</p>
													<input class="form-control" type="number" name="telpon" placeholder="Nomor Telpon">
												</div>


												<!-- Form Input -->
												<div class="col-md-12">
													<p class="p-sm input-header">Alamat (sesuai ktp)</p>
													<input class="form-control" type="text" name="provinsi" placeholder="">
												</div>

												<!-- Form Input -->
												<div class="col-md-12">
													<p class="p-sm input-header">Provinsi</p>
													<input class="form-control" type="text" name="provinsi" placeholder="">
												</div>


												<!-- Form Input -->
												<div class="col-md-12">
													<p class="p-sm input-header">Kabupaten</p>
													<input class="form-control" type="text" name="kabupaten" placeholder="">
												</div>


												<!-- Form Input -->
												<div class="col-md-12">
													<p class="p-sm input-header">Kecamatan</p>
													<input class="form-control" type="text" name="kecamatan" placeholder="">
												</div>


												<!-- Form Input -->
												<div class="col-md-12">
													<p class="p-sm input-header">Id Upline</p>
													<input class="form-control" type="text" name="upline" placeholder="">
												</div>


												<!-- Checkbox -->
												<div class="col-md-12">
													<div class="form-data">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="agreement">
															<label>
																agree to our
																<a href="terms.html" class="color--blue-400">Terms</a>
																and that you have read our
																<a href="privacy.html" class="color--blue-400"> Privacy Policy</a>
															</label>
														</div>
													</div>
												</div>

												<!-- Form Submit Button -->
												<div class="col-md-12">
													<button id="submit-registrasi" type="submit" class="btn btn--blue-400 hover--blue-500 submit disabled">Create Account</button>
												</div>

												<script>
													const agree = document.getElementById('agreement');
													const submit = document.getElementById('submit-registrasi');
													agree.addEventListener('change', () => {
														agree.checked ? submit.classList.replace('disabled', '--disable') : submit.classList.replace('--disable', 'disabled');
														console.log(submit);
													});
												</script>

												<!-- Log In Link -->
												<div class="col-md-12">
													<p class="create-account text-center">
														Sudah Terdaftar? <a href="/login" class="color--blue-400">Log in</a>
													</p>
												</div>

											</form>
										</div>
									</div>	<!-- END SIGN UP FORM -->


									<!-- SIGN UP PAGE TEXT -->
									<div class="col-md-6">
										<div class="register-page-txt color--white">


											<!-- Section ID -->
						 					<span class="section-id">Start for free</span>

											<!-- Title -->
											<h2 class="s-48 w-700">Daftar</h2>
											<h2 class="s-48 w-700">Menjadi Mitra</h2>

											<!-- Text -->
											<p class="p-md mt-25">Integer congue sagittis and velna augue egestas magna
											   suscipit purus aliquam
											</p>

											<!-- Copyright -->
											<div class="register-page-copyright">
												<p class="p-sm">&copy; 2023 Martex. <span>All Rights Reserved</span></p>
											</div>

										</div>
									</div>	<!-- END SIGN UP PAGE TEXT -->


								</div>  <!-- End row -->
							</div>	<!-- End register-page-wrapper -->
						</div>	<!-- END REGISTER PAGE WRAPPER -->


			 		</div>	   <!-- End row -->
			 	</div>	   <!-- End container -->
			</div>	<!-- END SIGN UP PAGE -->

<?php $this->endSection(); ?>