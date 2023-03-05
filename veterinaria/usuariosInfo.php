<?php
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
if (isset($_POST['usuarios'])) {
    // Recoger los valores enviados por el formulario
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $estatus = $_POST['estatus'];
    $id_rol = $_POST['id_rol'];
    
    

    // Preparar la consulta SQL para insertar los datos en la tabla de clientes
    $usuarios = "INSERT INTO usuario (username,password,email,telefono,estatus,id_rol) 
                 VALUES ('$username','$password','$email','$telefono','$estatus',$id_rol)";


    // Ejecutar la consulta SQL
    if ($pdo->query($usuarios) === TRUE) {
        // Si la consulta se ejecutó correctamente, redirigir a la página de información de clientes
        echo "<script>alert('¡Datos guardados!'); window.location = 'mascotasInfo.php';</script>";
        exit;
    } else {
        // Si la consulta falló, mostrar un mensaje de error
        echo "Error al insertar los datos: " . $pdo->error;
    }
}
