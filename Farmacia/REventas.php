<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idventas = $_POST['idventas'];
    $Fecha = date("Y-m-d");
    $Id_cliente = $_POST['Id_cliente'];
    $NobreCliente = $_POST['NobreCliente'];
    $Id_producto = $_POST['Id_producto'];
    $DescProducto = $_POST['DescProducto'];
    $Cantidad = $_POST['Cantidad'];
    $Precio = $_POST['Precio'];
    $Total = $_POST['Total'];
    
    $sql = $conn->prepare("INSERT INTO ventas (idventas, Fecha, Id_cliente, NobreCliente, Id_producto, DescProducto, Cantidad, Precio, Total) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("issssssss", $idventas, $Fecha, $Id_cliente, $NobreCliente, $Id_producto, $DescProducto, $Cantidad, $Precio, $Total);

    if ($sql->execute()) {
        echo "Registro insertado correctamente<br><br>";
    } else {
        echo "Error al insertar: " . $sql->error . "<br><br>";
    }
    $sql->close();
    $conn->close();
}   
?>