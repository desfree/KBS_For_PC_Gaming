<?php
	require 'core/init.php';
	$id = $_GET['id'];

	$resultSpec = viewDataId('specification', $id);
	$dataSpec = mysqli_fetch_assoc($resultSpec);

	if(isset($_POST['submit'])){
//		print_r($_POST);
		$value = "level='".$_POST['level']."', cpu_intel='".$_POST['cpu_intel']."',cpu_amd='".$_POST['cpu_amd']."',gpu_nvidia='".$_POST['gpu_nvidia']."',gpu_amd='".$_POST['gpu_amd']."',mem='".$_POST['mem']."',hdd='".$_POST['hdd']."',os='".$_POST['os']."',estimated_price='".$_POST['price']."'";
		editData('specification', $value, $id);

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

							<form action="admin_edit_spec.php?id=<?= $id;?>" method="post">

								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label>Level</label>
											<input type="number" placeholder="Level" name="level" class="form-control" required value="<?= $dataSpec['level']; ?>">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>CPU (INTEL)</label>
											<input type="text" placeholder="CPU (INTEL)" name="cpu_intel" class="form-control" value="<?= $dataSpec['cpu_intel']; ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>CPU (AMD)</label>
											<input type="text" placeholder="CPU (AMD)" name="cpu_amd" class="form-control" value="<?= $dataSpec['cpu_amd']; ?>">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>GPU (NVIDIA)</label>
											<input type="text" placeholder="GPU (NVIDIA)" name="gpu_nvidia" class="form-control" value="<?= $dataSpec['gpu_nvidia']; ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>GPU (AMD)</label>
											<input type="text" placeholder="GPU (AMD)" name="gpu_amd" class="form-control" value="<?= $dataSpec['gpu_amd']; ?>">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Memory</label>
											<input type="text" placeholder="Memory" name="mem" class="form-control" value="<?= $dataSpec['mem']; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>HDD</label>
											<input type="text" placeholder="HDD" name="hdd" class="form-control" value="<?= $dataSpec['hdd']; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Operating System</label>
											<input type="text" placeholder="Operating System" name="os" class="form-control" value="<?= $dataSpec['os']; ?>">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Estimated Price</label>
											<div class="input-group">
												<div class="input-group-addon">Rp.</div>
												<input type="number" placeholder="Price" name="price" class="form-control" value="<?= $dataSpec['estimated_price']; ?>">
											</div>
										</div>
									</div>
								</div>

								<button type="submit" name="submit" class="btn btn-success btn-fill pull-right">Update</button>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>