<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if ($num2 == 0) {
  echo "<h2>Error: No se puede dividir entre cero.</h2>";
} else {
  $resultado = $num1 / $num2;
  echo "<h2>Resultado de la división: " . $num1 . " / " . $num2 . " = " . $resultado . "</h2>";
}
echo "<br><a href='ejercicio5.html'><button>Volver al formulario</button></a>";
?>