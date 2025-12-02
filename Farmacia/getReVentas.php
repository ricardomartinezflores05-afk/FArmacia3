<?php
include 'db1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idVentas = $_POST['idVentas'];
    $id_empleados = $_POST['id_empleados'];
    $id_Clientes = $_POST['id_Clientes'];
    $id_Productos = $_POST['id_Productos'];
    $Fecha_venta = $_POST['Fecha_venta'];
    $Total = $_POST['Total'];
    $Metodo_pago = $_POST['Metodo_pago'];
    
    
    $sql = $conn->prepare("INSERT INTO ventas (idVentas, id_empleados, id_Clientes, id_Productos, Fecha_venta, Total, Metodo_pago) 
                       VALUES (?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("iiissis", $idVentas, $id_empleados, $id_Clientes, $id_Productos, $Fecha_venta, $Total, $Metodo_pago);

    if ($sql->execute()) {
        echo "Registro insertado correctamente<br><br>";
    } else {
        echo "Error al insertar: " . $sql->error . "<br><br>";
    }
    $sql->close();
    $conn->close();
}   
?>