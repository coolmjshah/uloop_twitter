<?
	session_start();
	require ("JSON.php"); // contains the code to convert .json to some readable format
	
	function user($username){
		  
		  $url = "http://twitter.com/users/show/"."$username.json"; 		  
		  $curl = curl_init();
		  curl_setopt($curl, CURLOPT_URL, $url); //URL to connect to
		  curl_setopt($curl, CURLOPT_GET, 1); //Use GET method
		  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); //Use basic authentication
		  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //Do not check SSL certificate (but use SSL of course), live dangerously!
		  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //Return the result as string
		   
		  $json = new Services_JSON();
		  $output = $json->decode(curl_exec($curl));
		  return $output;
		    
		  curl_close($curl);
	}
	
	function user_location($screen_name){
		  
		  $url = "http://twitter.com/users/show.json?screen_name=$screen_name"; 
		  $curl = curl_init();
		  curl_setopt($curl, CURLOPT_URL, $url); //URL to connect to
		  curl_setopt($curl, CURLOPT_GET, 1); //Use GET method
		  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); //Use basic authentication
		  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //Do not check SSL certificate (but use SSL of course), live dangerously!
		  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //Return the result as string
		   
		  $json = new Services_JSON();
		  $output = $json->decode(curl_exec($curl));
		  return ($output->location);
		  //echo $output->location;
		  curl_close($curl);
	}
	
	
	function user_timeline($username, $password){
		  $url = "http://twitter.com/statuses/user_timeline.json";
		  $curl = curl_init();
		  curl_setopt($curl, CURLOPT_URL, $url); //URL to connect to
		  curl_setopt($curl, CURLOPT_GET, 1); //Use GET method
		  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); //Use basic authentication
		  curl_setopt($curl, CURLOPT_USERPWD, "$username:$password"); //Set u/p
		  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //Do not check SSL certificate (but use SSL of course), live dangerously!
		  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //Return the result as string
		   
		  $json = new Services_JSON();
		  $output = $json->decode(curl_exec($curl));
		  return $output;
		  		    
		  curl_close($curl);
	}
	
	function friends($id){
	
          $url = "http://twitter.com/statuses/friends.json?user_id=$id";
		  $curl = curl_init();
		  curl_setopt($curl, CURLOPT_URL, $url); //URL to connect to
		  curl_setopt($curl, CURLOPT_GET, 1); //Use GET method
		  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); //Use basic authentication
		  curl_setopt($curl, CURLOPT_USERPWD, "onlyfortest:123456"); //Set u/p
		  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //Do not check SSL certificate (but use SSL of course), live dangerously!
		  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //Return the result as string
		   
		  $json = new Services_JSON();
		  $output = $json->decode(curl_exec($curl));
		  return $output;
		  curl_close($curl);
	}
	
	function public_tweets(){
		  
		  $url = "http://twitter.com/statuses/public_timeline.json";
		  $curl = curl_init();
		  curl_setopt($curl, CURLOPT_URL, $url); //URL to connect to
		  curl_setopt($curl, CURLOPT_GET, 1); //Use GET method
		  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); //Use basic authentication
		  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //Do not check SSL certificate (but use SSL of course), live dangerously!
		  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //Return the result as string
		   
		  $json = new Services_JSON();
		  $output = $json->decode(curl_exec($curl));
		  return $output;
		  curl_close($curl);
		  	
	}
	
	
	function tweets_with_keyword1(){
		
		  $numargs = func_num_args();
		  $arg1 = func_get_arg(0);
		  $arg2 = func_get_arg(1);
		  $arg3 = func_get_arg(2);
		  
		  if ($numargs == 1) {
        		$url = "http://search.twitter.com/search.json?q=\"$arg1\"&show_user=true&rpp=100";
    	  }elseif ($numargs == 2) {
        		$url = "http://search.twitter.com/search.json?q=\"$arg1+$arg2\"&show_user=true&rpp=100";
    	  }elseif ($numargs == 3) {
        		$url = "http://search.twitter.com/search.json?q=\"$arg1+$arg2+$arg3\"&show_user=true&rpp=100";
    	  }	
		  $curl = curl_init();
		  curl_setopt($curl, CURLOPT_URL, $url); //URL to connect to
		  curl_setopt($curl, CURLOPT_GET, 1); //Use GET method
		  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); //Use basic authentication
		  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //Do not check SSL certificate (but use SSL of course), live dangerously!
		  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //Return the result as string
		   
		  $json = new Services_JSON();
		  $output = $json->decode(curl_exec($curl));
		  return $output;
		  curl_close($curl);
	}
	
	function geocode($loc_para){
				  
			  $str = $loc_para;
			  $loc_only = preg_split('/\->/', $str);										// separate out location from string(location + username)
			  //////
			  $Expr = "/[0-9]{2}\.[0-9]{2,6}/";
    	 	  if(preg_match_all($Expr, $loc_only[0], $matches) == true){
				  return true;
			  }			  		 
			  /////////
			  $eliminator_4_string = array("/", "iPhone: ", "&amp", ";");
			  $eliminated_loc = str_replace($eliminator_4_string, "", $loc_only[0]);		// replace all chars describes in array with nothing
			  $location = explode(' ',$eliminated_loc);
			  			  					
			  $user_name_1 = strstr($loc_para, '->');
			  $eliminator_4_name = array("-", ">");
			  $user_name = str_replace($eliminator_4_name, "", $user_name_1);				// replace -> in username with nothing
				  
			  	  $loc1 = $location[0];			//echo "\n $loc1 \n";							// create a chunks of location for api call
				  $loc2 = $location[1];			//echo "\n $loc2 \n";
				  $loc3 = $location[2];			//echo "\n $loc3 \n";
				  $loc4 = $location[3];			//echo "\n $loc4 \n";
				  $loc5 = $location[4];			//echo "\n $loc5 \n";
				  $loc6 = $location[5];			//echo "\n $loc6 \n";
				  
				  $appid = "kt6xdhrV34EYXhz0AlGnqezYEsBmNKKUbFLWnSzWZxUL3lRJOk5LHs_glsdhnVXBuPs3zTY--";
				  
				  // conditions for number of words in address
				  if(count($location) == 1){
					  $request = "http://local.yahooapis.com/MapsService/V1/geocode?appid=$appid&location=$loc1&output=php";
				  }else if(count($location) == 2){
					  $request = "http://local.yahooapis.com/MapsService/V1/geocode?appid=$appid&location=/'$loc1+$loc2/'&output=php";
				  }else if(count($location) == 3){
					  $request = "http://local.yahooapis.com/MapsService/V1/geocode?appid=$appid&location=/'$loc1+$loc2+$loc3'/&output=php";
				  }else if(count($location) == 4){
					  $request = "http://local.yahooapis.com/MapsService/V1/geocode?appid=$appid&location=/'$loc1+$loc2+$loc3+$loc4'/&output=php";
				  }else if(count($location) == 5){
					  $request = "http://local.yahooapis.com/MapsService/V1/geocode?appid=$appid&location=/'$loc1+$loc2+$loc3+$loc4+$loc5/'&output=php";
				  }else if(count($location) == 6){
					  $request = "http://local.yahooapis.com/MapsService/V1/geocode?appid=$appid&location=/'$loc1+$loc2+$loc3+$loc4+$loc5+$loc6/'&output=php";
				  }		  
				  
				  $response = file_get_contents($request);
				  $phpobj = unserialize($response);
				  $latitude = $phpobj[ResultSet][Result][Latitude];
				  $longitude = $phpobj[ResultSet][Result][Longitude];
			  
			  
			  if(($latitude != "") || ($longitude != "")){			// remove all users without latitude and longitude
				  if((($latitude >= 25.00)&&($latitude <= 50.00)) && (($longitude >= -130.00)&&($longitude <= -60.00))){	// take only users within USA !!!
				   		echo $phpobj[ResultSet][Result][Latitude]."::".$phpobj[ResultSet][Result][Longitude]."::".$phpobj[ResultSet][Result][State]."@$user_name";
				  }
			  }
			  $latitude = "";
			  $longitude = "";
			  return true;
	} 
	
	
	function dist($lat1, $lat2, $lon1, $lon2){
	// METHOD 1 gives less accuracy as talked with Ryan Mc
		/*$dist1 = 69.1 * ($lat2 - $lat1);  
		$dist1 = 69.1 * (($lon2)-($lon1)) * cos($lat1 / 57.3);
		$distance = sqrt(($dist1 * $dist1)+($dist2 * dist2));*/
		
	// METHOD 2 gives great accuracy within hundreds of feet 
		$distance = 3963.0 * acos(sin($lat1/57.2958) * sin($lat2/57.2958) + cos($lat1/57.2958) * cos($lat2/57.2958) *  cos($lon2/57.2958 -$lon1/57.2958));
		return $distance;
	}
	
	function direct_message($message, $screen_name, $prefix1){
		  
		  if(strlen($message) < 1){
		  		return false; 
		  }
		  //$message = urlencode(stripslashes(urldecode($message)));
		  $prefix = urlencode(' for ').$prefix1.urlencode(' Check this out ');
		  $message = "@".$screen_name."$prefix".$message;
		  $message = urlencode(stripslashes(urldecode($message)));
		  
		  echo "$message";
		  
	      //$url = "http://twitter.com/direct_messages/new.xml?text=$message&user=$screen_name"; 		  
		  $url = "http://twitter.com/statuses/update.xml?status=$message";
		  //echo $url;
		  $curl = curl_init();
		  curl_setopt($curl, CURLOPT_URL, $url); 								//URL to connect to
		  curl_setopt($curl, CURLOPT_POST, 1); 									//Use POST method
		  curl_setopt($curl, CURLOPT_USERPWD, "onlyfortest:123456"); 			//Set u/p
		  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); 				//Use basic authentication
		  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 					//Do not check SSL certificate (but use SSL of course), live dangerously!
		  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 						//Return the result as string
		   
		  //$json = new Services_JSON();
		  curl_exec($curl);
		  return true;
		  curl_close($curl);
	}
	
	function url_shortner($long_url){
		  $url = "http://api.bit.ly/shorten?version=2.0.1&longUrl=$long_url&login=onlyfortest&apiKey=R_9c83b6c47cf4a6bfa8796ecd71e39267";	
		  $curl = curl_init();
		  curl_setopt($curl, CURLOPT_URL, $url); //URL to connect to
		  curl_setopt($curl, CURLOPT_GET, 1); //Use GET method
		  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); //Use basic authentication
		  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //Do not check SSL certificate (but use SSL of course), live dangerously!
		  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //Return the result as string
		   
		  $json = new Services_JSON();
		  $output = $json->decode(curl_exec($curl));
		  foreach($output->results as $rec){
			 $a = $rec->shortUrl;
		  }
		  return($a);
		  curl_close($curl);
		  
	}
?>