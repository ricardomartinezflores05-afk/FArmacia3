<?php
include 'db1.php';

$sql = "SELECT id_Productos, Nombre FROM productos";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<option value='{$row['id_Productos']}'>{$row['id_Productos']} - {$row['Nombre']}</option>";
}

$conn->close();
?>
