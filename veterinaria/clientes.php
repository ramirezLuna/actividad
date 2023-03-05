<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAGINA PRINCIPAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-5 p-5 bg-white shadow-lg rounded">
                <h3>clientes</h3>
                <hr>
                <h1>Formulario de clientes</h1>
                <form action="clientesInfo.php" method="post">
                    <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required><br>
                </div>
                <form action="clientes.php" method="post">
                    <div class="form-group">
                    <label for="dui">DUI:</label>
                    <input type="text" name="dui" id="dui" required><br>
                </div>
                <form action="clientes.php" method="post">
                    <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" name="direccion" id="direccion" required><br>
                </div>
                <form action="clientes.php" method="post">
                    <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" name="telefono" id="telefono" required><br>
                </div>
                <form action="clientes.php" method="post">
                <div class="form-group">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" name="correo" id="correo" required><br>
                </div>
                <form action="clientes.php" method="post">
                    <div class="form-group">
                    <label for="estatus">Estatus:</label>
                    <select name="estatus" id="estatus">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <br><br>

                    <input type="submit" name="insertar" value="Insertar">
                </form>

</body>

</html>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>