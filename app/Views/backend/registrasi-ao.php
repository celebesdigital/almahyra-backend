<?php
	$this->extend('layout/backend/header');
	$this->section('content');
?>

<div class="card border-top border-0 border-4 border-info">
	<div class="card-body">
		<div class="border p-4 rounded">
			<div class="card-title d-flex align-items-center">
				<div><i class="bx bxs-user me-1 font-22 text-info"></i>
				</div>
				<h5 class="mb-0 text-info">Registrasi AO</h5>
			</div>

			<hr>

			<div class="row mb-3">
				<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap (sesuai KTP)</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
				</div>
			</div>

			<div class="row mb-3">
				<label for="nomor" class="col-sm-3 col-form-label">No. Telpon ( WA Aktif )</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor Telpon">
				</div>
			</div>

			<div class="row mb-3">
				<label for="ktp" class="col-sm-3 col-form-label">No. KTP</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="ktp" name="ktp" placeholder="Nomor KTP">
				</div>
			</div>

			<div class="row mb-3">
				<label for="alamat" class="col-sm-3 col-form-label">Alamat ( Sesuai KTP )</label>
				<div class="col-sm-9">
					<input class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat">
				</div>
			</div>

			<div class="row mb-3">
				<label for="email" class="col-sm-3 col-form-label">Alamat Email</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" id="email" name="email" placeholder="Email">
				</div>
			</div>

			<div class="row mb-3">
				<label for="username" class="col-sm-3 col-form-label">Username</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" id="username" name="username" placeholder="Username">
				</div>
			</div>

			<div class="row mb-3">
				<label for="password" class="col-sm-3 col-form-label">Password</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" id="password" name="password" placeholder="Password">
				</div>
			</div>

			<div class="row mb-3">
				<label for="kode-ao" class="col-sm-3 col-form-label">Kode AO</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" id="kode-ao" name="kode" placeholder="Tentukan Kode AO">
				</div>
			</div>

			<div class="row">
				<label class="col-sm-3 col-form-label"></label>
				<div class="col-sm-9">
					<button type="submit" class="btn btn-info px-5 w-100">Daftarkan</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->endSection(); ?>