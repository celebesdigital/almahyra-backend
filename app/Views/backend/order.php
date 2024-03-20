<?php
	$this->extend('layout/backend/header');
	$this->section('content');
?>

				<div class="row">
					<div class="col-12">
						<h6 class="mb-0 text-uppercase">Order</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-primary"></i>
									</div>
									<h5 class="mb-0 text-primary">Buat Orderan</h5>
								</div>

								<hr>

								<?= form_open('/backend/mutasi', 'class="row g-3"') ?>
									<div class="col-md-6">
										<label for="tujuan" class="form-label">Tujuan Orderan</label>
										<select type="text" class="form-control" name="tujuan" id="tujuan">
											<option value="upline">Upline</option>
											<option value="downline">Downline</option>
										</select>
									</div>

									<div class="col-md-6">
										<label for="id-pengirim" class="form-label">Kode Referal Tujuan </label>
										<input type="text" class="form-control" name="id-pengirim" id="id-pengirim" value="">
									</div>

									<div class="col-md-6">
										<label for="jenis-mutasi-clone" class="form-label">Jenis Mutasi</label>
										<input type="text" class="form-control" id="jenis-mutasi-clone" value="" disabled />
									</div>

									<div class="col-md-6">
										<label for="status"class="form-label">status</label>
										<input type="text" class="form-control" name="status" id="status" value="order" disabled />
									</div>

									<div class="col-12">
										<div class="row gap-2">
											<div class="col">
												<input type="text" class="form-control h-100 fs-3 text-center" id="jumlah" placeholder="Isi Jumlah">
											</div>

											<div class="col-md-10">
												<textarea class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan..." rows="6"></textarea>
											</div>
										</div>
									</div>

									<div class="col-12 text-center">
										<button type="submit" class="btn btn-primary w-100">Buat Order</button>
									</div>

									<input type="hidden" name="id-penerima" id="id-user" value=""/>
									<input type="hidden" name="jenis-mutasi" id="jenis-mutasi" value=""/>
								<?= form_close(); ?>
							</div>
						</div>
					</div>

					<script>
						const status			= document.querySelector('#status');
						const tujuanElement		= document.querySelector('#tujuan');
						const jenisMutasi		= document.querySelector('#jenis-mutasi');
						const jenisMutasiClone	= document.querySelector('#jenis-mutasi-clone');
						const tujuan			= document.querySelectorAll('#tujuan option');

						tujuanElement.addEventListener('change', () => {
							statusDanJenis();
						});

						statusDanJenis();
						function statusDanJenis() {
							tujuan.forEach(el => {
								if ( el.selected == true && el.value == 'downline' ) {
									jenisMutasi.value = 'antarMitra';
									jenisMutasiClone.value = 'Antara Mitra'
								} else {
									jenisMutasi.value = 'aoKeKantorPusat';
									jenisMutasiClone.value = 'AO ke Kantor Pusat'
								}
							});
						}
					</script>

<?php $this->endSection(); ?>