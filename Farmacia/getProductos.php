<?php
include 'db1.php';

$sql = "SELECT idProductos, Nombre, Precio, Cantidad, Farmaceutica FROM productos";
$result = $conn->query($sql);

$productos = [];

while($row = $result->fetch_assoc()) {
    $productos[] = $row;
}

echo json_encode($productos);
?>