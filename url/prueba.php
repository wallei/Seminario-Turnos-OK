<?php

include ('conexion.php');

$sql = "INSERT INTO `pankcro`.`usuarios` (`idUsuario`, `Nombre`, `Apellido`, `Usuario`, `Email`, `Clave`) VALUES (NULL, 'asd', 'asd', 'asd', 'asd@asd.com', 'asd')";

if (mysqli_query($conn, $sql)) {
    echo "Nuevo registro creado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>