<?php

$importeVendido = floatval($_POST['importeVendido']);
$hijosEscolar = intval($_POST['hijosEscolar']);

$sueldoBasico = 600;
$bonificacionPorHijo = 50;
$porcentajeComision = 7.5;
$porcentajeDescuento = 11;

$comision = $importeVendido * ($porcentajeComision / 100);
$bonificacion = $hijosEscolar * $bonificacionPorHijo;
$sueldoBruto = $sueldoBasico + $comision + $bonificacion;
$descuento = $sueldoBruto * ($porcentajeDescuento / 100);
$sueldoNeto = $sueldoBruto - $descuento;

echo "Comisión: S/. " . number_format($comision, 2) . "<br>";
echo "Bonificación por hijo: S/. " . number_format($bonificacion, 2) . "<br>";
echo "Sueldo Bruto: S/. " . number_format($sueldoBruto, 2) . "<br>";
echo "Descuento: S/. " . number_format($descuento, 2) . "<br>";
echo "Sueldo Neto: S/. " . number_format($sueldoNeto, 2);
?>
