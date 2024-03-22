<?php
	$this->extend('layout/backend/header');
	$this->section('content');
?>



				<div class="dash-wrapper dash-header">
					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-cols-xxl-5">
						<div class="col border-end border-light-2">
							<div class="card bg-transparent shadow-none mb-0">
								<div class="card-body text-center">
								<p class="mb-1 text-white">Sessions</p>
								<h3 class="mb-3 text-white">876</h3>
								<p class="font-13 text-white"><span class="text-success"><i class="lni lni-arrow-up"></i>2.1%</span> vs last 7 days</p>
								<div id="chart1"></div>
								</div>
							</div>
						</div>
						<div class="col border-end border-light-2">
						<div class="card bg-transparent shadow-none mb-0">
							<div class="card-body text-center">
								<p class="mb-1 text-white">Total Users</p>
								<h3 class="mb-3 text-white">4.5M</h3>
								<p class="font-13 text-white"><span class="text-success"><i class="lni lni-arrow-up"></i> 4.2% </span> last 7 days</p>
								<div id="chart2"></div>
							</div>
						</div>
					</div>
					<div class="col border-end border-light-2">
						<div class="card bg-transparent shadow-none mb-0">
							<div class="card-body text-center">
								<p class="mb-1 text-white">Page Views</p>
								<h3 class="mb-3 text-white">64,835</h3>
								<p class="font-13 text-white"><span class="text-danger"><i class="lni lni-arrow-down"></i> 3.6%</span> vs last 7 days</p>
								<div id="chart3"></div>
							</div>
						</div>
					</div>
					<div class="col border-end border-light-2">
						<div class="card bg-transparent shadow-none mb-0">
							<div class="card-body text-center">
								<p class="mb-1 text-white">Bounce Rate</p>
								<h3 class="mb-3 text-white">42.68%</h3>
								<p class="font-13 text-white"><span class="text-success"><i class="lni lni-arrow-up"></i> 2.5%</span> vs last 7 days</p>
								<div id="chart4"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card bg-transparent shadow-none mb-0">
							<div class="card-body text-center">
								<p class="mb-1 text-white">Avg. Session Duration</p>
								<h3 class="mb-3 text-white">00:04:60</h3>
								<p class="font-13 text-white"><span class="text-danger"><i class="lni lni-arrow-down"></i> 5.2%</span> vs last 7 days</p>
								<div id="chart5"></div>
							</div>
						</div>
					</div>
					</div><!--end row-->
				</div>

				<!-- Daftar Akun Belum Valid -->
				<div class="col">
					<div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-1">Daftar permintaan validasi akun</h5>
								</div>
							</div>

							<div class="table-responsive mt-3 min-height-240">
								<table class="table align-middle mb-0">
									<thead class="table-light">
										<tr class="align-top">
											<th>Nama</th>
											<th>Alamat</th>
											<th>Daerah<br><span class="fw-normal">kec/kab/prov</span></th>
											<th>Tanggal Registrasi</th>
											<th>Level Mitra</th>
											<th>Upline</th>
											<th class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><h6 class="mb-1 font-14">Light Red T-Shirt</h6></td>
											<td>Jl. Andi Djemma</td>
											<td>Rappocini, Makassar, Sulawesi Selatan</td>
											<td>22 Jun, 2020</td>
											<td>Reseller</td>
											<td>Popol Kupa</td>
											<td class="d-flex cc-gap-1">
												<button type="button" class="btn btn-sm btn-success w-100">validasi</button>
												<div class="dropdown ms-auto order-action">
													<div class="cursor-pointer dropdown-toggle dropdown-toggle-nocaret text-center" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="bx status-kirim bx-dots-vertical-rounded text-option"></i>
													</div>
													<div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-0.8px, 40px, 0px);">
														<a class="dropdown-item" target="_blank" href="http://wa.me/6281342989230?teks=Assalamualaikum%0AApakah%20benar%20ada%20reseller%20baru%20yang%20mendaftar%20menggunakan%20kode%20referalmu">Hubungi Upline</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="javaScript:;">Hapus</a>
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

				<div class="row row-cols-1 row-cols-xl-2">
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Sales Overview</h6>
									</div>
									<div class="dropdown ms-auto">
											<button class="btn btn-white btn-sm radius-10 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
												This Month
											</button>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<li><a class="dropdown-item" href="#">This Week</a></li>
												<li><a class="dropdown-item" href="#">This Month</a></li>
												<li><a class="dropdown-item" href="#">This Year</a></li>
											</ul>
										</div>
								</div>
							<div id="chart6"></div>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Visitor Status</h6>
									</div>
									<div class="d-flex align-items-center ms-auto font-13 gap-2">
										<span class="border px-1 rounded cursor-pointer"><i class='bx bxs-circle text-primary me-1'></i>New Visitor</span>
										<span class="border px-1 rounded cursor-pointer"><i class='bx bxs-circle text-sky-light me-1'></i>Old Visitor</span>
									</div>
								</div>
							<div id="chart7"></div>
							</div>
						</div>
					</div>
				</div><!--end row-->

				<div class="row">
					<div class="col-12 col-lg-8 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Geographic</h6>
									</div>
									<div class="dropdown ms-auto">
										<div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded text-option"></i>
										</div>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item" href="javaScript:;">Action</a>
											<a class="dropdown-item" href="javaScript:;">Another action</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javaScript:;">Something else here</a>
										</div>
									</div>
								</div>
								<div class="" id="geographic-map"></div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Impressions By Country</h6>
									</div>
									<div class="dropdown ms-auto">
										<div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded text-option"></i>
										</div>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item" href="javaScript:;">Action</a>
											<a class="dropdown-item" href="javaScript:;">Another action</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javaScript:;">Something else here</a>
										</div>
									</div>
								</div>
							</div>
							<div class="dashboard-top-countries mb-3 p-3">

								<div class="row mb-4">
									<div class="col-2">
										<img src="/images/icons/united-states.png" width="42" alt="">
									</div>
									<div class="col">
										<p class="mb-2">United States <strong class="float-end">445,85</strong></p>
										<div class="progress radius-10" style="height:6px;">
											<div class="progress-bar bg-gradient-blues" role="progressbar" style="width: 86%"></div>
										</div>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-2">
										<img src="/images/icons/germany.png" width="42" alt="">
									</div>
									<div class="col">
										<p class="mb-2">Germany <strong class="float-end">683,46</strong></p>
										<div class="progress radius-10" style="height:6px;">
											<div class="progress-bar bg-gradient-cosmic" role="progressbar" style="width: 66%"></div>
										</div>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-2">
										<img src="/images/icons/canada.png" width="42" alt="">
									</div>
									<div class="col">
										<p class="mb-2">Canada <strong class="float-end">982,43</strong></p>
										<div class="progress radius-10" style="height:6px;">
											<div class="progress-bar bg-gradient-burning" role="progressbar" style="width: 56%"></div>
										</div>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-2">
										<img src="/images/icons/india.png" width="42" alt="">
									</div>
									<div class="col">
										<p class="mb-2">India <strong class="float-end">852,35</strong></p>
										<div class="progress radius-10" style="height:6px;">
											<div class="progress-bar bg-gradient-lush" role="progressbar" style="width: 45%"></div>
										</div>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-2">
										<img src="/images/icons/netherlands.png" width="42" alt="">
									</div>
									<div class="col">
										<p class="mb-2">Netherlands <strong class="float-end">785,24</strong></p>
										<div class="progress radius-10" style="height:6px;">
											<div class="progress-bar bg-gradient-kyoto" role="progressbar" style="width: 38%"></div>
										</div>
									</div>
								</div>
								<div class="row mb-0">
									<div class="col-2">
										<img src="/images/icons/malaysia.png" width="42" alt="">
									</div>
									<div class="col">
										<p class="mb-2">Malaysia <strong class="float-end">387,56</strong></p>
										<div class="progress radius-10" style="height:6px;">
											<div class="progress-bar bg-gradient-moonlit" role="progressbar" style="width: 28%"></div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div><!--end row-->

				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col d-flex">
					<div class="card radius-10 p-0 w-100 bg-transparent shadow-none">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">New Sessions</p>
										<h5 class="mb-0">54.6%</h5>
									</div>
									<div class="widgets-icons bg-light-primary text-primary ms-auto"><i class="bx bxs-cookie"></i></div>
								</div>
								<div id="chart8"></div>
							</div>
						</div>
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Average Pages</p>
										<h5 class="mb-0">38.5%</h5>
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class="bx bxs-bookmark-alt-plus"></i></div>
								</div>
								<div id="chart9"></div>
							</div>
						</div>
						<div class="card radius-10 mb-0">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Cloud Download</p>
										<h5 class="mb-0">24.5K</h5>
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-cloud-download"></i></div>
								</div>
								<div id="chart10"></div>
							</div>
						</div>
					</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Goal Statistics</h6>
									</div>
									<div class="dropdown ms-auto">
										<div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded text-option"></i>
										</div>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item" href="javaScript:;">Action</a>
											<a class="dropdown-item" href="javaScript:;">Another action</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javaScript:;">Something else here</a>
										</div>
									</div>
								</div>
								<div id="chart11"></div>
								<div class="row align-items-center py-2">
									<div class="col-auto">
										<p class="mb-0">Sales</p>
									</div>
									<div class="col-auto">
										<p class="mb-0">1580</p>
									</div>
									<div class="col-auto">
										<p class="mb-0">875</p>
									</div>
									<div class="col">
										<div class="progress radius-10 mb-0" style="height:6px;">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
										</div>
									</div>
								</div><!--end row-->

								<div class="row align-items-center py-2">
									<div class="col-auto">
									<p class="mb-0">Users</p>
									</div>
									<div class="col-auto">
									<p class="mb-0">1852</p>
								</div>
								<div class="col-auto">
									<p class="mb-0">356</p>
								</div>
								<div class="col">
									<div class="progress radius-10 mb-0" style="height:6px;">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
									</div>
								</div>
								</div><!--end row-->

								<div class="row align-items-center py-2">
									<div class="col-auto">
									<p class="mb-0">Visits</p>
									</div>
									<div class="col-auto">
									<p class="mb-0">1280</p>
								</div>
								<div class="col-auto">
									<p class="mb-0">867</p>
								</div>
								<div class="col">
									<div class="progress radius-10 mb-0" style="height:6px;">
										<div class="progress-bar bg-success" role="progressbar" style="width: 45%"></div>
									</div>
								</div>
								</div><!--end row-->
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 p-0 w-100 p-3">
						<div class="card radius-10 shadow-none bg-transparent border">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-center justify-content-lg-start">
									<div id="chart12"></div>
									<div class="">
										<p class="mb-0 d-flex align-items-center"><i class='bx bx-male text-danger fs-4'></i><span class="mx-2">Male</span><span>65%</span></p>
										<p class="mb-0 d-flex align-items-center"><i class='bx bx-female text-primary fs-4'></i><span class="mx-2">Male</span><span>35%</span></p>
									</div>
								</div>
							</div>
						</div>

						<div class="card radius-10 mb-0 shadow-none bg-transparent mb-0 border">
							<div class="card-body">
								<div class="d-flex align-items-center mb-4">
									<div>
										<h6 class="mb-0">Device Type</h6>
									</div>

									<div class="dropdown ms-auto">
										<div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded text-option"></i>
										</div>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item" href="javaScript:;">Action</a>
											<a class="dropdown-item" href="javaScript:;">Another action</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javaScript:;">Something else here</a>
										</div>
									</div>
								</div>

								<div class="row row-cols-3 g-3">
									<div class="col">
										<div class="d-flex gap-2">
											<h4 class="mb-1 d-flex">61 <span class="align-self-start fs-6">%</span></h4>
											<p class="mb-0 align-self-center text-success">(+8.4%)</p>
										</div>
										<p class="mb-0 d-flex align-items-center"><i class='bx bxs-circle text-info fs-6'></i><span class="mx-2">Android</span></p>
									</div>

									<div class="col">
										<div class="d-flex gap-2">
											<h4 class="mb-1 d-flex">28 <span class="align-self-start fs-6">%</span></h4>
											<p class="mb-0 align-self-center text-danger">(-1.9%)</p>
										</div>
										<p class="mb-0 d-flex align-items-center"><i class='bx bxs-circle text-success fs-6'></i><span class="mx-2">iOS</span></p>
									</div>

									<div class="col">
										<div class="d-flex gap-2">
											<h4 class="mb-1 d-flex">11 <span class="align-self-start fs-6">%</span></h4>
											<p class="mb-0 align-self-center text-success">(+6.8%)</p>
										</div>
										<p class="mb-0 d-flex align-items-center"><i class='bx bxs-circle text-warning fs-6'></i><span class="mx-2">Other</span></p>
									</div>
								</div>

								<div class="progress radius-10 mt-4" style="height: 10px">
									<div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>

							</div>
						</div>
					</div>
					</div>
				</div><!--end row-->

				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="card radius-10">
							<div class="card-body">
								<div id="chart13"></div>
							</div>
						</div>
					</div>

					<div class="col-12 col-lg-6">
						<div class="card radius-10">
							<div class="card-body">
								<div id="chart14"></div>
							</div>
						</div>
					</div>
				</div><!--end row-->


<?php $this->endSection(); ?>