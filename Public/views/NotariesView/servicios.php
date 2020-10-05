<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- alertas -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notaries Digital</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link rel="icon" href="Public/img/IncoND.png">
</head>

<body>
  <?php 
    $link = "servicios";
    require_once("../Layout/servicios.php"); 
  ?>

  <div class="container">
    <div class="">
      <h1 class="h1 text-center text-dark OpenSans p-1 m-2">Nuestros Servicios</h1>
      <div class="col-sm-12">
        <div class="row justify-content-between p-1">
          <div class="card sombre col-sm-5 my-2" style="width: 18rem;">
            <img src="../../img/poderes.svg" class="card-img-top m-2" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Poderes</h5>
              <!-- <p class="card-text">
                Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Iusto asperiores rem nostrum, dolores est alias natus molestiae rerum ea consequatur doloribus totam, illo sint quo eum. Praesentium magnam necessitatibus, non.
              </p> -->
            </div>
          </div>

          <div class="card sombre col-sm-5 my-2" style="width: 18rem;">
            <img src="../../img/HablaConTuAbogado.svg" class="card-img-top m-2" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Habla con tu abogado</h5>
              <!-- <p class="card-text">
                Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Iusto asperiores rem nostrum, dolores est alias natus molestiae rerum ea consequatur doloribus totam, illo sint quo eum. Praesentium magnam necessitatibus, non.
              </p> -->
            </div>
          </div>
        </div>

        <div class="row justify-content-between p-1">   
          <div class="card sombre col-sm-5 my-2 mb-2" style="width: 18rem;">
            <img src="../../img/sociedad.svg" class="card-img-top m-2" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Sociedades</h5>
              <!-- <p class="card-text">
                Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Iusto asperiores rem nostrum, dolores est alias natus molestiae rerum ea consequatur doloribus totam, illo sint quo eum. Praesentium magnam necessitatibus, non.
              </p> -->
            </div>
          </div>

          <div class="card sombre col-sm-5 my-2  mb-2" style="width: 18rem;">
            <img src="../../img/contrato.svg" class="card-img-top m-2" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Contratos</h5>
              <!-- <p class="card-text">
                  Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Iusto asperiores rem nostrum, dolores est alias natus molestiae rerum ea consequatur doloribus totam, illo sint quo eum. Praesentium magnam necessitatibus, non.
                </p> -->
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  </div>

  <?php require_once("../Layout/footer.php") ?>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="Public/js/jquery-3.4.1.min.js"></script>
</body>

</html>