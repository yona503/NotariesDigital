<?php 
require_once("../../Config/config.php");
require_once("../../Conection/conection.php");
require_once("../Model/modelFather.php");

class AgendarCita extends ModelFather
{
  public $resultado;
  private $datos;
  private $query = false;

  public function RecibirDatos($datos)
  {
    $this->datos = $datos;
    $this->Accion();
  }

  private function Accion()
  {
    switch ($this->datos['accion']) {
      case 'mostrar':
        $this->query = true;
        $this->Mostrar();
        break;
              
      case 'cancelar':
        $this->query = true;
        $this->Cancelar();
        break;
    }
  }

  private function Mostrar()
  {
    if ($this->query == true) {
      session_start();
      $sql = "SELECT abogados.abogado_id FROM abogados WHERE abogados.usuario_id = '".$_SESSION['USER_ID']."'";
      $resultSQL = $this->Read($sql);

      $sql = "SELECT agendar_cita.cita_id, servicios.nom_servicio, clientes.nombres, clientes.telefono, agendar_cita.fecha, horarios.turno, horarios.horario, agendar_cita.comentario FROM abogados INNER JOIN agendar_cita ON abogados.abogado_id=agendar_cita.abogado_id INNER JOIN servicios ON agendar_cita.servicio_id=servicios.servicios_id INNER JOIN horarios ON agendar_cita.horario_id=horarios.horario_id INNER JOIN clientes ON agendar_cita.cliente_id=clientes.cliente_id WHERE agendar_cita.abogado_id = '".$resultSQL[0]['abogado_id']."' AND agendar_cita.estado_cita = '1'";

      $this->PrintJSON($this->Read($sql));
    }
  }

  private function Cancelar()
  {
    if ($this->query == true) {
      session_start();
      $sql = "UPDATE `agendar_cita` SET `estado_cita`='2' WHERE `cita_id`='".$this->datos['citaId']."'";

      if ($this->Query($sql) == true) {
        $this->PrintJSON(1);
      } else {
        $this->PrintJSON(0);
      }

      $this->query = false;
    }
  }

  private function PrintJSON($stringJson) {
    header('Content-Type: application/json; charset=utf-8');
    $this->resultado = json_encode($stringJson);
  }
}

$agendarCita = new AgendarCita();

if (isset($_POST['datos'])) {
  $agendarCita->RecibirDatos($_POST['datos']);
  echo $agendarCita->resultado;
}
?>