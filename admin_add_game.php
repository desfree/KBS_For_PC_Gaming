<?php
	require 'core/init.php';
	
	if(isset($_POST['submit'])){
//		addGame($_POST['game'], $_POST['gender']);
		$value = "'','". $_POST['game'] ."','". $_POST['gender'] ."','". $_POST['maker'] ."','". $_POST['released'] ."','" . $_POST['img_path'] ."','" . $_POST['description']."'";
		addData('game',$value);
	}
?>

<div class="content">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Add Game</h4>
					</div>
					<div class="content">

					<form action="admin_add_game.php" method="post">
						<div class="row">
              <div class="col-md-6">
								<div class="form-group">
									<label>Game</label>
									<input type="text" placeholder="Game" name="game" class="form-control">
								</div>
							</div>
						
							<div class="col-md-6">
								<div class="form-group">
								<label>Gender</label>
								<input type="text" placeholder="Gender" name="gender" class="form-control">
								</div>
							</div>
						</div>
             
            <div class="row">
              <div class="col-md-4">
								<div class="form-group">
									<label>Maker</label>
									<input type="text" placeholder="Maker" name="maker" class="form-control">
								</div>
							</div>
						
							<div class="col-md-4">
								<div class="form-group">
								<label>Released</label>
								<input type="number" placeholder="yyyy" name="released" min="2010" max="2020" class="form-control">
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="form-group">
								<label>Image Path</label>
								<input type="text" placeholder="Image Path" name="img_path" class="form-control">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<textarea name="description" rows="5" class="form-control" placeholder="Describe game"></textarea>
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