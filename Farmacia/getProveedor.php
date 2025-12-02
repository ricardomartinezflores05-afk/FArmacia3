<?php
include 'db1.php';

$sql = "SELECT idProveedor, Nombre, Telefono, Producto_surtido, idProductos FROM proveedor";
$result = $conn->query($sql);

$productos = [];

while($row = $result->fetch_assoc()) {
    $productos[] = $row;
}

echo json_encode($productos);
?>