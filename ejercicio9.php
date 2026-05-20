<?php
$numero = $_POST['numero'];
if ($numero % 2 == 0) {
  echo "<h2>El número " . $numero . " es PAR.</h2>";
} else {
  echo "<h2>El número " . $numero . " es IMPAR.</h2>";
}
echo "<br><a href='ejercicio9.html'><button>Volver al formulario</button></a>";
?>
