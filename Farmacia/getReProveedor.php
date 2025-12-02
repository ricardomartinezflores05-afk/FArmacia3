<?php
include 'db1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idProveedor = $_POST['idProveedor'];
    $Nombre = $_POST['Nombre'];
    $Telefono = $_POST['Telefono'];
    $Producto_surtido = $_POST['Producto_surtido'];
    $idProductos = $_POST['idProductos'];
    
    
    $sql = $conn->prepare("INSERT INTO proveedor (idProveedor, Nombre, Telefono, Producto_surtido, idProductos) 
                           VALUES (?, ?, ?, ?, ?)");

    $sql->bind_param("isssi", $idProveedor, $Nombre, $Telefono, $Producto_surtido, $idProductos);

    if ($sql->execute()) {
        echo "Registro insertado correctamente<br><br>";
    } else {
        echo "Error al insertar: " . $sql->error . "<br><br>";
    }
    $sql->close();
    $conn->close();
}   
?>