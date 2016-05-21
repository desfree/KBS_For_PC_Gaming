<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>KBS for Game</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
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
<!--							<a href="#menu">Choose Game</a>-->
<!--						Combo Box-->
						
							<select name="game" class="selectOption" style="display: inline; width: auto;">
								<option value="game_banner"> Pilih Game... </option>
								<?php foreach ($resultGame as $dataGame): ?>
								<option value="<?= str_replace(' ', '_',$dataGame['game_name']);?>"><?= $dataGame['game_name'];?></option>
								<?php endforeach; ?>
							</select>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						
						<div class="inner" id="game_banner">

								<h2>Sistem Berbasis Pengetahuan Untuk Mendeteksi Kebutuhan Minimum Komputer Untuk Gaming</h2>
<!--
								<p>
									Sistem ini digunakan untuk memberikan detail kebutuhan minimum perangkat keras dan perangkat lunak (sistem operasi) komputer untuk menjalankan game dengan pengaturan grafis tertentu
								</p>
-->
							<p id="game_image" style="text-align:center">
								<img src="images/game_gta_v.jpg" alt="" width="150" height="200"/>
								<img src="images/game_crysis_3.jpg" alt="" width="150" height="200"/> 
								<img src="images/game_attila.jpg" alt="" width="150" height="200"/> 
								<img src="images/game_the_sims_4.jpg" alt="" width="150" height="200"/> 
								<img src="images/game_arma_iii.jpg" alt="" width="150" height="200"/> 
							</p>
						</div>
						

						<?php foreach ($resultGame as $dataGame): ?>
							<div class="inner desc" id="desc_<?= str_replace(' ', '_',$dataGame['game_name']);?>">

<!--								<div class="logo"><span class="icon fa-diamond"></span></div>-->
								<h2><?= $dataGame['game_name'];?> <em style="font-size:20px;">(<?= $dataGame['maker'];?>)</em></h2>
								<p>
								<a href="#" class="image"><img src="<?=$dataGame['img_path'];?>" alt="" width="256" height="320" /></a><br>
									Gender : <em><?= $dataGame['gender'];?></em><br>
									Released : <?= $dataGame['released'];?><br>
								</p>
							</div>
						<?php endforeach; ?>
					</section>

				<!-- Wrapper -->
					<section id="wrapper featureArea">
						<!-- One -->
						
						<?php foreach($resultGame as $dataGame): $game = str_replace(' ', '_',$dataGame['game_name']);?>
						<form action="recommend.php" method="post">
							<section id="feature_<?= $game;?>" class="wrapper spotlight style1 alt desc">
								
									<input type="hidden" name="gameSelected" value="<?= $game;?>" id="gameInput">

									<?php
										$resultFeature = viewDataWhere('feature', 'game_id="'.$dataGame['id'].'"'); $i=0;
										foreach($resultFeature as $dataFeature):
										$i++;
									?>
							
								<div class="inner">
<!--									<a href="#" class="image" ><img src="images/aa.jpg" alt="" width="300" height="200"/></a>-->
									<div class="content option">
										<h2 class="major"><?= $dataFeature['feature_name'];?></h2>

<!--
										<p>
										<span class="image <?php if($i%2==0){
	echo 'right';} else {echo'left';}?>"><img src="images/tess.jpg" alt=""/></span>
										<?= $dataFeature['description'];?>
										</p>
-->

										
										<?php
											$resultOption = viewDataWhere('feature_point', 'feature_id="'.$dataFeature['id'].'"');
											foreach($resultOption as $dataOption):
										?>
											<input type="radio" name="<?= str_replace(' ', '_', $dataFeature['feature_name']);?>" value="<?= $dataOption['point'];?>"><?= $dataOption['feature_option']; ?>
										<?php endforeach; ?> <!-- endforeach Option -->
									</div>
								</div>
								
								<?php endforeach; ?> <!-- endforeach Feature -->
								<button type="submit" name="submit" class="btn_rec" >Get Recommendation</button>
								
							</section>
							</form>
						<?php endforeach; ?> <!-- endforeach Game -->
						
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
			
			
			<script>
					$(document).ready(function(){
						$('.desc').hide();
						$('.selectOption').change(function(){
							var selected = $(this).find(':selected').val();
							if(selected != 'game_banner'){
								$('.desc').hide();
								$('#game_image').hide();
								$('#desc_' + selected).show(1000);
								$('#feature_' + selected).show();
//								$('.selectOption').attr('disabled',true);
							}
						}).change();
						
						$('.option').each(function(){
							$('input[type=radio]:first', this).attr('checked', true);
						});
						
					});
			</script>

	</body>
</html>