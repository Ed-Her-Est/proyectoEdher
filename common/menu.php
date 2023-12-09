<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Control de Citas de Fisioterapia</title>
    <meta name="description" content="Sistema de Control de Citas de Fisioterapia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body {
        background-image: url('clinica.png.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="" width="44" height="43">
                <span class="logo-text">Control de Citas</span>
            </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/') ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/servicios') ?>">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/contacto') ?>">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav">
                <li class="nav-item">
    <a class="nav-link" href="<?= base_url('usuario/login') ?>">Iniciar Sesión</a>
</li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/cuenta/agregar') ?>">Crear Cuenta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <header class="text-center my-5">
           
            <h1 class="display-1">¡Bienvenido a nuestro sistema de control de citas de fisioterapia!</h1>
            
            <img src="3.1.png" alt="" width="800" height="700">
         
        </header>
        <section class="text-center">
            <p class="lead"></p>
        </section>
    </div>
</body>
</html>
