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

								<?= form_open('', 'class="row g-3"') ?>
									<div class="col-md-6">
										<label for="tujuan" class="form-label">Tujuan Orderan</label>
										<select type="text" class="form-control" name="tujuan" id="tujuan">
											<!-- <option value="">- Pilih Tujuan -</option> -->
											<option value="upline">Upline</option>
											<option value="downline">Downline</option>
										</select>
									</div>

									<div class="col-md-6 display" id="upline">
										<label class="form-label">Kode Referal Tujuan </label>
										<input type="text" name="id_pengirim" class="form-control" id="id-pengirim-1" value="<?= $id_upline; ?>" disabled>
									</div>

									<div class="col-md-6 display" id="downline">
										<label class="form-label w-100">Kode Referal Tujuan </label>
										<select type="text" name="id_pengirim" class="form-control select2" id="id-pengirim-2" value="" disabled>
											<?php foreach ($id_downline as $downline): ?>
												<option value="<?= $downline->id; ?>"><?= $downline->kode_referal.' - '.$downline->nama; ?></option>
											<?php endforeach; ?>
										</select>
									</div>

									<div class="col-md-6">
										<label for="jenis-mutasi-clone" class="form-label">Jenis Mutasi</label>
										<?= $optionMutasi; ?>
									</div>

									<div class="col-md-6">
										<label for="status"class="form-label">status</label>
										<input type="text" class="form-control" name="status" id="status" value="order" readonly />
									</div>

									<div class="col-12">
										<div class="row gap-2">
											<div class="col">
												<input type="text" class="form-control h-100 fs-3 text-center" name="jumlah" id="jumlah" value="<?= set_value('jumlah', $mutasi->jumlah); ?>" placeholder="Isi Jumlah">
											</div>

											<div class="col-md-10">
												<textarea class="form-control" name="catatan" id="catatan" placeholder="Keterangan..." rows="6"></textarea>
											</div>
										</div>
									</div>

									<div class="col-12 text-center">
										<button type="submit" class="btn btn-primary w-100">Buat Order</button>
									</div>

									<input type="hidden" name="id_penerima" id="id-user" value="22"/>
									<input type="hidden" name="jenis_mutasi" id="jenis-mutasi" value=""/>
									<input type="hidden" name="tgl_order" id="tgl-order" value="<?= date('Y-m-d'); ?>"/>
									<input type="hidden" name="nomor_mutasi" id="nomor-mutasi" value="<?= time(); ?>"/>

								<?= form_close(); ?>
							</div>
						</div>
					</div>

					<script>
						const status			= document.querySelector('#status');
						const tujuanElement		= document.querySelector('#tujuan');
						const jenisMutasi		= document.querySelector('#jenis-mutasi');
						const idPengirim1		= document.querySelector('#id-pengirim-1');
						const idPengirim2		= document.querySelector('#id-pengirim-2');
						const jenisMutasiClone	= document.querySelector('#jenis-mutasi-clone');
						const tujuan			= document.querySelectorAll('#tujuan option');
						const downline			= document.querySelector('#downline');
						const upline			= document.querySelector('#upline');

						// spanSelect2.style.width = '100%';

						statusDanJenis();

						tujuanElement.addEventListener('change', () => {
							statusDanJenis();
						});

						function statusDanJenis() {
							tujuan.forEach(el => {
								if ( el.selected == true && el.value == 'downline' ) {
									idPengirim1.disabled = true;
									idPengirim2.disabled = false;
									upline.classList.replace('display','d-none');
									downline.classList.replace('d-none','display');
								} else {
									downline.classList.replace('display','d-none');
									upline.classList.replace('d-none','display');
									idPengirim1.disabled = false;
									idPengirim2.disabled = true;
								}
							});
						}
					</script>

<?php $this->endSection(); ?>