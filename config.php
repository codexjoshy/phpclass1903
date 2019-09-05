<?php 
	session_start();
	define('URL', 'http://localhost/wd1903/');
	// define('DIRECTORY', 'C:/wamp64/www');
	//phpmyadmin connection

	define('DIRECTORY', $_SERVER['DOCUMENT_ROOT'] . '/wd1903/');
	define('DEVELOPMENT', TRUE);
	define('TOKEN', '&7Ui991!ken4');

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