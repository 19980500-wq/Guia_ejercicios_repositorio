<?php
$monto = $_POST['monto'];
echo "<h2> Monto original: $" . number_format($monto, 2) . "</h2>";
if ($monto > 100) {
  $descuento = $monto * 0.10;
  $total = $monto - $descuento;
  echo "<h2> Descuento (10%): $" . number_format($descuento, 2) . "</h2>";
  echo "<h2> Total a pagar: $" . number_format($total, 2) . "</h2>";
} else {
  echo "<h2> No aplica descuento. Total a pagar: $" . number_format($monto, 2) . "</h2>";
}
echo "<br><a href='ejercicio17.html'><button>Volver al formulario</button></a>";
?>
