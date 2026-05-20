<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if ($num1 < $num2) {
  echo "<h2>El número menor es: " . $num1 . "</h2>";
} else if ($num2 < $num1) {
  echo "<h2>El número menor es: " . $num2 . "</h2>";
} else {
  echo "<h2>Ambos números son iguales: " . $num1 . "</h2>";
}
echo "<br><a href='ejercicio8.html'><button>Volver al formulario</button></a>";
?>
