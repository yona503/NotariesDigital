<?php 
require_once("../../Config/config.php");
require_once("../../Conection/conection.php");
require_once("../Model/modelFather.php");

class BuscarServicio extends ModelFather
{
  public $resultado;
  private $datos;

  public function RecibirDatos($datos)
  {
    $this->datos = $datos;
    $this->Accion();
  }

  private function Accion()
  {
    switch ($this->datos['accion']) {
      case 'buscar':
        $this->BuscarServicios();
        break;
      
      case 'mostrar':
        $this->MostrarServicios();
        break;
    }
  }

  private function MostrarServicios()
  {
    $sql = "SELECT servicios.nom_servicio, categorias.categoria, servicios.des_servicio FROM categorias INNER JOIN servicios on categorias.categoria_id=servicios.categoria_id";

    $this->resultado = $this->Read($sql);
  }

  private function BuscarServicios()
  {
    # code...
    $sql = "SELECT servicios.nom_servicio, categorias.categoria, servicios.des_servicio FROM categorias INNER JOIN servicios on categorias.categoria_id=servicios.categoria_id WHERE servicios.nom_servicio LIKE '%". $this->datos['sql'] . "%' OR categorias.categoria LIKE '%". $this->datos['sql'] . "%'";

    $this->resultado = $this->Read($sql);
  }

}

if(isset($_POST['datos']))
{
  $BuscarServicio = new BuscarServicio();
  $BuscarServicio->RecibirDatos($_POST['datos']);
  print_r(json_encode($BuscarServicio->resultado));
// print_r($_POST['datos']);
}

?>