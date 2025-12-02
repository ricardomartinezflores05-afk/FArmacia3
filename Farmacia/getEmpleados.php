<?php
include 'db1.php';

$sql = "SELECT idempleados, Nombre, Telefono, Edad, Puesto, Turno FROM empleados";
$result = $conn->query($sql);

$productos = [];

while($row = $result->fetch_assoc()) {
    $productos[] = $row;
}

echo json_encode($productos);
?>