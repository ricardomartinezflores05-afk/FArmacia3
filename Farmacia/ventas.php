<?php
include 'db.php';

$sql = "SELECT idventas, Fecha, Id_cliente, NobreCliente, Id_producto, DescProducto, Cantidad, Precio, Total FROM ventas";
$result = $conn->query($sql);

$productos = [];

while($row = $result->fetch_assoc()) {
    $productos[] = $row;
}

echo json_encode($productos);
?>