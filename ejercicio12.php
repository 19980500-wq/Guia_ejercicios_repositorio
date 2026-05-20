<?php
$base = $_POST['base'];
$altura = $_POST['altura'];
$area = $base * $altura;
echo "<h2>Base: " . $base . "</h2>";
echo "<h2>Altura: " . $altura . "</h2>";
echo "<h2>Área del rectángulo: " . $area . "</h2>";
echo "<br><a href='ejercicio12.html'><button>Volver al formulario</button></a>";
?>
