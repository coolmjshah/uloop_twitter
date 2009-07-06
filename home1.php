<?php 
	session_start();
	$username = $_POST[username];
	$password = $_POST[password];
	
	require("functions.php");
	$keywords = array("looking for roommate", "looking for internship","looking for job","looking for apartment","looking for bike", 
					  "selling my textbook","selling my apartment","selling my bike",
					  "need a roommate","need a job","need an internship","need a bike","need a textbook",
					  "searching for roommate","searching for job","searching for internship","searching for bike","searching for textbook");  
	
	
	//MAIN ARRAYS
	$user_array = user($username); 
	$user_timeline_array = user_timeline($username, $password);
	$friends_array = friends($id);
	//
	
	$id = $user_array->id;
	
	$i=0;
	foreach($keywords as $keyword){
			
		$words_in_keyword = explode(' ',$keyword);	
		
		if(count($words_in_keyword) == 1){
			$output = tweets_with_keyword1($words_in_keyword[0]);	
		}else if(count($words_in_keyword) == 2){
			$output = tweets_with_keyword1($words_in_keyword[0],$words_in_keyword[1]);
		}else if(count($words_in_keyword) == 3){
			$output = tweets_with_keyword1($words_in_keyword[0],$words_in_keyword[1],$words_in_keyword[2]);
		}
		
		for($j=0; $j < count($output->results); $j++){
			echo $output->results[$j]->text."->".$output->results[$j]->from_user_id."<br>";             // prints all the tweets with matching keyword, 15 at a time
			$user_id[$i] = $output->results[$j]->from_user_id;
			$user_name[$i] = $output->results[$j]->from_user;
			$i++;
		}
	}
	
	$from_user_id = implode(',',$user_id);					// store all elements of an array user_id to a single string so it can be stored in a text file
	$from_user = implode(',',$user_name);					// store all elements of an array user_name to a single string so it can be stored in a text file
		
	$_SESSION[user_id] = $user_id;
	$_SESSION[user_name] = $user_name;
		
	$_SESSION[from_user_id] = $from_user_id;
	$_SESSION[from_user] = $from_user;
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<div>
    	<p><? echo "Number of matching terms in Public_tweets found : $i";?></p>
        <form action="store_data.php" method="get">
        	<input type="submit" value="Store User/ID to File" name="submit" />
        </form>
    </div>
</body>
</html>

