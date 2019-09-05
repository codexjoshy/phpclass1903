<?php 
	define('URL', 'http://localhost/wd1903/');
	define('DIRECTORY', 'C:/wamp64/www');
	//phpmyadmin connection

	define('HOST', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DBASE', 'school');
	//connect to database
	$dbconnect = mysqli_connect(HOST, USERNAME, PASSWORD, DBASE);
	if (!$dbconnect) {
		die().mysqli_error($dbconnect) ;
	}
	
?>