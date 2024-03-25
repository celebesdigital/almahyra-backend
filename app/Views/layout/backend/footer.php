					<div class="modal-area">
						<!-- catatan -->
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

						<!-- respon orderan -->
						<div class="modal fade" id="modalResponOrder" tabindex="-1" aria-labelledby="modalResponOrderTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header align-top">
										<div class="">
											<h1 class="modal-title fs-5" id="modalResponOrderTitle">Respon Orderan</h1>
											<p class="fw-lighter font-14">Nomor Transaksi: <span id="nomor-transaksi">4785612</span></p>
										</div>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<form>
										<div class="modal-body">
											<div class="mb-3">
												<div class="d-flex justify-between">
													<label for="jumlah" class="col-form-label">Jumlah:</label>
													<label for="jumlah" class="col-form-label ms-auto">Stok Anda: 345pcs</label>
												</div>
												<input type="text" class="form-control" id="jumlah" name="jumlah" value="">
											</div>
											<div class="mb-3">
												<label for="catatan" class="col-form-label">Catatan:</label>
												<textarea class="form-control" id="catatan" name="catatan" rows="6" value=""></textarea>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary text-capitalize px-4" id="push-data">proses</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<script>
							const jumlah			= document.getElementById('jumlah');
							const catatan			= document.getElementById('catatan');
							const nomorTransaksi	= document.getElementById('nomor-transaksi');
							const btnPushData	= document.getElementById('push-data');
							console.log(jumlah, catatan, nomorTransaksi, btnPushData);
							function kirim(dataNomorTransaksi, dataJumlah, dataCatatan) {
								jumlah.value = dataJumlah;
								catatan.value = dataCatatan;
								nomorTransaksi.innerText = dataNomorTransaksi;
								jumlah.disabled = true;
								catatan.disabled = true;
								btnPushData.innerText = 'kirim';
								// console.log(btnPushData, nomorTransaksi)
							}


							function proses(param) {
									jumlah.value = '';
									jumlah.disabled = false;
									catatan.value = '';
									catatan.disabled = false;
									nomorTransaksi.innerText = param;
							}
						</script>

					</div>
				</div>
				<!-- end page content -->
			</div>
			<!--end page wrapper -->
		<!--start overlay-->
		<div class="search-overlay"></div>
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="/js/jquery.min.js"></script>
	<script src="/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="/plugins/highcharts/js/highcharts.js"></script>
	<script src="/plugins/highcharts/js/exporting.js"></script>
	<script src="/plugins/highcharts/js/variable-pie.js"></script>
	<script src="/plugins/highcharts/js/export-data.js"></script>
	<script src="/plugins/highcharts/js/accessibility.js"></script>
	<script src="/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="/vendors/fontawesome/all.min.js"></script>
	<!-- <script src="/js/index.js"></script> -->
	<!--app JS-->
	<script src="/js/app.js"></script>
	<script src="/js/custom.js"></script>
</body>

</html>