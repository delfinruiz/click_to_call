<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Click to Call</title>



    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- inicio alertas -->

    <link rel="stylesheet" href="css/alertas/alertify.rtl.css">
    <link rel="stylesheet" href="css/alertas/themes/default.rtl.css">
    <script src="js/alertas/alertify.js"></script>

    <!-- fin alertas -->

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/main.js" ></script>


  </head>

  <body>

    <a href="http://www.peoplebpo.com" class="boton" target="_blank" data-toggle="modal" data-target="#form_llamar"/><img src="images/boton.png"/></a>

<!-- inicio Modal formulario -->
<div class="modal fade llamar" id="form_llamar" tabindex="-1" role="dialog" aria-labelledby="form_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Ingresa tus datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">

          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
          <select name="pais" id="pais" class="form-control mt-2">
          <option value="" selected disabled>País</option>
          <option value="CO">Colombia</option>
          <option value="PE">Perú</option>
          <option value="CH">Chile</option>
          </select>
          <input type="number" name="telefono" id="telefono" class="form-control mt-2" placeholder="Número Telefónico">
          <input type="email" name="email" id="email" class="form-control mt-2" placeholder="Correo Electrónico">

      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary mt-2" id="llamar">Quiero que me llamen</button>
      </div>
    </div>
  </div>
</div>
<!-- fin Modal formulario -->


  </body>
</html>
