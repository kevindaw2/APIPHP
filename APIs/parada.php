<?php 

$resultados = file_get_contents('parades.json'); 
$array = json_decode($resultados, true);
$parades = $array['features'];
$result = [];

foreach($parades as $parada) {
    array_push($result, $parada['properties']['CODI_PARADA']); 
}

?>