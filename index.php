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