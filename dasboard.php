<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
<!--	<link rel="icon" type="image/png" href="assets/img/favicon.ico">-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dasboard: KBS for Game</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

   <!--		<link rel="stylesheet" href="assets/style.css">-->
   
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
   
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
</head>
<body>
<div class="wrapper">
<!--	login form-->
	<?php
		session_start();
		include 'template/navbar.php';?>
	<div class="main-panel">
		<?php include 'template/sidebar.php';
		if(empty($_SESSION['username'])){
			include 'login_form.php';
			
		} else {
			if(isset($_GET['menu'])){
				switch($_GET['menu']){
					case 'delete':
						include 'admin_delete_data.php';
						break;

					case 'editGame':
						include 'admin_edit_game.php';
						break;
					case 'addGame':
						include 'admin_add_game.php';
						break;
						
					case 'editFeature':
						include 'admin_edit_feature.php';
						break;
					case 'addFeature':
						include 'admin_add_feature.php';
						break;
						
					case 'addOption':
						include 'admin_add_option.php';
						break;
					case 'editOption':
						include 'admin_edit_option.php';
						break;
						
					case 'addSpec':
						include 'admin_add_spec.php';
						break;
					case 'editSpec':
						include 'admin_edit_spec.php';
						break;
				}
			} else {
				include 'admin_view_game.php';
			}
		}
	?>
	</div>
</div>
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

</html>