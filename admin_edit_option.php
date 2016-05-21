<?php
	require 'core/init.php';
	$id = $_GET['id'];

	$resultOption = viewDataId('feature_point', $id);
	$dataOption = mysqli_fetch_assoc($resultOption);

	if(isset($_POST['submit'])){
//		print_r($_POST);
		
		$value = "feature_option='".$_POST['option']."', point='".$_POST['point']."'";
		editData('feature_point', $value, $id);


//		editOption($_POST['option'], $_POST['point'], $id);
	}
?>

<div class="content">
<div class="container-fluid">

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Edit <?= $_GET['feature'];?> Option</h4>
				</div>
				
				<div class="content">
					<form action="admin_edit_option.php?id=<?= $id;?>" method="post">

						<div class="row">
							<div class="col-md-10">
								<div class="form-group">
									<label>Option</label>
									<input type="text" placeholder="Option" name="option" class="form-control" value="<?= $dataOption['feature_option']; ?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>Point</label>
									<input type="number" placeholder="Point" name="point" class="form-control"  value="<?= $dataOption['point']; ?>" required>
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