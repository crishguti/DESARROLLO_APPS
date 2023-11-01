<?php

$precioActualGaseosa = floatval($_POST['precioActualGaseosa']);
$cantidadUnidadesAdquiridas = intval($_POST['cantidadUnidadesAdquiridas']);
$nuevoPrecioGaseosa = $precioActualGaseosa - ($precioActualGaseosa * 0.05);
$importeCompraAntesDescuento = $nuevoPrecioGaseosa * $cantidadUnidadesAdquiridas;
$importeDescuento = ($importeCompraAntesDescuento * 0.07);
$importeAPagar = $importeCompraAntesDescuento - $importeDescuento;
$obsequioCaramelos = $cantidadUnidadesAdquiridas * 2;
echo "
<h2>Resultados</h2>
<ul>
  <li>Nuevo precio de la gaseosa de 3 litros: S/. " . number_format($nuevoPrecioGaseosa, 2) . "</li>
  <li>Importe de la compra antes del descuento: S/. " . number_format($importeCompraAntesDescuento, 2) . "</li>
  <li>Importe del descuento: S/. " . number_format($importeDescuento, 2) . "</li>
  <li>Importe a pagar: S/. " . number_format($importeAPagar, 2) . "</li>
  <li>Obsequio: " . $obsequioCaramelos . " caramelos</li>
</ul>
";
?>
