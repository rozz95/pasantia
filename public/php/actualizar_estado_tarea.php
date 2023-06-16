<?php
// actualizar_estado_tarea.php

// Obtener los datos enviados por la solicitud AJAX
$idt = $_POST['id']; // ID de la tarea
$nuevoEstado = $_POST['estado_tarea']; // Nuevo estado de la tarea
$columnaArrastrada = $_POST['columnaArrastrada']; // Columna a la que se arrastró el elemento

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

// Actualizar el estado de la tarea en la base de datos según la columna arrastrada
$sql = "UPDATE tareas SET estado_tarea = '$nuevoEstado', columna_arrastrada = '$columnaArrastrada' WHERE id = '$idt'";

if ($conn->query($sql) === TRUE) {
  // La actualización se realizó con éxito
  echo "El estado de la tarea se actualizó correctamente en la base de datos";
} else {
  // Hubo un error en la actualización
  echo "Error al actualizar el estado de la tarea: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>