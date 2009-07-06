<?php 
	session_start();
	require("functions.php");
	
	$user_location_string_with_name = file('from_user_location.txt');
	$i=0;
	foreach($user_location_string_with_name as $record){
		$mystring = $record;
		$findme   = '->';
		if(strpos($mystring, $findme) != 0){
			$user_location_string_1[$i] = $record;
			$i++;
		}
	}
	
	foreach($user_location_string_1 as $array_loc){
		if($array_loc != " "){
	  		geocode($array_loc);						// for each string(location + username) from file call geocode function 
		}
    }
?>