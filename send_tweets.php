<?php 

	require("functions.php");
// Diclaration of array for each individual states in USA

$AL = array(array(32.601,33.2095),
		    array(-85.4861,-87.5462),
			array('auburn','ua'));

$AR = array(array(35.9446),
			array(-94.0913),
			array('uark'));

$AZ  = array(array(32.2321,33.4215,35.2066),
			array(-110.95,-111.931,-111.646),
			array('arizona','asu','nau'));  	

$CA  = array(array(32.7723,32.8727,33.6509,33.7822,33.8778,33.9757,34.0138,34.024,34.0503,34.074,34.074,34.1791,34.2355,34.4161,35.2828,
				  35.2962,36.9771,37.3022,37.3345,37.424,37.7208,37.8751,38.5406,38.5671,39.651,39.7291,40.8805),
			array(-117.072,-117.238,-117.826,-118.122,-117.89,-117.331,-119.747,-118.284,-117.817,-118.438,-118.438,-117.327,-118.528,
				  -119.849,-120.659,-120.654,-122.052,-120.482,-121.881,-122.167,-122.477,-122.247,-121.748,-121.427,-121.644,-121.844,-124.087),
			array('sdsu','ucsd','uci','csulb','fullerton','ucr','sbcc','usc','csupomona','ucla','andersonucla','csusb','csun','ucsb','cuesta','calpoly','ucsc','ucmerced','sjsu','stanford','sfsu','berkeley','ucdavis','csus','butte','csuchico','humboldt'));  	

$CO  = array(array(37.4124,39.6766,40.0035,40.4077),
			array(-107.811,-104.959,-105.268,-104.694),
			array('fortlewis','du','colorado','unco'));  	

$CT  = array(array(41.3072,41.8042),
			array(-72.9327,-72.2509),
			array('yale','uconn')); 	

$DC  = array(array(38.9007,38.9384),
			array(-77.0471,-77.0866),
			array('gwu','american'));	

$DE  = array(array(39.6711),
			array(-75.7066),
			array('udel')); 	

$FL  = array(array(25.7131,25.7606,26.3652,28.0546,28.5984,29.6425,30.4411),
			array(-80.2795,-80.3763,-80.1017,-82.4131,-81.2025,-82.3554,-84.2941),
			array('miami','fiu','fau','usf','ucf','ufl','fsu'));    

$GA  = array(array(33.7532,33.7713,33.7889,33.9498,34.0331),
			array(-84.3849,-84.3941,-84.3267,-83.3751,-84.6011),
			array('gsu','gatech','emory','uga','kennesaw'));  

$HI  = array(array(21.2994),
			array(-157.82),
			array('hawaii'));

$IA  = array(array(41.6625,42.013,42.513),
			array(-91.5377,-93.6262,-92.4617),
			array('uiowa','iastate','uni'));  	

$ID  = array(array(43.6029,46.7272),
			array(-116.205,-117.014),
			array('boisestate','uidaho')); 	

$IL  = array(array(37.6719,38.8127,39.4844,40.1091,40.4626,41.7902,41.874,41.8783,42.0496),
			array(-89.1679,-89.9547,-88.1751,-88.2304,-90.6818,-87.6012,-87.6518,-87.6272,-87.6787),
			array('siuc','siue','eiu','illinois','wiu','uchicago','uic','depaul','northwestern'));

$IN  = array(array(39.166,39.7851,40.1976,40.4276),
			array(-86.5269,-86.1665,-85.409,-86.923),
			array('indiana','iupui','bsu','purdue'));  	

$KS  = array(array(37.719,39.196),
			array(-97.2929,-96.581),
			array('wichita','ksu'));  	

$KY  = array(array(37.7419,38.034,38.2152),
			array(-84.3025,-84.5051,-85.7621),
			array('eku','uky','louisville'));  	

$LA  = array(array(30.5107,32.5267),
			array(-90.4634,-92.6492),
			array('selu','latech'));	

