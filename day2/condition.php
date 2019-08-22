<?php 
	$buyfood = 'egg';
	$response = "";
	// if($buyfood == "meat"){
	// 	echo "pls buy ".$buyfood;
	// }else{
	// 	echo "come home";
	// }

	if ($buyfood == 'egg') {
		$response = "pls buy $buyfood";
	}elseif($buyfood == "fish"){
		$response = "pls buy $buyfood";
	}elseif ($buyfood == "crayfish") {
		$response = "pls buy $buyfood";
	}else {
		$response ="come home";
	}

	$i = 0;
	while ($i<= 10) {

		echo $i*2;

		$i++;
	}

	for($i = 0; $i<= 10; $i++){
		echo $i*3;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body>
	<h2>This is homepage </h2>
	<h3><?php echo $response; ?></h3>
	<H4><?php echo $grade ?></H4>
</body>
</html>