<?php
$celsius = $_POST['celsius'];
$fahrenheit = ($celsius * 9 / 5) + 32;
echo "<h2>" . $celsius . "°C = " . number_format($fahrenheit, 2) . "°F</h2>";
echo "<br><a href='ejercicio15.html'><button>Volver al formulario</button></a>";
?>
