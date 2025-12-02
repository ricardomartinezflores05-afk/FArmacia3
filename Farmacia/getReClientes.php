<?php
include 'db1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idClientes = $_POST['idClientes'];
    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];
    $Edad = $_POST['Edad'];
    
    $sql = $conn->prepare("INSERT INTO clientes (idClientes, Nombre, Correo, Direccion, Telefono, Edad) 
                           VALUES (?, ?, ?, ?, ?, ?)");

    $sql->bind_param("issssi", $idClientes, $Nombre, $Correo, $Direccion, $Telefono, $Edad);

    if ($sql->execute()) {
        echo "Registro insertado correctamente<br><br>";
    } else {
        echo "Error al insertar: " . $sql->error . "<br><br>";
    }
    $sql->close();
    $conn->close();
}   
?>