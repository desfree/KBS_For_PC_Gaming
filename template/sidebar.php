<nav class="navbar navbar-default navbar-fixed">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
<!--			<a class="navbar-brand" href="#">Game List</a>-->
		</div>
		<div class="collapse navbar-collapse">
<?php if(!empty($_SESSION['username'])):?>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="" >
							Hello,
							<?= $_SESSION['username']; ?>
					</a>
				</li>
				<li>
					<a href="logout.php" class="btn btn-danger">Log out</a>
				</li>
			</ul>
			<?php endif;?>
		</div>
	</div>
</nav>