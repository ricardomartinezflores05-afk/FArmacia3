<?php
include 'db1.php';

$sql = "SELECT idClientes, Nombre, Correo, Direccion, Telefono, Edad FROM clientes";
$result = $conn->query($sql);

$productos = [];

while($row = $result->fetch_assoc()) {
    $productos[] = $row;
}

echo json_encode($productos);
?>