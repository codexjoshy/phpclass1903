<?php 
	require ('../../config.php');
	require ('functions/function.php');

	if (isset($_POST['register']) && $_POST['register'] === TOKEN) {
		$email = sanitize($_POST['email']);
		$password = sanitize($_POST['password']);
		$confirm = sanitize($_POST['confirm']);
		$encrypt= encrypt($password);

		// var_dump($encrypt, $email); exit;
		$error  = [];

		if (empty($email)) {
			$error[] = "Please enter an email";
		}
		if (empty($password)) {
			$error[] = "Please enter a password";
		}

		if (strlen($password) <=3) {
			$error[] = "password must be more than 3 chars";
		}
		if ($password !== $confirm) {
			$error[] = "password does not match";
		}
		//ENTER INTO DATABASE IF NO ERROR
		if (!empty($error)) {
			$list = "<ul>";
			foreach ($error as $value) {
				$list = "<li>".$value."</li>";
			}
			$list .= "</ul>";
			$_SESSION['error'] = $list;
			header("location: ".URL.'project/day6/');
			exit;
		}else{
			//ENTER INTO DB HERE
			$activationCode = md5(TOKEN);
			$query = "INSERT INTO registration (email, password,authority, activation_code) VALUES('$email', '$encrypt','student', '$activationCode')";
			$runQuery = mysqli_query($dbconnect, $query);
			if (!$runQuery) {
				$_SESSION['error'] = "Registration not successful";
				header("location: ".URL.'project/day6/');
				exit;
			}else{
				//send message
				$link= URL.'project/day6/activation.php?token='.$activationCode;
				$_SESSION['response'] = "Registration successful your activation link is $link";
				header("location: ".URL.'project/day6/');
				exit;
			}
		}
	}


?>