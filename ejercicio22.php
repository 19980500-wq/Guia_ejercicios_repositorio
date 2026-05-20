<?php
$dolares = $_POST['dolares'];
$tasa = 0.86;
$euros = $dolares * $tasa;
echo "<h2>$" . number_format($dolares, 2) . " USD = €" . number_format($euros, 2) . " EUR</h2>";
echo "<p>(Tasa para cambio utilizada: 1 USD = " . $tasa . " EUR)</p>";
echo "<br><a href='ejercicio22.html'><button>Volver al formulario</button></a>";
?>
