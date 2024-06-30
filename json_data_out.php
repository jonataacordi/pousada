<?php
header("Cache-Control: no-cache, must-revalidate");
  header('Content-type: application/json');

$cam = isset($_GET['out'])? $_GET['out']:null;
date_default_timezone_set('America/Sao_Paulo');
$datad = date("d");
$datam =date("m");
$datay = date("Y");
//$soma = $datad + $cam;
$soma =  date("d/m/Y", mktime(0, 0, 0, $datam, ($datad + $cam), $datay ));

$busca =  json_encode (array(
           "dia" => utf8_encode ($soma)
    ));


echo "dia_callback(".$busca.");";


?>