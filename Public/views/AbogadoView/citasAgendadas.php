<?php require_once("./valSesion.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once("../Layout/head.php"); ?>
  <link rel="stylesheet" type="text/css" href="../../css/BigTable.css">
</head>

<body>
  <?php 
    $link = "servicio";
    require_once('../Layout/abogadoMenu.php');
  ?>
  <div class="container my-4">

    <div class="mx-auto d-block my-4 col-sm-12 col-md-12 col-lg-12">

      <div class="p-1 my-4 fondoUno text-white">
        <h1 class="text-center OpenSans m-1">Citas agendadas</h1>
      </div>

      <div class="d-flex justify-content-between my-4">
        <input type="text" id="buscar" class="form-control col-sm-12 col-md-5" placeholder="Buscar">
      </div>

      <div class="table-responsive sombre">
        <table class="table table-hover table-fixed table-striped bg-white">
          <thead class="thead-dark">
            <tr>
              <th style="width: 150px" scope="col">Servicio</th>
              <th style="width: 200px" scope="col">Cliente</th>
              <th style="width: 200px" scope="col">Telefono</th>
              <th style="width: 250px" scope="col">Fecha</th>
              <th style="width: 280px" scope="col">Comentario</th>
            </tr>
          </thead>
          <tbody id="tbody">

          </tbody>
        </table>
      </div>

    </div>

  </div>

  <script src="../../js/abogado/app.js"></script>
  <script src="../../js/abogado/citasAgendadas.js"></script>
</body>

</html>