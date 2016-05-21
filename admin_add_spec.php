<?php
	require 'core/init.php';
	
	if(isset($_POST['submit'])){
//		print_r($_POST);
		$value = "'','". $_POST['level'] ."','". $_POST['cpu_intel'] ."','". $_POST['cpu_amd'] ."','". $_POST['gpu_nvidia'] ."','" . $_POST['gpu_amd'] ."','" . $_POST['memory']. "','" . $_POST['hdd']. "','" . $_POST['os']. "','" . $_POST['price']. "','" . $_POST['id']."'";
		addData('specification',$value);
	}
?>

	<div class="content">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4 class="title">Add Spec Recommendation</h4>
						</div>
						<div class="content">

							<form action="admin_add_spec.php" method="post">
								<input type="hidden" name="id" value="<?= $_GET['id']?>">

								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label>Level</label>
											<input type="number" placeholder="Level" name="level" class="form-control" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>CPU (INTEL)</label>
											<input type="text" placeholder="CPU (INTEL)" name="cpu_intel" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>CPU (AMD)</label>
											<input type="text" placeholder="CPU (AMD)" name="cpu_amd" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>GPU (NVIDIA)</label>
											<input type="text" placeholder="GPU (NVIDIA)" name="gpu_nvidia" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>GPU (AMD)</label>
											<input type="text" placeholder="GPU (AMD)" name="gpu_amd" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Memory</label>
											<input type="text" placeholder="Memory" name="memory" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>HDD</label>
											<input type="text" placeholder="HDD" name="hdd" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Operating System</label>
											<input type="text" placeholder="Operating System" name="os" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Estimated Price</label>
											<div class="input-group">
												<div class="input-group-addon">Rp.</div>
												<input type="number" placeholder="Price" name="price" class="form-control">
											</div>
										</div>
									</div>
								</div>

								<button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Submit</button>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>