<?php 
	require ('../../config.php');
	require ('functions/function.php');

	if (isset($_GET['token']) ) {
		$token = $_GET['token'];
		$query = "UPDATE registration SET status ='active', activation_code='0' WHERE activation_code = '$token'";
		$runQuery = mysqli_query($dbconnect, $query);
		if (!$runQuery) {
			$_SESSION['error'] = "Activation not successful";
			header("location: ".URL.'project/day6/');
			exit;
		}else{
			$_SESSION['response'] = "Activation successful ";
			header("location: ".URL.'project/day6/');
			exit;
		}
	}


?>