$MA  = array(array(42.3293,42.3376,42.3403,42.3494,42.359,42.4051),
			array(-71.069,-71.1715,-71.0889,-71.1005,-71.0936,-71.1155),
			array('harvard','bc','neu','bu','mit','tufts'));  

$MD  = array(array(38.9898,39.3292),
			array(-76.9434,-76.6179),
			array('umd','jhu'));  	

$MI  = array(array(42.2061,42.2848,42.2918,42.3582,42.9614,42.9614,43.5795),
			array(-83.6208,-85.6103,-83.7145,-83.0721,-84.4797,-85.8889,-84.7759),
			array('emich','wmich','umich','wayne','msu','gvsu','cmich'));  

$MN  = array(array(43.9881,44.1462,44.9756,45.4885,46.8097),
			array(-91.6029,-93.9993,-93.2339,-94.2425,-92.0721),
			array('winona','mnsu','umn','stcloudstate','dumn'));  	
	
$MO  = array(array(37.1986,38.9371),
			array(-93.2762,-92.3296),
			array('missouristate','mizzou'));  	

$MS  = array(array(31.3281,34.3663),
			array(-89.3322,-89.5351),
			array('usm','olemiss'));
	
$MT  = array(array(45.6604,46.8641),
			array(-111.046,-113.982),
			array('montana','umt'));  	
	
$NC  = array(array(35.3026,35.6066,35.7864,35.9109,35.9989,36.0723,36.1369,36.2127),
			array(-80.7292,-77.356,-78.6631,-79.0616,-78.9402,-79.7721,-80.2739,-81.6844),
			array('uncc','ecu','ncsu','unc','duke','ncat','wfu','appstate'));   

$NE  = array(array(40.8169),
			array(-96.7011),
			array('unl'));	

$NH  = array(array(43.7226),
			array(-72.1888),
			array('dartmouth'));	

$NJ  = array(array(40.3428,40.4979,40.8573),
			array(-74.6561,-74.4463,-74.1977),
			array('princeton','nbprutgers','montclair')); 	
	
$NM  = array(array(35.0899),
			array(-106.62),
			array('unm'));	

$NV  = array(array(36.1077),
			array(-115.137),
			array('nevada')); 	

$NY  = array(array(40.7257,40.7298,40.808,40.8607,40.9121,42.0956,42.4495,42.956,43.0399,43.0916),
			array(-73.7917,-73.997,-73.9638,-73.8895,-73.1217,-75.9717,-76.4758,-78.8205,-76.1334,-77.6422),
			array('stjohns','nyu','columbia','fordham','sunysb','binghamton','cornell','buffalo','syr','rit')); 

$OH  = array(array(39.1303,39.303,39.5104,39.7769,39.965,40.0004,40.0484,41.0781,41.1059,41.1488,41.2906,41.377,41.5059,41.6631),
			array(-84.5206,-82.0851,-84.7347,-84.0671,-83.0039,-83.0125,-82.5402,-81.511,-80.6448,-81.3424,-82.2242,-83.6335,-81.6092,-83.6098),
			array('uc','ohio','muohio','wright','cscc','osu','denison','uakron','ysu','kent','oberlin','bgsu','case','utoledo'));

$OK  = array(array(35.2104,36.1289),
			array(-97.446,-97.0794),
			array('ou','okstate')); 	

$OR  = array(array(44.0364,44.5642,45.4998),
			array(-123.055,-123.279,-122.702),
			array('uoregon','oregonstate','pdx')); 	
	
$PA  = array(array(41.0457,39.9458,39.9537,39.9605,39.9802,40.0359,40.4441,40.4446,40.5363,40.6072,40.6168,40.7974,41.0015),
			array(-75.6012,-75.1863,-75.1967,-75.1575,-75.3491,-79.9552,-79.943,-75.7812,-75.379,-79.1605,-77.863,-76.9874,-76.429),
			array('wcupa','drexel','upenn','temple','villanova','pitt','cmu','kutztown','lehigh','iup','psu','bucknell','bloomu'));

