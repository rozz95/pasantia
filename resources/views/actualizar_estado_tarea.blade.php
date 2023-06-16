<?php


// Realizar la conexión a tu base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practica";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay algún error en la conexión
if ($conn->connect_error) {
  die("Error de conexión a la base de datos: " . $conn->connect_error);
}

echo"exito";

// Cerrar la conexión a la base de datos
$conn->close();
?>