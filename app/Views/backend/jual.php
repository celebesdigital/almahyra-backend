<?php
	$this->extend('layout/backend/header');
	$this->section('content');
?>

				<div class="row">
					<div class="col-12">
						<h6 class="mb-0 text-uppercase">Jual</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-primary me-2 me-md-0"></i></div>
									<div class="d-flex justify-content-between w-100 flex-column flex-md-row">
										<h5 class="mb-0 text-primary">Penjualan</h5>
										<p class="m-0">stok saat ini: 355pcs</p>
									</div>
								</div>
								<hr>

								<?= form_open('/backend/mutasi/jual', 'class="row g-3"') ?>
									<div class="col-12">
										<div class="row mb-3 gap-3">
											<div class="col">
												<input type="text" class="form-control h-100 fs-3 text-center" id="jumlah" placeholder="Isi Jumlah">
											</div>

											<div class="col-md-10">
												<textarea class="form-control" id="keterangan" placeholder="Keterangan..." rows="3"></textarea>
											</div>
										</div>

										<div>
											<p class="m-0">* jumlah diatas dalam satuan pcs.</p>
											<p class="m-0">* pastikan jumlah benar.</p>
											<p class="m-0">* tuliskan keterangan.</p>
										</div>
									</div>

									<div class="col-12 text-center">
										<button type="submit" class="btn btn-primary px-5">Tambah Penjualan</button>
									</div>

									<input type="hidden" id="id-user" value=""/>
								<?= form_close(); ?>
							</div>
						</div>
					</div>

<?php $this->endSection(); ?>