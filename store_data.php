<?php
	session_start();
	
	$from_user_id_new = $_SESSION[from_user_id];
	$from_user_new = $_SESSION[from_user];
	
	//store all from_user_id in the file
	$File = "from_user_id.txt";
	$Handle = fopen($File, 'a+');
	fwrite($Handle, $from_user_id_new);
	fclose($Handle);
		
		
	//store all from_user in the file
	$File = "from_user.txt";
	$Handle = fopen($File, 'a+');
	fwrite($Handle, $from_user_new);
	fclose($Handle);
	
	echo "<br><br>Data Written Successfully.... <br><br>";
	echo "Run.... php store_location.php > from_user_location.txt";
	
?>