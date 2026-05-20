<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$promedio = ($nota1 + $nota2 + $nota3) / 3;
echo "<h2>Promedio: " . number_format($promedio, 2) . "</h2>";
if ($promedio >= 6) {
  echo "<h2>Calificacion final : APROBADO</h2>";
} else {
  echo "<h2>Calificacion final: REPROBADO</h2>";
}
echo "<br><a href='ejercicio11.html'><button>Volver al formulario</button></a>";
?>
