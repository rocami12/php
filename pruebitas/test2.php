<?php
$meses =array("enero", "febrero", "marzo", "abril", "mayo", "junio", 
               "julio", "agosto", "setiembre", "octubre", "noviembre", "diciembre");

$fecha = date("Y-m-d");
$dia = date("d");
$mes = date("n") - 1;  
$anio = date("Y");

echo "Hoy es $dia del mes " . $meses[$mes] . " del año $anio";
?>