<?php
	require 'core/init.php';
	
	if(isset($_POST['submit'])){
		//print_r($_POST);
		$value = "'','". $_POST['feature'] ."','". $_POST['description'] . "','". $_POST['id'] ."'";
		addData('feature',$value);
	}
?>

	<div class="content">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4 class="title">Add Game Feature</h4>
						</div>
						<div class="content">

							<form action="admin_add_feature.php" method="post">
								<input type="hidden" name="id" value="<?= $_GET['id']?>">

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Feature</label>
											<input type="text" placeholder="Feature" name="feature" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Description</label>
											<textarea name="description" rows="5" class="form-control" placeholder="Describe game feature"></textarea>
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