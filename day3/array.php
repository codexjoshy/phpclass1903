<?php 
	//positional array
	// $houseAddress = ["omole", 3, "ajuwon", 5];
	// $houseAddress[1];
	// $houseAddress[2];
	// for($i=0; $i<=count($houseAddress); $i++){
	// 	echo $houseAddress[$i]
	// }

	//assosciative array
	// $houseAddress = [
	// 	"location"=>"omole",
	// 	"number"=>3,
	// 	"street"=>"phase2",
	// 	"lga"=>"ikeja",
	// 	"companies"=>["alabian"=>"alabi","shell","chevron"]
	// ];
	// $houseAddress["street"];
	// $houseAddress["companies",[0]]
	// $houseAddress["companies"=>"alabian"]
	// $houseAddress["companies"][0],
	// $houseAddress["companies[0]"]
	// $houseAddress["companies",0]
	// $houseAddress["companies"=>[0]]

	//mulidimensional array
	// $houseAddress = [
	// 	["location"=>"omole","number"=>3],
	// 	["location"=>"meiran", "number"=>5],
	// 	["location"=>"mushin", "goat", "number"=>6]
	// ]
	// $houseAddress[2][1]

	// $houseAddress['location'][0]
	// $houseAddress[0]["location"][0]
	// $houseAddress[2]["location"]
	// $houseAddress[2]["location"][0]
	$score="";
	$paulScore = ["English"=>40, "Maths"=>50, "Geography"=>80];
	$score .="<table border='1' width='600'>";
	$score .="<tr>";
	$score .= "<th>Subject</th><th>Score</th>";
	$score .= "</tr>";
	foreach ($paulScore as $subject => $value) {
		$score .=  "<tr>";

		$score .= "<td>";
		$score .= $subject;
		$score .= "</td>";

		$score .= "<td>";
		$score .= $value;
		$score .= "</td>";

		$score .=  "</tr>";
	}
	$score .= "</table>";
	//mulidimensional array
	$students =[
		"REG001"=>["Name"=>"Paul","English"=>70,"Maths"=>80,"Physics"=>72],
		"REG002"=>[ "Name"=>"Andrew","English"=>60,"Maths"=>75,"Physics"=>90 ],
		"REG003"=>["Name"=>"James","English"=>55,"Maths"=>80,"Physics"=>40]
	];
	foreach ($students as $key => $value) {
		echo $value["Name"].":".$value['English'];
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
</body>
</html>