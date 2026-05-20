<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$resultado = $num1 - $num2;
echo "<h2>Resultado de la resta: " . $num1 . " - " . $num2 . " = " . $resultado . "</h2>";
echo "<br><a href='ejercicio3.html'><button>Volver al formulario</button></a>";
?>