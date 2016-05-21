<!DOCTYPE HTML>

<html>
	<head>
		<title>KBS for Game</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		
		<?php
			require 'core/init.php';
			session_start();
		
			$resultGame = viewData('game');
		?>
		
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">KBS For Gaming Computer Recommendation</a></h1>
						<nav>
							<?php
								if(empty($_SESSION['username'])){
									echo '<a href="dasboard.php">Login</a>';
									if(isset($_SESSION['alert'])){
										print_r($_SESSION['alert']['text']);
									}
								}
							?>
							
							<select name="game" class="selectOption" style="display: inline; width: auto;" disabled>
								<option value="<?= $_POST['gameSelected']?>"><?= str_replace('_', ' ', $_POST['gameSelected'])?></option>
							</select>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						
						<div class="inner" id="game_banner">
								<h2>Sistem Berbasis Pengetahuan Untuk Mendeteksi Kebutuhan Minimum Komputer Untuk Gaming</h2>
						</div>
						
						<?php foreach ($resultGame as $dataGame):
							$gm = str_replace(' ', '_',$dataGame['game_name']);
							if($_POST['gameSelected']==$gm):?>
							
							<div class="inner desc" id="desc_<?= $gm?>">

<!--								<div class="logo"><span class="icon fa-diamond"></span></div>-->
								<h2><?= $dataGame['game_name'];?> <em style="font-size:20px;">(<?= $dataGame['maker'];?>)</em></h2>
								<p>
								<a href="#" class="image"><img src="<?=$dataGame['img_path'];?>" alt="" width="256" height="320" /></a><br>
									Gender : <em><?= $dataGame['gender'];?></em><br>
									Released : <?= $dataGame['released'];?><br>
								</p>
							</div>
						<?php endif; endforeach; ?>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">
						<!-- One -->
							<section id="feature_<?= $game;?>" class="wrapper spotlight style1 desc">
							<div class="inner">
								<div class="content option">
									<h2 class="major">Rekomendasi Komputer</h2>
									<p><?php include 'progress.php'; ?></p><br><br>
								</div>
							</div>
						</section>
					</section>
				
				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Latar Belakang</h2>
							<p>Sistem pakar sebagai bagian dari teknologi kecerdasan buatan dapat digunakan dalam berbagai bidang yang khusus dan spesifik. Dalam dunia multimedia dan hiburan, terkadang banyak orang yang memiliki masalah dalam bagaimana mengetahui kebutuhan minimum perangkat keras dan perangkat lunak untuk menjalankan berbagai game komputer (PC). Seiring dengan terus ditemukannya teknik baru dalam proses render grafis dan juga berkembangnya teknologi pada perangkat pemroses grafis dengan tujuan agar game dapat terlihat seolah-olah nyata, hal tersebut mengharuskan penggemar game komputer untuk lebih cermat dalam memilih komponen komputer. Pemilihan tersebut dimaksud agar komputer mampu menjalankan berbagai game baru beserta fitur grafis yang dimilikinya untuk jangka waktu yang lama, mempertimbangkan motif ekonomi.</p>
							<ul class="contact">
							<hr>
								<li class="fa-envelope"><a href="">gottfriedcpn@gmail.com</a><br>
								<a href="#">mahfudin.ug@gmail.com</a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; 2016 Untitled Inc. All rights reserved.</li></li>
							</ul>
						</div>
					</section>
		</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>