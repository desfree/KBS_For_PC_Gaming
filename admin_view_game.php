<div class="content">
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Game List</h4>
						<p class="category">All game will display in home page</p>
					</div>
					<div class="content table-responsive table-full-width">

						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>Game</th>
									<th>Gender</th>
									<th>Maker</th>
									<th>Released</th>
									<th>Image Path</th>
									<th>Description</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
									require 'core/init.php';
									$resultGame = viewData('game');

									foreach($resultGame as $data):
								?>
									<tr>
										<td><?= $data['game_name'];?></td>
										<td><?= $data['gender'];?></td>
										<td><?= $data['maker'];?></td>
										<td><?= $data['released'];?></td>
										<td><?= $data['img_path'];?></td>
										<td><?= $data['description'];?></td>
										
										<td><a href="dasboard.php?menu=editGame&id=<?= $data['id']; ?>" class="btn btn-success btn-sm">Edit</a></td>
										<td><a href="dasboard.php?menu=delete&for=game&id=<?= $data['id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
									</tr>

									<?php endforeach; ?>
							</tbody>
						</table>
						<a href="dasboard.php?menu=addGame" class="btn btn-primary btn-fill pull-right" style="margin-right: 10px"><i class="pe-7s-plus"></i> Add Game</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>