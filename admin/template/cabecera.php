<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrador</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="../js/bootstrap.js"></script>
  </head>
  <body>

  <?php $url="http://".$_SERVER['HTTP_HOST']."/boot/"; ?>
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-info">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="../img/logo.png" width="72" height="57" alt=""></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo $url?>admin/inicio.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $url?>admin/libros.php">Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $url; ?>">Ver sitio Web</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $url?>admin/cerrar.php"">Cerrar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="container py-5">
      <div class="row">