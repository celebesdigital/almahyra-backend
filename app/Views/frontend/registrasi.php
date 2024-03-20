<?php
$this->extend('layout/registrasi/header');
$this->section('content');
dd(session('user'))
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
								<form method="post" name="signupform" class="row sign-up-form">

									<!-- Form Input -->
									<div class="col-md-12">
										<label for="nama" class="p-sm input-header">Nama Lengkap (sesuai ktp) </label>
										<input id="nama" class="form-control name" type="text" name="nama"
											placeholder="Nama Lengkap" required value="<?=old("nama")?>">
										<p class = "text-danger"><?= isset(validation_errors()['nama']) ? validation_errors()['nama'] : null?></p>
									</div>

									<!-- Form Input -->
									<div class="col-md-12">
										<label for="username" class="p-sm input-header">Username </label>
										<input id="username" class="form-control name" type="text" name="username"
											placeholder="Username" required value="<?=old("username")?>">
										<p class = "text-danger"><?= isset(validation_errors()['username']) ? validation_errors()['username'] : null?></p>
									</div>

									<!-- Form Input -->
									<div class="col-md-12">
										<label for="password" class="p-sm input-header">Password </label>
										<input id="password" class="form-control name" type="password" name="password"
											placeholder="Password" required value="">
										<p class = "text-danger"><?= isset(validation_errors()['password']) ? validation_errors()['password'] : null?></p>
									</div>

									<!-- Form Input -->
									<div class="col-md-12">
										<label for="ktp" class="p-sm input-header">No. KTP</label>
										<input id="ktp" class="form-control" type="number" name="ktp"
											placeholder="Nomor KTP"
											required value="<?=old("ktp")?>" max="9999999999999999" minlength="1000000000000000">
										<p class = "text-danger"><?= isset(validation_errors()['ktp']) ? validation_errors()['ktp']: null?></p>

									</div>

									<!-- Form Input -->
									<div class="col-md-12">
										<label for="email" class="p-sm input-header">Alamat Email</label>
										<input id="email" class="form-control" type="email" name="email"
											placeholder="example@gmail.com" required value="<?=old("email")?>">
										<p class = "text-danger"><?= isset(validation_errors()['email']) ? validation_errors()['email']: null?></p>
									</div>

									<!-- Form Input -->
									<div class="col-md-12">
										<label for="nomor" class="p-sm input-header">No. Telpon (WA Aktif)</label>
										<input id="nomor" class="form-control" type="number" name="nomor"
											placeholder="08xxxxxxxxx" required value="<?=old("nomor")?>">
										<p class = "text-danger"><?= isset(validation_errors()['nomor']) ? validation_errors()['nomor']: null?></p>
									</div>


									<!-- Form Input -->
									<div class="col-md-12">
										<label for="alamat" class="p-sm input-header">Alamat (sesuai ktp)</label>
										<input id="alamat" class="form-control" type="text" name="alamat"
											placeholder="JALAN XXXXXX" required value="<?=old("alamat")?>">
										<p class = "text-danger"><?= isset(validation_errors()['alamat']) ? validation_errors()['alamat']: null?></p>
									</div>

									<!-- Form Input -->
									<div class="col-md-12">
										<label for="provinsi" class="p-sm input-header">Provinsi</label>
										<select id="provinsi" class="form-control" type="text" name="provinsi"
											required value="<?=old("provinsi")?>">
											<option value="">Pilih Provinsi</option>
										</select>
									</div>

									<!-- Form Input -->
									<div class="col-md-12">
										<label for="kabupaten" class="p-sm input-header">Kabupaten</label>
										<select id="kabupaten" class="form-control" type="text" name="kabupaten"
											disabled required value="<?=old("kabupaten")?>">
											<option value="">Pilih Kabupaten</option>

										</select>
									</div>


									<!-- Form Input -->
									<div class="col-md-12">
										<label for="kecamatan" class="p-sm input-header">Kecamatan</label>
										<select id="kecamatan" class="form-control" type="text" name="kecamatan"
											disabled required value="<?=old("kecamatan")?>">
											<option value="">Pilih Kecamatan</option>
										</select>
									</div>


									<!-- Form Input -->
									<div class="col-md-12">
										<label for="referal" class="p-sm input-header">Kode referal</label>
										<input id="referal" class="form-control" type="text" name="referal"
											placeholder="xxxxxxxx" required value="<?=old("referal")?>">
										<p class = "text-danger"><?= isset(validation_errors()['referal']) ? validation_errors()['referal']: null?></p>
									</div>


									<!-- Checkbox -->
									<div class="col-md-12">
										<div class="form-data">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value=""
													id="agreement" required>
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
											class="btn btn--blue-400 hover--blue-500 submit ">Buat akun</button>
									</div>

									

									<!-- Log In Link -->
									<div class="col-md-12">
										<p class="create-account text-center">
											Sudah terdaftar? <a href="/login" class="color--blue-400">Log in</a>
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
									<label for="" class="p-sm">&copy; 2023 Martex. <span>All Rights
											Reserved</span></label>
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

	const provinceSelect = document.getElementById('provinsi')
	const regenciesSelect = document.getElementById('kabupaten')
	const districtsSelect = document.getElementById('kecamatan')

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