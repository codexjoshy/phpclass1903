<?php 
	require ('../config.php');
	session_destroy();
	header("location:".URL);
?>