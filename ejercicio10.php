<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$promedio = ($nota1 + $nota2 + $nota3) / 3;
echo "<h2>Nota 1: " . $nota1 . "</h2>";
echo "<h2>Nota 2: " . $nota2 . "</h2>";
echo "<h2>Nota 3: " . $nota3 . "</h2>";
echo "<h2>Promedio: " . number_format($promedio, 2) . "</h2>";
echo "<br><a href='ejercicio10.html'><button>Volver al formulario</button></a>";
?>
