<?php
		session_start();
		require("JSON.php");
		
		  //store all from_user_location in the file
		  $filename = "from_user.txt";
		  $handle = fopen($filename, "r");
		  $user_name_string = fread($handle, filesize($filename));
		  fclose($handle);
		  
		  $user_name_arr = explode(',',$user_name_string);
		  user_location($user_name_arr);
		
		  function user_location($user_name){
			  foreach ($user_name as $record){
				$url = "http://twitter.com/users/show.json?screen_name=$record"; 
				$curl = curl_init();
				curl_setopt($curl, CURLOPT_URL, $url); 							//URL to connect to
				curl_setopt($curl, CURLOPT_GET, 1); 							//Use GET method
				curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); 			//Use basic authentication
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 				//Do not check SSL certificate (but use SSL of course), live dangerously!
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 					//Return the result as string
				 
				$json = new Services_JSON();
				$output = $json->decode(curl_exec($curl));
				echo $output->location ."-> $record\n";
				curl_close($curl);
			 }
		 }
?>