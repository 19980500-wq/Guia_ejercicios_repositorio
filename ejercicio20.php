<?php
$n = $_POST['numero'];
$suma = ($n * ($n + 1)) / 2;
echo "<h2>La suma de 1 hasta " . $n . " es: " . $suma . "</h2>";
echo "<br><a href='ejercicio20.html'><button>Volver al formulario</button></a>";
?>
