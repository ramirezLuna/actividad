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
if (isset($_POST['consulta'])) {
    // Recoger los valores enviados por el formulario
    $id_mascota = $_POST['mascota'];
    $id_usuario = $_POST['usuario'];
    $examen = $_POST['examen'];
    $diagnostico = $_POST['diagnostico'];
    $medicamento = $_POST['medicamento'];
    $cita = $_POST['cita'];
    $costo = $_POST['costo'];


    // Preparar la consulta SQL para insertar los datos en la tabla de clientes
    $consulta = "INSERT INTO consultas (id_mascota,id_usuario,examen_fisico,diagnostico,medicamento,proxima_cita,costo) 
                 VALUES ('$id_mascota','$id_usuario','$examen','$diagnostico','$medicamento','$cita','$costo')";


    // Ejecutar la consulta SQL
    if ($pdo->query($consulta) === TRUE) {
        // Si la consulta se ejecutó correctamente, redirigir a la página de información de clientes
        echo "<script>alert('¡Datos guardados!'); window.location = 'consultasInfo.php';</script>";
        exit;
    } else {
        // Si la consulta falló, mostrar un mensaje de error
        echo "Error al insertar los datos: " . $pdo->error;
    }
}
