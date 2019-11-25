<?php
$servername = "localhost:3307";
$username = "root";
$password = "usbw";
$dbname = "pankcro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("La conexion fallo: " . $conn->connect_error);
}
//echo "Conexion correcta";

?>