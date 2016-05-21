<?php
require_once('core/init.php');
//$resultSpec = viewData('specification');
$resultGame = viewData('game');

$specRec = array(array(array()));
array_shift($specRec);

foreach($resultGame as $dataGame){
	if(str_replace(' ','_',$dataGame['game_name']) == $_POST['gameSelected']){
	$max_point = $dataGame['max_point'];
	$resultSpec = viewDataWhere('specification', 'game_id="'.$dataGame['id'].'"');
	foreach($resultSpec as $dataSpec){
		foreach($dataSpec as $key=>$value){
			if($key != 'id' && $key != 'game_id' && $key != 'level'){
				$specRec[str_replace(' ','_',$dataGame['game_name'])][$dataSpec['level']][$key] = $value;
			}
		} //end foreach dataSpec
	} //end foreach spec
	} //end if
} //end foreach game 

//print_r($specRec);
//print_r($_POST);

	//Check POST data
	if(isset($_POST['submit'])){
		$gameSelected = $_POST['gameSelected'];
		$point = 0;

		//Count the point
		foreach($_POST as $key=>$value){
			if($key != 'gameSelected' && $key != 'submit'){ 
				$point += $value;
			}
		}
		
//		echo "The point is ".$point;
		
//		echo "<br><b>The best computer specification is </b><br>";
		recommendSpec($gameSelected, $point, $max_point);
	}


	function recommendSpec($game, $point, $max){
		global $specRec;
		
		//Give level spek based on point

		$level = 1;
		if($point>($max/2)){
			$level = 2;
		}
		if($point==$max){
			$level = 3;
		}
		
		echo "<ul class='alt'>";
		//Show the recommendation spec
		foreach($specRec[$game][$level] as $key=>$value){
			$key = str_replace('_', ' ', $key);
			if($key=='estimated price') echo '<li><b>'.strtoupper($key).' : Rp. '.$value.'</b> (per 1 Feb 2016)</li>'; else
			echo '<li><b>'.strtoupper($key).': </b>'.$value.'</li>';
		}
		echo "</ul>";
		echo '<p><a href="index.php" class="button">Try Again</a></p>';
	}
?>