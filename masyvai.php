<!DOCTYPE html>
<html>
<body>

<?php
	$drinks = ["Water", "Tea", "Milk", "Coffee", "Beer", "Juice"];
	
		  foreach ($drinks as $drink) {
		  	echo $drink;
		  }
	
	//	spausdinti($drinks);
	?><br></br>

	<?php
	$drinks = ["Water", "Tea", "Milk", "Coffee", "Beer", "Juice"];   // NETEISINGAS
	
		  foreach ($drinks as $drink) {
		  	echo(rand(0) . "<br>");
			echo(rand(0, 5) . "<br>");
			echo(rand(0, 5));
		  }
	
	?>

<?php
	$users = []
# associative
	$user1 = ["Name" => "Evaldas", "Surname" => "Matiukas", "Age" => "99", "Phone" => 852741456];
	$user2 = ["Name" => "Petras", "Surname" => "Petrauskas", "Age" => "88", "Phone" => 852741411];


	$array_push($users, $user1, $user2);

	//print_r($users);
	//echo $users[0]["Name"];

	//print_r($users);

	foreach ($users as $user) {
		echo $user["Name"] . " " . $user["Surname"] . "<br />";
	}
?>

</body>
</html>