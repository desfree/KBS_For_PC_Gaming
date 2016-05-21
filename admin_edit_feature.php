<?php
	require 'core/init.php';
	$id = $_GET['id'];

	$resultFeature = viewDataId('feature', $id);
	$dataFeature = mysqli_fetch_assoc($resultFeature);

	$resultOption = viewDataWhere('feature_point', 'feature_id="'.$dataFeature['id'].'"');

	if(isset($_POST['submit'])){
//		print_r($_POST);

		$value = "feature_name='".$_POST['feature']."', description='".$_POST['description']."'";
		editData('feature', $value, $id);

	}
?>

<div class="content">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Edit <?= $_GET['game']; ?> Feature</h4>
						
						<form action="admin_edit_feature.php?id=<?= $id;?>" method="post">

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Feature</label>
											<input type="text" placeholder="Feature" name="feature" class="form-control" value="<?= $dataFeature['feature_name'];?>">
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Description</label>
											<textarea name="description" rows="5" class="form-control" placeholder="Describe game feature"><?= $dataFeature['description']; ?></textarea>
										</div>
									</div>
								</div>
								<button type="submit" name="submit" class="btn btn-success btn-fill pull-right">Update</button>
								<div class="clearfix"></div>
								<br>
							</form>
						</div>
					</div>
			</div>
		</div>
		
<div class="row">
				<div class="col-md-12">
				<div class="card">
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>Option</th>
									<th>Point</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($resultOption as $dataOption):?>
									<tr>
										<td>
											<?= $dataOption['feature_option'];?>
										</td>
										<td>
											<?= $dataOption['point'];?>
										</td>
										<td><a href="dasboard.php?menu=editOption&<?= 'id=' .$dataOption['id']. '&feature='.$dataFeature['feature_name'];?>" class="btn btn-success btn-sm">Edit</a></td>
										<td><a href="dasboard.php?menu=delete&for=feature_point&id=<?= $dataOption['id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
									</tr>
									<?php endforeach; ?>
							</tbody>
						</table>

						<a href="dasboard.php?menu=addOption&<?= 'id=' .$id . '&feature='.$dataFeature['feature_name'];?>" class="btn btn-primary btn-fill pull-right" style="margin-right: 10px"><i class="pe-7s-plus"></i> Add Option</a>
						<div class="clearfix"></div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>