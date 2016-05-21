<?php
	require 'core/init.php';
	$id = $_GET['id'];

	$resultGame=viewDataId('game', $id);
	$data = mysqli_fetch_assoc($resultGame);
	$resultFeature = viewDataWhere('feature', 'game_id="'.$id.'"');
	$resultSpec = viewDataWhere('specification', 'game_id="'.$id.'"');

	if(isset($_POST['submit'])){
//		print_r($_POST);
		
		$value = "game_name='".$_POST['game']."', gender='".$_POST['gender']."',maker='".$_POST['maker']."',released='".$_POST['released']."',img_path='".$_POST['img_path']."',description='".$_POST['description']."'";
		editData('game', $value, $id);
		
	}
?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Edit Game</h4>
<!--						<p class="category">All game will display in home page</p>-->
							<br>
							<form action="admin_edit_game.php?id=<?= $id;?>" method="post">
						<div class="row">
              <div class="col-md-6">
								<div class="form-group">
									<label>Game</label>
									<input type="text" placeholder="Game" name="game"  value="<?= $data['game_name'];?>" class="form-control" required>
								</div>
							</div>
						
							<div class="col-md-6">
								<div class="form-group">
								<label>Gender</label>
								<input type="text" placeholder="Gender" name="gender" value="<?= $data['gender'];?>" class="form-control">
								</div>
							</div>
						</div>

            <div class="row">
              <div class="col-md-4">
								<div class="form-group">
									<label>Maker</label>
									<input type="text" placeholder="Maker" value="<?= $data['maker'];?>" name="maker" class="form-control">
								</div>
							</div>
						
							<div class="col-md-4">
								<div class="form-group">
								<label>Released</label>
								<input type="number" placeholder="yyyy" name="released" min="2010" max="2020" class="form-control" value="<?= $data['released'];?>" >
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="form-group">
								<label>Image Path</label>
								<input type="text" placeholder="Image Path" name="img_path" class="form-control" value="<?= $data['img_path'];?>" >
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<textarea name="description" rows="5" class="form-control" placeholder="Describe game"><?= $data['description'];?></textarea>
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
		
<!--Game Feature Table-->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header"><h4 class="title">Game Features</h4>
						</div>
					<!--Feature Table-->
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>Feature</th>
<!--									<th>Description</th>-->
									<th>Option</th>
									<th>Point</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($resultFeature as $dataFeature):?>
									<tr>
										<td><?= $dataFeature['feature_name'];?></td>
<!--										<td><?= $dataFeature['description'];?></td>-->
										<td>
											<?php
									$conOption = "feature_id='".$dataFeature['id']."'";
									$resultOption = viewDataWhere('feature_point', $conOption);

									foreach($resultOption as $dataOption){
										echo $dataOption['feature_option'] . '<br>';
									}
								?>
										</td>
										<td>
											<?php
									foreach($resultOption as $dataOption){
										echo $dataOption['point'] . '<br>';
									}
								?>
										</td>
										<td><a href="dasboard.php?menu=editFeature&game=<?= $data['game_name']; ?>&id=<?= $dataFeature['id']; ?>" class="btn btn-success btn-sm">Edit</a></td>
										<td><a href="dasboard.php?menu=delete&for=feature&id=<?= $dataFeature['id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
									</tr>
									<?php endforeach; ?>
							</tbody>
						</table>
						<a href="dasboard.php?menu=addFeature&id=<?= $id ?>" class="btn btn-fill btn-primary pull-right" style="margin-right:10px"><i class="pe-7s-plus"></i> Add Feature</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		
<!--Spec Table-->
		<div class="row">		
			<div class="col-lg-12">
				<div class="card">
				<div class="header"><h4 class="title">Spec Recommendation</h4>
						</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>Level</th>
									<th>CPU (Intel)</th>
									<th>CPU (AMD)</th>
									<th>GPU (NVIDIA)</th>
									<th>GPU (AMD)</th>
									<th>Memory</th>
									<th>HDD</th>
									<th>OS</th>
									<th>Estimated Price</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($resultSpec as $dataSpec):?>
								<tr>
									<td><?= $dataSpec['level'];?></td>
									<td><?= $dataSpec['cpu_intel'];?></td>
									<td><?= $dataSpec['cpu_amd'];?></td>
									<td><?= $dataSpec['gpu_nvidia'];?></td>
									<td><?= $dataSpec['gpu_amd'];?></td>
									<td><?= $dataSpec['mem'];?></td>
									<td><?= $dataSpec['hdd'];?></td>
									<td><?= $dataSpec['os'];?></td>
									<td><?= $dataSpec['estimated_price'];?></td>
									<td><a href="dasboard.php?menu=editSpec&id=<?= $dataSpec['id']; ?>" class="btn btn-success btn-sm">Edit</a></td>
									<td><a href="dasboard.php?menu=delete&for=specification&id=<?= $dataSpec['id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<a href="dasboard.php?menu=addSpec&id=<?= $id ?>" class="btn btn-primary btn-fill pull-right" style="margin-right:10px"><i class="pe-7s-plus"></i> Add Recommendation</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>