<?php
	$firstName="Ayo";
	$surName="Ayo";
	$age= 22;
	$bankBalance= 1000000000000000000000000;
	$isMarried= 'false';
	$jetColor= "gold";
	$about= "About Myself";

	echo "Firstname :".$firstName.'<br>';
	echo "Surname :".$surName.'<br>';
	echo "age :".$age.'<br>';
	echo "Bank balance :".$bankBalance.'<br>';
	echo "Are you married :".$isMarried.'<br>';
	echo "Color of your private jet :".$jetColor.'<br>';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2><?php echo $about ?></h2>
	<p><strong>First Name:</strong><?php echo $firstName ?></p>
	<p><strong>Surname:</strong><?php echo $surName ?></p>
	<p><strong>Age:</strong><?php echo $age ?></p>
	<p><strong>Bank Balance:</strong><?php echo $bankBalance ?></p>
	<p><strong>Are you married:</strong><?php echo $isMarried ?></p>
	<p><strong>Color of my private jet:</strong><?php echo $jetColor ?></p>
</body>
</html>