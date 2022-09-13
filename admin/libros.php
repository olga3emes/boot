<?php include("template/cabecera.php");?>

    
<div class="col-md-5">
<form method="">
    <h1 class="h3 mb-3 fw-normal">Nuevo Libro</h1>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="id" id="id" placeholder="id">
      <label for="id">id</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="titulo" id="titulo" placeholder="titulo">
      <label for="titulo">Título</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="autor" id="autor" placeholder="autor">
      <label for="titulo">Autor</label>
    </div>

    <div class="form-floating mb-3">
      <input type="file" class="form-file" name="imagen" id="imagen" aria-describedby="file">
      <label for="file" class="form-label m-0"></label>

    </div>

    

   
    <button class="col-3 w-30 btn btn-info text-white" type="reset">Limpiar</button>
    <button class="col-3 w-30 btn btn-primary" type="submit">Guardar</button>
</div>
  </form>
</div>

<div class="col-md-7">


</div>
    <?php include("template/pie.php");?>