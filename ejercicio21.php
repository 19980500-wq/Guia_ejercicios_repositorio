<?php
$palabra = $_POST['palabra'];
$cantidad = strlen($palabra);
echo "<h2>Palabra: " . $palabra . "</h2>";
echo "<h2>Cantidad de letras: " . $cantidad . "</h2>";
echo "<br><a href='ejercicio21.html'><button>Volver al formulario</button></a>";
?>
