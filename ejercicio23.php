<?php
$precio = $_POST['precio'];
$iva = $precio * 0.13;
$total = $precio + $iva;
echo "<h2>Precio normal: $" . number_format($precio, 2) . "</h2>";
echo "<h2>IVA (13%): $" . number_format($iva, 2) . "</h2>";
echo "<h2>Total con IVA: $" . number_format($total, 2) . "</h2>";
echo "<br><a href='ejercicio23.html'><button>Volver al formulario</button></a>";
?>
