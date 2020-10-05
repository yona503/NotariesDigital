<nav class="navbar navbar-expand-lg navbar-dark fondo">
  <a class="navbar-brand Broadway text-white" href="#">NOTARIES DIGITAL</a>
  
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <i class="fas fa-bars text-white"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php echo $link == "index"? "active": ''; ?>">
        <a class="nav-link OpenSans" href="index.php">Inicio</a>
      </li>
      <li class="nav-item <?php echo $link == "servicios"? "active": ''; ?>">
        <a class="nav-link OpenSans" href="servicios.php">Servicios</a>
      </li>
      <li class="nav-item <?php echo $link == "registrate"? "active": ''; ?>">
        <a class="nav-link OpenSans" href="registrate.php">Registrate</a>
      </li>
      <li class="nav-item <?php echo $link == "login"? "active": ''; ?>">
        <a class="nav-link OpenSans" href="login.php">Iniciar Sesion</a>
      </li>
    </ul>
  </div>
</nav>