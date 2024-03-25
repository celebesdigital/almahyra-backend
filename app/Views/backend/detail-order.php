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
			<!-- <div class="col-12">
				form
			</div> -->

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
										<td>0001200002</td>
										<td>300pcs</td>
										<td>
											<a href="javascript:;" class="mb-1 font-14"onclick="dataCatatan('WLorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam nesciunt alias vitae praesentium incidunt, minus quam, dignissimos, corrupti itaque provident ad ipsa et consequuntur quibusdam dolor quo harum? Doloremque, reprehenderit.')" data-bs-toggle="modal" data-bs-target="#modalCatatan" >Klik disini untuk lihat</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-order w-100 text-capitalize">order</span></td>
										<td>
											<button type="button" class="btn btn-sm btn-outline-primary text-capitalize fw-semibold w-100" onclick="proses('0001200002')"data-bs-toggle="modal" data-bs-target="#modalResponOrder">proses</button>
										</td>
									</tr>
									<tr>
										<td>0001200001</td>
										<td>500pcs</td>
										<td>
											<a href="javascript:;" class="mb-1 font-14" onclick="dataCatatan('Nihil consequuntur illo velit esse libero architecto obcaecati, debitis harum perspiciatis veritatis aliquid ullam assumenda dignissimos! Sequi odit nobis qui quo sit! Enim magni repellendus praesentium dolores facere, id quisquam?')" data-bs-toggle="modal" data-bs-target="#modalCatatan">Klik disini untuk lihat</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-proses w-100 text-capitalize">proses</span></td>
										<td>
											<button type="button" class="btn btn-sm btn-outline-primary fw-semibold w-100 text-capitalize" onclick="kirim('0001200003', '500pcs', 'Nihil consequuntur illo velit esse libero architecto obcaecati, debitis harum perspiciatis veritatis aliquid ullam assumenda dignissimos! Sequi odit nobis qui quo sit! Enim magni repellendus praesentium dolores facere, id quisquam?')" data-bs-toggle="modal" data-bs-target="#modalResponOrder">kirim</button>
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
								<h5 class="mb-1">Orderan Dalam Perjalanan</h5>
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
										<td>0001200003</td>
										<td>500pcs</td>
										<td>
											<a href="javascript:;" class="mb-1 font-14" onclick="dataCatatan('Id alias, a quo neque facere adipisci sed, laboriosam nihil, quam dolores fugit! Non eius est debitis, doloribus libero soluta dignissimos veritatis molestiae animi. Sunt unde hic accusantium omnis autem.')" data-bs-toggle="modal" data-bs-target="#modalCatatan">Klik disini untuk lihat</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-kirim w-100 text-capitalize">kirim</span></td>
										<td>
											<a href="http://wa.me/6281342989230?teks=Apakah%20pesanan%20anda%20sudah%20sampai?">
												<button type="button" class="btn btn-sm btn-outline-primary fw-semibold w-100 text-capitalize">hubungi</button>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
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
										<th>No. Mutasi</th>
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
										<td>#149.25</td>
										<td>
											<a href="javascript:;" class="mb-1 font-14"onclick="dataCatatan('WLorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam nesciunt alias vitae praesentium incidunt, minus quam, dignissimos, corrupti itaque provident ad ipsa et consequuntur quibusdam dolor quo harum? Doloremque, reprehenderit.')" data-bs-toggle="modal" data-bs-target="#modalCatatan" >Klik disini untuk lihat</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-selesai w-100">Selesai</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx bx-dots-vertical-rounded text-option"></i>
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
										<td>#149.25</td>
										<td>
											<a href="javascript:;" class="mb-1 font-14"onclick="dataCatatan('WLorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam nesciunt alias vitae praesentium incidunt, minus quam, dignissimos, corrupti itaque provident ad ipsa et consequuntur quibusdam dolor quo harum? Doloremque, reprehenderit.')" data-bs-toggle="modal" data-bs-target="#modalCatatan" >Klik disini untuk lihat</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-batal w-100">Batal</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx bx-dots-vertical-rounded text-option"></i>
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
										<td>#149.25</td>
										<td>
											<a href="javascript:;" class="mb-1 font-14"onclick="dataCatatan('WLorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam nesciunt alias vitae praesentium incidunt, minus quam, dignissimos, corrupti itaque provident ad ipsa et consequuntur quibusdam dolor quo harum? Doloremque, reprehenderit.')" data-bs-toggle="modal" data-bs-target="#modalCatatan" >Klik disini untuk lihat</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-selesai w-100 text-capitalize">selesai</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx bx-dots-vertical-rounded text-option"></i>
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
										<td>#149.25</td>
										<td>
											<a href="javascript:;" class="mb-1 font-14"onclick="dataCatatan('WLorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam nesciunt alias vitae praesentium incidunt, minus quam, dignissimos, corrupti itaque provident ad ipsa et consequuntur quibusdam dolor quo harum? Doloremque, reprehenderit.')" data-bs-toggle="modal" data-bs-target="#modalCatatan" >Klik disini untuk lihat</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-selesai w-100">Selesai</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx bx-dots-vertical-rounded text-option"></i>
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
										<td>#149.25</td>
										<td>
											<a href="javascript:;" class="mb-1 font-14"onclick="dataCatatan('WLorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam nesciunt alias vitae praesentium incidunt, minus quam, dignissimos, corrupti itaque provident ad ipsa et consequuntur quibusdam dolor quo harum? Doloremque, reprehenderit.')" data-bs-toggle="modal" data-bs-target="#modalCatatan" >Klik disini untuk lihat</a>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge status-batal w-100">Batal</span></td>
										<td>
											<div class="dropdown ms-auto order-action">
												<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx bx-dots-vertical-rounded text-option"></i>
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