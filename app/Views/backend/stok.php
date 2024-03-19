<?php
	$this->extend('layout/backend/header');
	$this->section('content');
?>

<div id="stok" >
	<div class="row gap-4 text-light">
		<div class="col-md-4 text-light bg-primary rounded d-flex flex-column align-items-center p-5">
			<p class="text-center fs-5 text-uppercase fw-bold">
				stok anda
			</p>
			<div class="example fw-bolder">
				<div>121</div>
				<div class="satuan">pcs</div>
			</div>

			<div class="w-100">
				<a href="/backend/mutasi/order"><button class="btn w-100 btn-light px-5 fw-medium">Restok</button></a>
			</div>
		</div>

		<div class="col bg-primary rounded p-5 fs-5 fw-semibold">
			<p class="title text-uppercase">
				Distribuasi Stok Kloter Ini
			</p>

			<div class="row row-cols-2 row-cols-md-3">
				<div class="col">
					<div class="card radius-10">
						<div class="card-body">
							<div class="text-center">
								<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user text-primary"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
								</div>
								<h4 class="my-1">2500pcs</h4>
								<p class="mb-0 text-secondary">Stok Masuk</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card radius-10">
						<div class="card-body">
							<div class="text-center">
								<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users text-primary"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
								</div>
								<h4 class="my-1">2300pcs</h4>
								<p class="mb-0 text-secondary">Dikirim ke Mitra</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card radius-10">
						<div class="card-body">
							<div class="text-center">
								<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary text-info mb-3">
									<i class="bx bxs-purchase-tag"></i>
								</div>
								<h4 class="my-1">79pcs</h4>
								<p class="mb-0 text-secondary">Penjualan</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->endSection(); ?>