<?php
include 'db1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idProductos = $_POST['idProductos'];
    $Nombre = $_POST['Nombre'];
    $Precio = $_POST['Precio'];
    $Cantidad = $_POST['Cantidad'];
    $Farmaceutica = $_POST['Farmaceutica'];
    
    
    $sql = $conn->prepare("INSERT INTO productos (idProductos, Nombre, Precio, Cantidad, Farmaceutica) 
                           VALUES (?, ?, ?, ?, ?)");

    $sql->bind_param("issis", $idProductos, $Nombre, $Precio, $Cantidad, $Farmaceutica);

    if ($sql->execute()) {
        echo "Registro insertado correctamente<br><br>";
    } else {
        echo "Error al insertar: " . $sql->error . "<br><br>";
    }
    $sql->close();
    $conn->close();
}   
?>