<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/custom.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="../js/bootstrap.js"></script>
</head>
<body class="text-center d-grid justify-content-center align-items-center pt-5">
    
<main class="form-signin ">
  <form>
    <img class="mb-4" src="../img/logo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="email@ejemplo.com">
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="pass" placeholder="Contraseña">
      <label for="pass">Contraseña</label>
    </div>
    <div class="checkbox mb-3 mt-3">
    <input class="form-check-input" id="acepto" type="checkbox" name="acepto" data-sb-validations="required" />
                <label class="form-check-label" for="acepto"><small>Acepto los términos y condiciones</small></label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">© <script>document.write(new Date().getFullYear())</script> Company, Inc</p>
  </form>
</main>


    
  

</body>
</html>