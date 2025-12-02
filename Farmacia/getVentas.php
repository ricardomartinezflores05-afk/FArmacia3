<?php
include 'db1.php';

$sql = "SELECT idVentas, id_empleados, id_Clientes, id_Productos, Fecha_venta, Total, Metodo_pago FROM ventas";
$result = $conn->query($sql);

$productos = [];

while($row = $result->fetch_assoc()) {
    $productos[] = $row;
}

echo json_encode($productos);
?>