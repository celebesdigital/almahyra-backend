<?php
	$this->extend('layout/backend/header');
	$this->section('content');
?>

<style>
	.example {
		height: 250px;
		width: 250px;
		display: inline-flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		/* padding: 60px; */
		border-radius: 50%;
		border: 3px solid var(--bs-secondary);
		font-size: 75px;
	}

	.example .satuan {
		line-height: 0;
		font-size: 20px;
	}
</style>

<div id="stok">
	<div class="row gap-4">
		<div class="col-md-4 bg-light rounded d-flex flex-column align-items-center py-5">
			<div class="example fw-bolder">
				<div>20000</div>
				<div class="satuan">pcs</div>
				<!-- <span </span> -->
			</div>
			<p class="text-center">
				"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus a nihil, impedit illo laborum molestias voluptatum delectus laboriosam modi sit?"
			</p>
		</div>

		<div class="col bg-light rounded d-flex flex-column align-items-center py-5">
		<div class="row ">
				<div class="col-12">
					<div class="card radius-10 overflow-hidden bg-gradient-cosmic">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-white">Total Orders</p>
									<h5 class="mb-0 text-white">867</h5>
								</div>
								<div class="ms-auto text-white"><i class="bx bx-cart font-30"></i>
								</div>
							</div>
							<div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
								<div class="progress-bar bg-white" role="progressbar" style="width: 46%"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="card radius-10 overflow-hidden bg-gradient-burning">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-white">Total Income</p>
									<h5 class="mb-0 text-white">$52,945</h5>
								</div>
								<div class="ms-auto text-white"><i class="bx bx-wallet font-30"></i>
								</div>
							</div>
							<div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
								<div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-white">Total Users</p>
									<h5 class="mb-0 text-white">24.5K</h5>
								</div>
								<div class="ms-auto text-white"><i class="bx bx-bulb font-30"></i>
								</div>
							</div>
							<div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
								<div class="progress-bar bg-white" role="progressbar" style="width: 68%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->endSection(); ?>