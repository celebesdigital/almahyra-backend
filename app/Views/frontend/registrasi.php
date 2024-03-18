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
										<input class="form-control name" type="text" name="name"
											placeholder="Nama Lengkap">
									</div>

									<!-- Form Input -->
									<div class="col-md-12">
										<p class="p-sm input-header">No. KTP</p>
										<input class="form-control" type="number" name="ktp" placeholder="Nomor KTP">
									</div>

									<!-- Form Input -->
									<div class="col-md-12">
										<p class="p-sm input-header">No. Telpon (WA Aktif)</p>
										<input class="form-control" type="number" name="nomor"
											placeholder="Nomor Telpon">
									</div>


									<!-- Form Input -->
									<div class="col-md-12">
										<p class="p-sm input-header">Alamat (sesuai ktp)</p>
										<input class="form-control" type="text" name="alamat" placeholder="">
									</div>

									<!-- Form Input -->
									<div class="col-md-12">
										<p class="p-sm input-header">Provinsi</p>
										<select class="form-control" type="text" name="provinsi"
											id="province" required>
											<option value="">Pilih Provinsi</option>
										</select>
									</div>

									<!-- Form Input -->
									<div class="col-md-12">
										<p class="p-sm input-header">Kabupaten</p>
										<select class="form-control" type="text" name="kabupaten" placeholder=""
											id="regencies" disabled>
											<option value="">Pilih Kabupaten</option>

										</select>
									</div>


									<!-- Form Input -->
									<div class="col-md-12">
										<p class="p-sm input-header">Kecamatan</p>
										<select class="form-control" type="text" name="kecamatan" placeholder=""
											id="district" disabled>
											<option value="">Pilih Kecamatan</option>
										</select>
									</div>


									<!-- Form Input -->
									<div class="col-md-12">
										<p class="p-sm input-header">Kode referal</p>
										<input class="form-control" type="text" name="referal" placeholder="">
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
										<button id="submit-registrasi" type="submit"
											class="btn btn--blue-400 hover--blue-500 submit disabled">Create
											Account</button>
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
						</div> <!-- END SIGN UP FORM -->


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
						</div> <!-- END SIGN UP PAGE TEXT -->


					</div> <!-- End row -->
				</div> <!-- End register-page-wrapper -->
			</div> <!-- END REGISTER PAGE WRAPPER -->


		</div> <!-- End row -->
	</div> <!-- End container -->
</div> <!-- END SIGN UP PAGE -->

<script>

	const provinceSelect = document.getElementById('province')
	const regenciesSelect = document.getElementById('regencies')
	const districtsSelect = document.getElementById('district')

	async function getProvinces() {
		try {
			const response = await fetch(`/api/provinces.json`);
			const data = await response.json();
			return data;
		} catch (error) {
			console.error('Error fetching provinces:', error);
			throw error;
		}
	}

	async function getRegencies(idProvinsi) {
		try {

			const response = await fetch(`/api/regencies/${idProvinsi}.json`);
			const data = await response.json();
			return data;
		} catch (error) {
			console.error('Error fetching regencies:', error);
			throw error;
		}
	}

	async function getDistrict(idRegencies) {
		try {

			const response = await fetch(`/api/districts/${idRegencies}.json`);
			const data = await response.json();
			return data;
		} catch (error) {
			console.error('Error fetching districts:', error);
			throw error;
		}
	}

	(async () => {
		const provincesData = await getProvinces();

		provincesData.forEach(province => {
			const option = document.createElement('option');
			option.value = province.id;
			option.textContent = province.name;
			provinceSelect.appendChild(option);
		});
	})();

	provinceSelect.addEventListener('change', () => {
		const idProvinsi = provinceSelect.value;
		[...regenciesSelect.querySelectorAll('option')].forEach(option => {
			if (option.value !== "") {
				option.remove()
			}
		})

		async function addRegenciesOption(idProvinsi) {
			const regenciesData = await getRegencies(idProvinsi);

			regenciesData.forEach(regencies => {
				const option = document.createElement('option');
				option.value = regencies.id;
				option.textContent = regencies.name;
				regenciesSelect.appendChild(option);
			});

		};
		addRegenciesOption(idProvinsi)

		regenciesSelect.removeAttribute('disabled')
	})

	regenciesSelect.addEventListener('change', () => {
		const idRegencies = regenciesSelect.value;
		[...districtsSelect.querySelectorAll('option')].forEach(option => {
			if (option.value !== "") {
				option.remove()
			}
		})

		async function addDistrictOption(idRegencies) {
			const districtData = await getDistrict(idRegencies);

			districtData.forEach(regencies => {
				const option = document.createElement('option');
				option.value = regencies.id;
				option.textContent = regencies.name;
				districtsSelect.appendChild(option);
			});

		};
		addDistrictOption(idRegencies)

		districtsSelect.removeAttribute('disabled')
	})
</script>

<?php $this->endSection(); ?>