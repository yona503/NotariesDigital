<?php require_once("./valSesion.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once("../Layout/head.php"); ?>
  <link rel="stylesheet" type="text/css" href="../../css/BigTable.css">
</head>

<body>
  <?php 
		$link= "cliente";
		require_once("../Layout/adminMenu.php");
	?>
  <div class="container my-4">

    <div class="mx-auto d-block my-4 col-sm-12">

      <div class="p-1 my-4 fondoUno text-white">
        <h1 class="text-center OpenSans m-1">Lista de clientes</h1>
      </div>

      <div class="form-group  mr-auto">
        <input type="text" id="buscar" class="form-control col-sm-12 col-md-6" placeholder="Buscar">
      </div>

      <div class="table-responsive sombre">
        <table class="table table-hover table-fixed table-striped bg-white">
          <thead class="thead-dark">
            <tr>
              <th style="width: 100px" scope="col">Foto</th>
              <th style="width: 300px" scope="col">Nombre</th>
              <th style="width: 150px" scope="col">Telefono</th>
              <th style="width: 325px" scope="col">Correo</th>
              <th style="width: 200px" scope="col">Opcione</th>
            </tr>
          </thead>
          <tbody id="tbody">

          </tbody>
        </table>
      </div>

    </div>

  </div>

  <script src="../../js/admin/app.js"></script>
  <script src="../../js/admin/listClientes.js"></script>
</body>

</html>