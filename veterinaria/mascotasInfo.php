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
if (isset($_POST['mascotas'])) {
    // Recoger los valores enviados por el formulario
    $nombre = $_POST['nombre'];
    $raza = $_POST['raza'];
    $color = $_POST['color'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];
    $fecha_nacimiento = $_POST['nacimiento'];
    $id_cliente = $_POST['cliente'];


    // Preparar la consulta SQL para insertar los datos en la tabla de clientes
    $mascotas = "INSERT INTO mascotas (nombre,raza,color,peso,altura,sexo,fecha_nacimiento,id_cliente) 
                 VALUES ('$nombre','$raza','$color','$peso','$altura','$sexo','$fecha_nacimiento','$id_cliente')";


    // Ejecutar la consulta SQL
    if ($pdo->query($mascotas) === TRUE) {
        // Si la consulta se ejecutó correctamente, redirigir a la página de información de clientes
        echo "<script>alert('¡Datos guardados!'); window.location = 'mascotasInfo.php';</script>";
        exit;
    } else {
        // Si la consulta falló, mostrar un mensaje de error
        echo "Error al insertar los datos: " . $pdo->error;
    }
}
