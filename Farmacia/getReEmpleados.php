<?php
include 'db1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idempleados = $_POST['idempleados'];
    $Nombre = $_POST['Nombre'];
    $Telefono = $_POST['Telefono'];
    $Edad = $_POST['Edad'];
    $Puesto = $_POST['Puesto'];
    $Turno = $_POST['Turno'];
    
    
    $sql = $conn->prepare("INSERT INTO empleados (idempleados, Nombre, Telefono, Edad, Puesto, Turno) 
                           VALUES (?, ?, ?, ?, ?, ?)");

    $sql->bind_param("ississ", $idempleados, $Nombre, $Telefono, $Edad, $Puesto, $Turno);

    if ($sql->execute()) {
        echo "Registro insertado correctamente<br><br>";
    } else {
        echo "Error al insertar: " . $sql->error . "<br><br>";
    }
    $sql->close();
    $conn->close();
}   
?>