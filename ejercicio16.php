<?php
$nombre = $_POST['nombre'];
$horas = $_POST['horas'];
$pago_hora = $_POST['pago_hora'];
$salario = $horas * $pago_hora;
echo "<h2>Empleado: " . $nombre . "</h2>";
echo "<h2>Horas trabajadas: " . $horas . "</h2>";
echo "<h2>Pago por hora: $" . number_format($pago_hora, 2) . "</h2>";
echo "<h2>Salario total: $" . number_format($salario, 2) . "</h2>";
echo "<br><a href='ejercicio16.html'><button>Volver al formulario</button></a>";
?>
