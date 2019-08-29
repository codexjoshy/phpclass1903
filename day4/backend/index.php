<?php 
	require ('config.php');
	$name = "";$response=""; $errors="";

	if (isset($_POST['submit']) && $_POST['submit']=="login" ){
		$password = trim($_POST['password']);
		$name = trim($_POST['names']);
		$error = [];
		if (empty($name)) {
			$error[] = "pls enter your name";
		}
		if (empty($password)) {
			$error[]= "pls enter your password";
		}
		if (!empty($error)) {
			$errors ="<ul style='color:#fff; background-color:red;' >";
			foreach ($error as  $value) {
				$errors .= "<li>".$value."</li>";
			}
			$errors .= "</ul>";
		}else{
			$_SESSION['username'] = $name;
			$response =" Welcome $name";
			header("location:".URL.'page/welcome.php'); 
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<span><?php echo $errors; ?> </span>
		<form action="" method="post">
			<input type="text" name="names" placeholder="Enter your name">
			<input type="password" name="password" placeholder="Enter your password">
			<button type="submit" name="submit" value="login">submit</button>
		</form>
	</div>
	<h2> <?php //echo $response; ?></h2>

</body>
</html>