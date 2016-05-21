<?php
	require 'core/init.php';
	
	if(isset($_POST['submit'])){
		print_r($_POST);
		$value = "'','". $_POST['option'] ."','". $_POST['point'] . "','". $_POST['id'] ."'";
		addData('feature_point',$value);
		
	}
?>

	<div class="content">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4 class="title">Add <?= $_GET['feature']; ?> Options</h4>
						</div>
						
						<div class="content">

	<form action="admin_add_option.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id'];?>">
							
								<div class="row">
									<div class="col-md-10">
										<div class="form-group">
											<label>Option</label>
											<input type="text" placeholder="Option" name="option" class="form-control">
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label>Point</label>
											<input type="number" placeholder="Point" name="point" class="form-control" required>
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