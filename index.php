<?php
function print_cells($count) {

	for ($i=0; $i < $count; $i++){
		echo "<langelis>" . $i . "</langelis>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	
langelis {
	width: 40px;
	background-color:gray;
	padding: 3px;
	display: block;
	float: left;
}

</style>

</head>
<body>

<?php //print_cells(201); ?>

</body>

<br></br>

<?php
for ($gylis=1; $gylis < 5 ; $gylis++) { 
//echo "Mums reikes" . get_area(3, 50, 10) . " kv.m. plyteliu.";
}

function get_area ($gylis, $ilgis, $plotis){
 $plotas = ($ilgis * $gylis)*2 + ($plotis * $gylis)*2 + ($ilgis * $plotis);

return $plotas;
}
?>



<?php

for ($temp=5; $temp < 41 ; $temp++) { 
	echo "Siandien lauke yra " .$temp. " ir ". get_feel($temp) ."<br/>";
}

function get_feel($t){

	if ($t > 30){
		return "karsta";
	} 
	elseif ($t <= 30 & $t > 10){
		return "silta";
	}elseif ($t <= 10){
		return "salta";
	}
}
?>


</html>

<?php
	function gauti_turi($depth, $width = 5, $length = 20) { // Gaunamas baseino tūris
		$volume = $depth * $width * $length;
		return $volume;
	}

	function gauti_autocisternu_kieki($value, $capacity = 250) {// Suskaičiuojam kiek autocisternų reikia užsakyti
		$trucks = ceil($value/$capacity);
		return $trucks;
	}

	function atvezimo_kaina($count, $capacity = 250) { // kiek kainuoja užsakyti nutodyto tūrio autocisterna
		$price = round($count * ($capacity * 0.75 + 50));
		return $price;
	}

	function ar_pigiausias($prices, $capacity) {
		if (array_keys($prices, min($prices))[0] == (int)$capacity) {
			return "success";
		} else if (array_keys($prices, max($prices))[0] == (int)$capacity){
			return "danger";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Baseinas ir autocisternos</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Baseinas ir autocisternos</h1>
		<p>Paskaičiuokime, kiek reikės užsakyti autocisternų, kad užpildyti skirtingų gylių baseinus.</p>
		<p>Baseino ilgis: 20 m., plotis 5 m., gylis tarp 1 ir 30 m.</p>
		<p>Autocisternos tūris: 250, 400 ir 1200 m3</p>
		<p>Vienos autocisternos atvežimo kaina: Tūris*0,75Eur+50 Eur.</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table style="width: 100%" class="table text-center table-reponsive table-hover table-bordered table-condensed">
					<thead>
					<tr>
						<th rowspan="3" class="text-center">Baseino gylis (m.)</th>
						<th rowspan="3" class="text-center">Tūris (m3)</th>
						<th colspan="6" class="text-center">Autocisternų kiekis</th>
					</tr>
					<tr>
			            <th colspan="2" class="text-center">250 m3</th>
			            <th colspan="2" class="text-center">400 m3</th>
			            <th colspan="2" class="text-center">1200 m3</th>
			        </tr>
			        <tr>
			            <th class="text-center">Kiekis</th>
			            <th class="text-center">Kaina</th>
			            <th class="text-center">Kiekis</th>
			            <th class="text-center">Kaina</th>
			            <th class="text-center">Kiekis</th>
			            <th class="text-center">Kaina</th>
			        </tr>
					</thead>
					<tbody>
					<?php
						for($gylis = 1; $gylis <= 30; $gylis++) {

							$kaina250 = atvezimo_kaina(gauti_autocisternu_kieki(gauti_turi($gylis)));
							$kaina400 = atvezimo_kaina(gauti_autocisternu_kieki(gauti_turi($gylis), 400), 400);
							$kaina1200 = atvezimo_kaina(gauti_autocisternu_kieki(gauti_turi($gylis), 1200), 1200);

							$kainos = array('250' => $kaina250,  '400' => $kaina400, '1200' => $kaina1200);

							echo '<tr>
							<td>'. $gylis .' m.</td>
							<td>'. gauti_turi($gylis) .'</td>
							<td>'. gauti_autocisternu_kieki(gauti_turi($gylis)).'</td>
							<td class="'. ar_pigiausias($kainos, 250) .'">'. $kaina250 .'</td>
							<td>'. gauti_autocisternu_kieki(gauti_turi($gylis), 400).'</td>
							<td class="'. ar_pigiausias($kainos, 400) .'">'. $kaina400 .'</td>
							<td>'. gauti_autocisternu_kieki(gauti_turi($gylis), 1200).'</td>
							<td class="'. ar_pigiausias($kainos, 1200) .'">'. $kaina1200 .'</td>
							</tr>';
						}
					?>
				  </tbody>
			</div>
		</div>



//$tekstas = "Siandien nuostabi diena.";

<?php
$number = 9;
$str = "Beijing";
$txt = sprintf("There are %u million bicycles in %s.",$number,$str);
echo $txt;
?> 

<?php
	$drinks = ["Water", "Tea", "Milk", "Coffee", "Beer", "Juice"];

	  foreach ($drinks as $drink) {
	  	echo $drink;
	  }
	 
	//	spausdinti($drinks);
	?>



</body>
</html>




