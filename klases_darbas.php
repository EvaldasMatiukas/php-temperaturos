<?php

echo "Mums reikes" . get_area(50, 10, 3) . " kv.m. plyteliu.";

function get_area (){
 $plotas = ($ilgis * $gylis)*2) + (($plotis * $gylis)*2) + ($ilgis * $plotis);
}
return $plotas;

?>