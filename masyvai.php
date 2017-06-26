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


<?php
$sudetys = [
	"Blynai" => ["Miltai" => 250, "Pienas" => 100, "Druska" => 2],
	"Arbata" => ["Vanduo" => 100, "Arbata" => 100];
]

	//echo $sudetys["Blynai"]["Miltai"];
	foreach ($sudetys ["Blynai"] as $kiekis) {
		echo $kiekis . "<br />";
	}

	foreach ($sudetys["Blynai"] as $produktas => $kiekis) {
		echo "produktas: " . $produktas . ", " . $kiekis . "<br />";
	}

?>


	$drinks = ["Water", "Tea", "Milk", "Coffee", "Beer", "Juice"];   /
	
	$some_drinks = array_slice($drinks, 0, 2); //masyvas supjausto masyva

	$merged = array_merge($masyvas1, $masyvas2);


	$exploded = explode(" ", $tekstas);			//grazina array

	$imploded = implode(" ", $tekstas);			//grazina string


	sort($masyvas); // surusiuoja paga dydi ir pakeicia raktus
	asort($masyvas); // surusiuoja bet nepakeicia raktu

	shuffle($masyvas);


## Uzduotis
suvesti i masyva troskinio sudeti:

Jautiena, 250 g.
Pupeles, 500 g.
Vanduo, 500 g.
Pomidorai, 300 g.
Paprika, 100g.

1. parasyti funkcija, kuri atspausdintu visus elementus lenteleje (print kontent/sudetis). produktas ir svoris
2. (print inside?) echo printf parasyti funkcija, kuri atspausdintu "Jautienos receptui mums reikes XXX gramu ZZZ, taip pat, XXX gramu ZZZ..."
3. prasayti funkcija, kuri suskaiciuotu kiek svers visi produktai
4. parasyti funcija, kuri patikrintu ar vandens ne maziau nei pupeliu
*/


</body>
</html>