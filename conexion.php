<?php

// Variables para la conexión a la base de datos
$servername = "localhost"; // Cambiar si es necesario
$username = "root"; // Cambiar por el nombre de usuario de tu base de datos
$password = ""; // Cambiar por la contraseña de tu base de datos
$dbname = "floresdelcampo"; // Cambiar por el nombre de tu base de datos
$table = "registros"; // Nombre de la tabla

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$mensaje = $_POST['mensaje'];

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO $table (Nombre, Email, Numero, Mensaje) VALUES ('$nombre', '$email', '$numero', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "¡Registro exitoso! <a href='floreria.html'>Volver</a>"; // Vincular a la página floreria.html
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Cerrar conexión
$conn->close();

?>