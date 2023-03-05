<?php
require('config.php');
// Conexión a la base de datos
$host = 'localhost';
$dbname = 'veterinaria';
$user = 'root';
$password_db = '';

$pdo = new mysqli($host, $user, $password_db, $dbname);

// Verificar conexión
if ($pdo->connect_error) {
    die("Conexión fallida: " . $pdo->connect_error);
}

// Comprobar si se ha enviado el formulario
if (isset($_POST['insertar'])) {
    // Recoger los valores enviados por el formulario
    $nombre = $_POST['nombre_cliente'];
    $telefono = $_POST['telefono'];
    $dui = $_POST['dui'];
    $direccion = $_POST['direccion'];
    $email = $_POST['correo'];
    $estatus = $_POST['estatus'];

    // Preparar la consulta SQL para insertar los datos en la tabla de clientes
    $insertar = "INSERT INTO clientes (nombre_cliente, telefono, dui, direccion, email, estatus) 
                 VALUES ('$nombre','$telefono','$dui','$direccion','$email',$estatus)";

// Ejecutar la consulta SQL
    if ($pdo->query($insertar) === TRUE) {
        // Si la consulta se ejecutó correctamente, redirigir a la página de información de clientes
        echo "<script>alert('¡Datos guardados!'); window.location = 'clientesInfo.php';</script>";
        exit;
    } else {
        // Si la consulta falló, mostrar un mensaje de error
            echo "Error al insertar los datos: " . $pdo->error;
    }
}
?>