<?php
	$jsondata = file_get_contents("games.json");
	$json = json_decode($jsondata,true);
	//echo $json['games'][3]['title'];
	$output = "<ul>";
	foreach($json['games'] as $games){
		$output .="<h4>".$games['title']."</h4>";
		$output .="<li>Year".$games['year']."</li>";
		$output .="<li>Genre".$games['genre']."</li>";
		$output .="<li>Director".$games['director']."</li>";
	}
	$output .="</ul>";
	echo $output;
