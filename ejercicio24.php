<?php
$edad = $_POST['edad'];
$edad_futura = $edad + 10;
echo "<h2>Edad actual: " . $edad . " años</h2>";
echo "<h2>Dentro de 10 años tendrás: " . $edad_futura . " años</h2>";
echo "<br><a href='ejercicio24.html'><button>Volver al formulario</button></a>";
?>