$RI  = array(array(41.4773,41.8306),
			array(-71.5206,-71.4055),
			array('uri','brown'));	
	
$SC = array(array(32.7833,33.9954,34.6825),
			array(-79.937,-81.0265,-82.8161),
			array('cofc','sc','clemson'));	
	
$TN = array(array(35.1145,35.952,36.1504,36.3041),
			array(-89.93,-83.9334,-86.8013,-82.3625),
			array('memphis','tennessee','vanderbilt','etsu'));	
	
$TX = array(array(29.7632,29.806,30.2856,30.6113,31.5468,32.7284,33.2116,33.5845),
			array(-95.3633,-95.3888,-97.7362,-96.3549,-97.1202,-97.1151,-97.1487,-101.871),
			array('uh','rice','utexas','tamu-commerce','baylor','uta','unt','ttu'));	
	
$UT = array(array(40.2509,40.7655),
			array(-111.65,-111.85),
			array('byu','utah'));	
	
$VA = array(array(36.8889,37.2269,37.2757,37.5492,38.0387,38.4414,38.835),
			array(-76.303,-80.414,-76.7084,-77.4524,-78.5128,-78.8741,-77.3108),
			array('odu','vt','wm','vcu','virginia','jmu','gmu')); 	

$VT = array(array(44.4778),
			array(-73.2005),
			array('uvm'));	

$WA = array(array(46.7293,47.6562,48.7372),
			array(-117.144,-122.313,-122.488),
			array('wsu','washington','wwu'));	
	
$WI = array(array(42.835,43.0418,43.074,44.5539,44.7991),
			array(-88.7424,-87.9069,-89.4035,-89.5676,-91.4971),
			array('uww','uwm','wisc','uwsp','uwec'));	
	
$WV = array(array(38.4224,39.6412),
			array(-82.4299,-79.9598),
			array('marshall','wvu'));	
	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$file_string = file('user_with_location.txt');
	
	foreach($file_string as $record){
		
		$Expr = "/(Warning: | in)/";
    	if(preg_match_all($Expr, $record, $matches) == true){
			  continue;
		}	
		
		$rec = explode('::',$record);
		$latitude = $rec[0];
		$longitude = $rec[1];
		$screen_name_and_state = $rec[2];
		
		$buff = explode(' ',$screen_name_and_state);
		$eliminator_4_state = array("@");
   	    $state = str_replace($eliminator_4_state, "", $buff[0]);			// replace all chars describes in array with nothing
		$screen_name = $buff[1];
		$check_array = $$state;												// variable variable use for states
		
		for($i = 0; $i < count($check_array[0]); $i++){
			$distance_array[$i] = dist($latitude, $check_array[0][$i], $longitude, $check_array[1][$i]);
		}																	// creates an array of distance from given user location to all schools in his/her state 
		asort($distance_array);												// reverse the array with preservering key=>value association
		//print_r($distance_array);											// prints distance array for user with each schools
		
		$j=0; $k=0;
		foreach($distance_array as $key => $value){
			$uni[j] = $check_array[2][$key];
				$uni1[$k] = $uni[j];										// the array containing the index of school name such that first element has lowest distance
				$k++;														// among all the elements, and uni1[0] will be used in the URL to be send to the user.
			$j++;
		}
		
		$mes = "http://$uni1[0].uloop.com/housing/index.php/roommates";		// original URL with nearest school name on it
		$query_term = explode('/',$mes);
		$prefix1 = end($query_term);
		$url1 = url_shortner($mes);											// bit.ly call to shorten the URL
		$message = $url1;													// final message to pass on the function that updates the status
		
		$check_array = "";         											// clear the array or it will takes previous values
		$distance_array = "";      											// clear the array or it will takes previous values
		
		if((direct_message($message, $screen_name, $prefix1)) == true){				// call to the function to update status
			echo ".....\n";
		}
	}
?>