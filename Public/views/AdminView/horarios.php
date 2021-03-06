<?php require_once("./valSesion.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once("../Layout/head.php"); ?>
  <link rel="stylesheet" type="text/css" href="../../css/SmallTable.css">
</head>

<body>
  <?php 
		$link= "servicio";
		require_once("../Layout/adminMenu.php");
	?>
  <div class="container my-4">
    <div class="mx-auto d-block my-4 col-sm-12 col-md-10 col-lg-8">

      <div class="p-1 my-4 fondoUno text-white">
        <h1 class="text-center OpenSans m-1">Horarios de atencion</h1>
      </div>

      <div class="d-flex justify-content-between my-4">
        <input type="text" id="buscar" class="form-control col-sm-12 col-md-5" placeholder="Buscar horario">

        <button type="submit" class="btn fondoDos col-ms-12" data-toggle="modal" data-target="#myModal">
          <i class="fas fa-plus text-white"></i>
        </button>
      </div>

      <div class="table-responsive sombre">
        <table class="table table-hover table-fixed table-striped bg-white">
          <thead class="thead-dark">
            <tr>
              <th style="width: 150px" scope="col">Turno</th>
              <th style="width: 350px" scope="col">Horario</th>
              <th style="width: 210px" scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody id="tbody">

          </tbody>
        </table>
      </div>

    </div>

  </div>

  </div>

  <!-- Comentario: ventana modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-dark">
          <h5 class="modal-title text-white" id="exampleModalLabel">Nuevo Horario</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-group" id="formulario" autocomplete="off">

            <div class="form-group">
              <label for="txtDe">Turno</label>
              <input type="text" id="turno" class="form-control mb-4">
            </div>
            <div class="form-group">
              <label for="txtDe">de</label>
              <input type="time" id="de" class="form-control mb-4">
            </div>
            <div class="form-group">
              <label for="txtDe">a</label>
              <input type="time" id="a" class="form-control mb-4">
            </div>
            <button type="submit" class="btn btn-dark" id="btnGuardar">
              Guardar
            </button>

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Comentario: modificar modal -->
  <div class="modal fade" id="myModalModificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-dark">
          <h5 class="modal-title text-white" id="exampleModalLabel">Modificar Horario</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-group" id="formModificar" autocomplete="off">

            <div class="form-group">
              <label for="txtDe">Turno</label>
              <input type="hidden" id="horarioId">
              <input type="text" id="newTurno" class="form-control mb-4">
            </div>
            <div class="form-group">
              <label for="txtDe">de</label>
              <input type="time" id="txtDe" class="form-control mb-4">
            </div>
            <div class="form-group">
              <label for="txtA">a</label>
              <input type="time" id="txtA" class="form-control mb-4">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-dark" id="btnGuardar">
                Guardar
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="../../js/admin/app.js"></script>
  <script src="../../js/admin/horarios.js"></script>
</body>

</html>