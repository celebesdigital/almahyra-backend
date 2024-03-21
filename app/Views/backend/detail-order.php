<?php
	$this->extend('layout/backend/header');
	$this->section('content');
?>

<div id="detail-mutasi" class="row">
	<div class="col-md-4 position-relative">
		<div class="card radius-15 sticky-top card-sticky">
			<div class="card-body text-center">
				<div class="p-4 border radius-15 profile">
					<img src="/images/avatars/lampu-bulan-square.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
					<h5 class="mb-0 mt-5">Pauline I. Bird</h5>
					<p class="mb-3">Makasssar, Sulawesi Selatan</p>
					<div class="list-inline contacts-social mb-3"> <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="bx bxl-facebook"></i></a>
						<a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="bx bxl-twitter"></i></a>
						<a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="bx bxl-google"></i></a>
						<a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="bx bxl-linkedin"></i></a>
					</div>
					<div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contact Me</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="row">
			<div class="col-12">
				form
			</div>

			<div class="col-12">
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-1">Orderan Terbaru</h5>
							</div>
						</div>

						<div class="table-responsive mt-3">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>No. Mutasi</th>
										<th>Jumlah</th>
										<th>Catatan</th>
										<th>Tanggal Order</th>
										<th class="text-center">Status</th>
										<th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>0001200001</td>
										<td>500pcs</td>
										<td>

											<a href="javascript:;" class="mb-1 font-14" onclick="dataCatatan('This is some placeholder content to show a vertically centered modal. We have added some extra copy here to show how vertically centering the modal works when combined with scrollable modals. We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal')" data-bs-toggle="modal" data-bs-target="#modalCatatan">Klik disini untuk lihat</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-order w-100 text-capitalize">order</span></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary w-100" onclick="proses('0001200001')" data-bs-toggle="modal" data-bs-target="#modalResponOrder">Proses</button>
										</td>
									</tr>
									<tr>
										<td>0001200002</td>
										<td>300pcs</td>
										<td>
											<a href="javascript:;" class="mb-1 font-14"onclick="dataCatatan('We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal')" data-bs-toggle="modal" data-bs-target="#modalCatatan" >Klik disini untuk lihat</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-order w-100 text-capitalize">order</span></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary w-100" onclick="proses('0001200002')"data-bs-toggle="modal" data-bs-target="#modalResponOrder">Proses</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>

				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-1">Orderan Dalam Proses</h5>
							</div>
						</div>

						<div class="modal fade" id="modalCatatan" tabindex="-1" aria-labelledby="modalCatatanTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title fs-5" id="modalCatatanTitle">Catatan</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										<p id="catatan-place"></p>
									</div>

								</div>
							</div>
						</div>

						<div class="modal fade" id="modalResponOrder" tabindex="-1" aria-labelledby="modalResponOrderTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title fs-5" id="modalResponOrderTitle">Respon Orderan</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<form>
										<div class="modal-body">
											<div class="mb-3">
												<div class="d-flex justify-between">
													<label for="jumlah" class="col-form-label">Jumlah:</label>
													<label for="jumlah" class="col-form-label ms-auto">Stok Anda: 345pcs</label>
												</div>
												<input type="text" class="form-control" id="jumlah" name="jumlah" >
											</div>
											<div class="mb-3">
												<label for="catatan" class="col-form-label">Catatan:</label>
												<textarea class="form-control" id="catatan" name="catatan" value=""></textarea>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary">Proses</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>


			</div>

			<script>
				const catatan = document.getElementById('catatan-place');
				function dataCatatan(a) { catatan.textContent = a }
			</script>

			<div class="col">
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-1">Riwayat Orderan</h5>
							</div>
						</div>

						<div class="table-responsive mt-3">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>Jumlah</th>
										<th>Catatan</th>
										<th>Tanggal Order</th>
										<th class="text-center">Status</th>
										<th class="text-center">Ket</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#149.25</td>
										<td>
											<h6 class="mb-1 font-14">Light Red T-Shirt</h6>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-selesai w-100">Selesai</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx status-kirim bx-dots-vertical-rounded text-option"></i>
												</div>
												<div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-0.8px, 40px, 0px);">
													<a class="dropdown-item" href="/backend/mutasi/order/12">Lihat Detail</a>
													<a class="dropdown-item" href="javaScript:;">Pin Pesanan</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="javaScript:;">Something else here</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>#149.25</td>
										<td>
											<h6 class="mb-1 font-14">Grey Headphone</h6>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-batal w-100">Batal</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx status-kirim bx-dots-vertical-rounded text-option"></i>
												</div>
												<div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-0.8px, 40px, 0px);">
													<a class="dropdown-item" href="/backend/mutasi/order/12">Lihat Detail</a>
													<a class="dropdown-item" href="javaScript:;">Pin Pesanan</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="javaScript:;">Something else here</a>
												</div>
											</div>

										</td>
									</tr>
									<tr>
										<td>#149.25</td>
										<td>
											<h6 class="mb-1 font-14">Grey Hand Watch</h6>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-selesai w-100 text-capitalize">selesai</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx status-kirim bx-dots-vertical-rounded text-option"></i>
												</div>
												<div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-0.8px, 40px, 0px);">
													<a class="dropdown-item" href="/backend/mutasi/order/12">Lihat Detail</a>
													<a class="dropdown-item" href="javaScript:;">Pin Pesanan</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="javaScript:;">Something else here</a>
												</div>
											</div>

										</td>
									</tr>
									<tr>
										<td>#149.25</td>
										<td>
											<h6 class="mb-1 font-14">Brown Sofa</h6>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-kirim w-100">Kirim</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx status-kirim bx-dots-vertical-rounded text-option"></i>
												</div>
												<div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-0.8px, 40px, 0px);">
													<a class="dropdown-item" href="/backend/mutasi/order/12">Lihat Detail</a>
													<a class="dropdown-item" href="javaScript:;">Pin Pesanan</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="javaScript:;">Something else here</a>
												</div>
											</div>

										</td>
									</tr>
									<tr>
										<td>#149.25</td>
										<td>
											<h6 class="mb-1 font-14">Black iPhone 11</h6>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-selesai w-100">Selesai</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx status-kirim bx-dots-vertical-rounded text-option"></i>
												</div>
												<div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-0.8px, 40px, 0px);">
													<a class="dropdown-item" href="/backend/mutasi/order/12">Lihat Detail</a>
													<a class="dropdown-item" href="javaScript:;">Pin Pesanan</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="javaScript:;">Something else here</a>
												</div>
											</div>

										</td>
									</tr>
									<tr>
										<td>#149.25</td>
										<td>
											<h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-proses w-100">Proses</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx status-kirim bx-dots-vertical-rounded text-option"></i>
												</div>
												<div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-0.8px, 40px, 0px);">
													<a class="dropdown-item" href="/backend/mutasi/order/12">Lihat Detail</a>
													<a class="dropdown-item" href="javaScript:;">Pin Pesanan</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="javaScript:;">Something else here</a>
												</div>
											</div>

										</td>
									</tr>
									<tr>
										<td>#149.25</td>
										<td>
											<h6 class="mb-1 font-14">Grey Stand Table</h6>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-batal w-100">Batal</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx status-kirim bx-dots-vertical-rounded text-option"></i>
												</div>
												<div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-0.8px, 40px, 0px);">
													<a class="dropdown-item" href="/backend/mutasi/order/12">Lihat Detail</a>
													<a class="dropdown-item" href="javaScript:;">Pin Pesanan</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="javaScript:;">Something else here</a>
												</div>
											</div>

										</td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<?php $this->endSection(); ?>