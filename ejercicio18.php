<?php
$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$subtotal = $cantidad * $precio;
$iva = $subtotal * 0.13;
$total = $subtotal + $iva;
echo "<h2>     FACTURA    </h2>";
echo "<p>Cliente: " . $cliente . "</p>";
echo "<p>Producto: " . $producto . "</p>";
echo "<p>Cantidad: " . $cantidad . "</p>";
echo "<p>Precio unitario: $" . number_format($precio, 2) . "</p>";
echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";
echo "<p>IVA (13%): $" . number_format($iva, 2) . "</p>";
echo "<h3>Total a pagar: $" . number_format($total, 2) . "</h3>";
echo "<br><a href='ejercicio18.html'><button>Volver al formulario</button></a>";
?>
