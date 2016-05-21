<?php
require "core/init.php";
session_start();

cek($link, $_POST['username'], $_POST['password']);

function cek($db, $username, $password){
	$cekdb = mysqli_query($db, "SELECT * from user WHERE username='$username' AND password='$password'");
	$value=mysqli_num_rows($cekdb);
	
	if($value){
		$_SESSION['username'] = $username;
		header("location: dasboard.php");
	}else{
		$_SESSION['alert'] = array('type' => 'gagal', 'text' =>'<strong>Failded!!</strong> Username or password did not match');
		header("location: index.php");
	}
}
?>