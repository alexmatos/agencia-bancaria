<?php

$data = new DateTime();
echo $data->format('d-m-Y H:i:s'); 
echo "<br>" . $data->format('mY'); 

echo "<hr>";
$data = new DateTime('22-01-1990');
echo $data->format('d-m-Y H:i:s'); 
echo "<br>" . $data->format('mY'); 

echo "<hr>";
$data = date("d/m/Y"); 
$data = explode("/", $data);
list($dia, $mes, $ano) = $data;
$data = "$ano/$mes/$dia";
 echo $data;