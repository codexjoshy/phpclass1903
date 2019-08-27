<?php 
	$name = "               josh";
	$response="";
	$student = ['dcvhd','jdghcjhd','hdhjd'];

	if (isset($student)) {
		var_dump($student);
	}else {
		echo "not set";
	}
	// if (in_array("Josh", $student)) {
	// 	echo "He is a student";
	// }else{
	// 	echo "He is not a student";
	// }



	if (is_array($student)) {
		foreach ($student as $value) {
			echo $value;
		}
	}else{
		echo $student;
	}



	// if (strlen($name) <10) {
	// // 	$response =  "Incorrect name";
	// // }else{
	// // 	$response =  "correct";
	// // }
	// echo substr($name, 3);
	if ($name) {
		// $response = strlen( trim($name) );
		$response = strtoupper($name);
	}else{
		$response = "good name";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Paul Score</h2>
	<?php echo $score; ?>
		
	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<p><?php echo $score; ?></p>
	<p><?php echo $response; ?></p>
</body>
</html>