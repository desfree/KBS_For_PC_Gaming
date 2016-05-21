<?php

function execute($que){
	global $link;

	if(mysqli_query($link, $que)){
			return true;
	} else {
			return false;
	}
}

function addData($table, $value){
	global $link;
	
	$que = "INSERT INTO $table VALUES($value)";
	
	if(mysqli_query($link, $que) or die('Add Data is failed...!')){
		header("location:dasboard.php");
	}	
}

function editData($table, $value, $id){
	global $link;
	$que = "UPDATE $table SET $value WHERE id='$id'";

	if(mysqli_query($link, $que) or die('Edit is failed...!')){
		header("location:dasboard.php");
	}	
}

function deleteData($table,$id){
	global $link;
	
	$que= "DELETE from $table where id=$id";
		
	if(mysqli_query($link, $que) or die('Delete Data is failed...!')){
		header("location:dasboard.php");
	}	
}

// View Function
function viewData($table){
	global $link;

	$que = "SELECT * FROM $table";
	$result = mysqli_query($link, $que) or die("query tampil gagal");

	return $result;
}

function viewDataId($table, $id){
	global $link;

	$que = "SELECT * FROM $table WHERE id=$id";    
	$result = mysqli_query($link, $que) or die("query tampil id gagal");

	return $result;
}

function viewDataWhere($table, $con){
	global $link;

	$que = "SELECT * FROM $table WHERE $con";    
	$result = mysqli_query($link, $que) or die("query tampil id gagal");

	return $result;
}

function editFeature($feature, $id){
	global $link;
	$que = "UPDATE feature SET feature_name='$feature' WHERE id='$id'";
	
	if(mysqli_query($link, $que) or die('Edit is failed...!')){
		header("location:dasboard.php");
	}
}

function editOption($option, $point, $id){
	global $link;
	$que = "UPDATE feature_point SET feature_option='$option', point='$point' WHERE id='$id'";
	
	if(mysqli_query($link, $que) or die('Edit is failed...!')){
		header("location:dasboard.php");
	}
}

function editGame($game, $gender, $id){
	global $link;
	$que = "UPDATE game SET game_name='$game', gender='$gender' WHERE id='$id'";

	if(mysqli_query($link, $que) or die('Edit is failed...!')){
		header("location:dasboard.php");
	}	
}

function editSpec($level, $cpu, $mem, $gpu, $hdd, $os, $id){
	global $link;
	$que = "UPDATE specification SET level='$level', cpu='$cpu', mem='$mem', gpu='$gpu', hdd='$hdd', os='$os'  WHERE id='$id'";

	if(mysqli_query($link, $que) or die('Edit Spec is failed...!')){
		header("location:dasboard.php");
	}	
}

?>