<div class="sidebar" data-color="azure" data-image="images/computer-1.jpg">

	<div class="sidebar-wrapper">
		<div class="logo">
			<a href="dasboard.php" class="simple-text">Knowledge Based System for Game</a>
		</div>
<?php if(!empty($_SESSION['username'])):?>
		<ul class="nav">
			<li class="active">
				<a href="dasboard.php">
					<i class="pe-7s-user"></i>
					<p>Dasboard</p>
				</a>
			</li>
		</ul>
<?php endif; ?>
	</div>
</div>