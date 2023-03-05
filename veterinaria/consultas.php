<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>consultas
    </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Veterinaria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

    </nav>

    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-5 p-5 bg-white shadow-lg rounded">
                <h3>LOGIN</h3>
                <hr>
                <form method="post" action="consultasInfo.php">
                    <div class="form-group">
                        <label for="user">id_mascota</label>
                        <input  class="form-control" type="text" name="mascota">
                    </div>
                    <div class="form-group">
                    <label for="user">id_usuario</label>
                        <input  class="form-control" type="text" name="usuario">
                    </div>
                    <div class="form-group">
                    <label for="user">examen fisico</label>
                        <input  class="form-control" type="text" name="examen">
                    </div>
                    <div class="form-group">
                    <label for="user">diagnostico</label>
                        <input  class="form-control" type="text" name="diagnostico">
                    </div>
                    <div class="form-group">
                    <label for="user">medicamento</label>
                        <input  class="form-control" type="text" name="medicamento">
                    </div>
                    <div class="form-group">
                    <label for="user">proxima cita</label>
                        <input  class="form-control" type="text" name="cita">
                    </div>
                    <div class="form-group">
                    <label for="user">costo</label>
                        <input  class="form-control" type="text" name="costo">
                    </div>
                    <br>
                    <button class="btn btn-primary"  name="consulta" type="submit">Insertar</button>
                </form>
            </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>