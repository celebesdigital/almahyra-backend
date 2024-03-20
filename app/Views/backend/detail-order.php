<?php
	$this->extend('layout/backend/header');
	$this->section('content');
?>

<div id="detail-mutasi" class="row">
	<div class="col-md-4 position-relative">
		<div class="card radius-15 sticky-top card-sticky">
			<div class="card-body text-center">
				<div class="p-4 border radius-15 profile">
					<img src="/images/avatars/avatar-1.png" width="110" height="110" class="rounded-circle shadow" alt="">
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
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-1">Orderan Terbaru</h5>
							</div>
						</div>

						<div class="row mt-3">
							<!-- <div class="col-md-6">
								<label for="status"class="form-label">status</label>
								<input type="text" class="form-control" name="status" id="status" value="order" disabled />
							</div> -->

							<div class="col-12 mb-2">
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
							<!-- <table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>Nama Pemesan</th>
										<th>Tanggal Order</th>
										<th>Status</th>
										<th>Jumlah</th>
										<th class="text-center">Ket</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="/backend/mutasi/order/12">
												<div class="d-flex align-items-center">
													<div class="recent-product-img  rounded-circle">
														<img src="/images/products/15.png" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Light Red T-Shirt</h6>
													</div>
												</div>
											</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-selesai w-100">Selesai</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/16.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Grey Headphone</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-batal w-100">Batal</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/19.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Grey Hand Watch</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-order w-100">Order</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/07.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Brown Sofa</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-kirim w-100">Kirim</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/17.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Black iPhone 11</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-selesai w-100">Selesai</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/14.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-proses w-100">Proses</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/08.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Grey Stand Table</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-batal w-100">Batal</span></td>
										<td>#149.25</td>
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
							</table> -->
						</div>

					</div>
				</div>
			</div>

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
										<th>Nama Pemesan</th>
										<th>Tanggal Order</th>
										<th>Status</th>
										<th>Jumlah</th>
										<th class="text-center">Ket</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="/backend/mutasi/order/12">
												<div class="d-flex align-items-center">
													<div class="recent-product-img  rounded-circle">
														<img src="/images/products/15.png" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Light Red T-Shirt</h6>
													</div>
												</div>
											</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-selesai w-100">Selesai</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/16.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Grey Headphone</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-batal w-100">Batal</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/19.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Grey Hand Watch</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-order w-100">Order</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/07.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Brown Sofa</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-kirim w-100">Kirim</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/17.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Black iPhone 11</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-selesai w-100">Selesai</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/14.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-proses w-100">Proses</span></td>
										<td>#149.25</td>
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
										<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img rounded-circle">
												<img src="/images/products/08.png" alt="">
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Grey Stand Table</h6>
											</div>
										</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-batal w-100">Batal</span></td>
										<td>#149.25</td>
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