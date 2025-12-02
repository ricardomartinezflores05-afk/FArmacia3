<?php
$servername = "localhost";
$username = "root";
$password = "100622_Teri";
$database = "farmacia1";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>