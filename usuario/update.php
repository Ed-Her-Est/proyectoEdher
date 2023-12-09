<?php
    include("connection.php");
    $con = connection();

    $ID_Usuario = $_GET['id'];

    $sql = "SELECT * FROM usuario WHERE ID_Usuario='$ID_Usuario'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar usuarios</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .users-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .users-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="users-form">
            <h2 class="mb-4">Editar Usuario</h2>
            <form action="editarUsuario.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID_Usuario'] ?>">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?>">
                </div>
                <div class="form-group">
                    <label for="apellidoPaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellidoPaterno" placeholder="Apellido Paterno" value="<?= $row['apellidoPaterno'] ?>">
                </div>
                <div class="form-group">
                    <label for="apellidoMaterno">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidoMaterno" placeholder="Apellido Materno" value="<?= $row['apellidoMaterno'] ?>">
                </div>
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?= $row['usuario'] ?>">
                </div>
                <div class="form-group">
                    <label for="contrasenia">Contraseña</label>
                    <input type="text" class="form-control" name="contrasenia" placeholder="Contraseña" value="<?= $row['contrasenia'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $row['email'] ?>">
                </div>

                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>

    <!-- Agrega scripts de Bootstrap y otros que puedas necesitar -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
