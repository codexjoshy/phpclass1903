<?php include '../config.php';  ?>
<?php
	$day = 8;
	$month = 'April';
	$year = 2018;
	$today = 'Today\'s date is ' .$day.' '.$month.' '.$year;
	// $today = "Today\'s date is {$day} {$month} {$year}";
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 <link rel="stylesheet" type="text/css" href=" <?php echo URL?>CSS/ ">
 </head>
 <body>
 	<a href="<?php echo URL.'day2/template/home.php' ?>">Home</a>
 	<span><?php echo $today; ?></span>
 </body>
 </html>