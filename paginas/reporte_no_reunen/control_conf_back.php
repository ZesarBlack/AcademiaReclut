<?php
/**
 *
 */

class ControlConf
{
  public function obtenerConfianza()
  {

    $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );

    include '../../requires/conexion.php';
    $query_conf="SELECT * FROM no_reunen";
    //$conn->query("SET CHARACTER SET 'utf8'");
    $resultado_conf=$conn->query($query_conf);
    while ($datos=mysqli_fetch_row($resultado_conf)) {

    $response = file_get_contents("http://172.18.0.28/swebAcademia/?pass=c3s4RM494p&user=cesar&control=".$datos[2], true, stream_context_create($arrContextOptions));
    $policia = json_decode($response);

      echo
            "<tr>
               <td>".$policia->{'no_control'}."</td>
               <td>".$policia->{'nombre'}."</td>
               <td>".$policia->{'cuip'}."</td>
               <td>".$policia->{'PuestoRNPSP'}."</td>
               <td>$datos[0]</td>
               <td>$datos[1]</td>
             </tr>
            ";
    }
  }

  public function actualizarCorte($control, $estatus, $observacion)
  {
    include '../../requires/conexion.php';
    $query_act="INSERT INTO reporte_no_reunen(estatus_cup, observaciones, num_control) values ('$estatus', '$observacion', '$control')";
    $conn->query($query_act);
    header('location: reporte_corte.php');
    echo $query_act;
  }

  public function obtenerPersonal($dat1)
  {
    $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );
    $response = file_get_contents("http://172.18.0.28/swebAcademia/?pass=c3s4RM494p&user=cesar&control=".$dat1, true, stream_context_create($arrContextOptions));
    $policia = json_decode($response);
    //echo $policia;
    if (!empty($policia)) {
      echo "<h1>Elemento</h1>
      <thead>
        <th>Número de control</th>
        <th>Nombre</th>
        <th>CUIP</th>
        <th>Puesto</th>
      </thead>
      ";
      echo
            "<tr>
               <td>".$policia->{'no_control'}."</td>
               <td>".$policia->{'nombre'}."</td>
               <td>".$policia->{'cuip'}."</td>
               <td>".$policia->{'PuestoRNPSP'}."</td>
            </tr>";

    }
  }
}

$control = new ControlConf();

if (isset($_POST["control"]) && isset($_POST["estatus"]) && isset($_POST["observacion"])) {
  //echo "ok";
  $control->actualizarCorte($_POST["control"],$_POST["estatus"], $_POST["observacion"]);
}

if (isset($_GET["obtener"])) {
  //echo "string";
  $control->obtenerConfianza();
}

if (isset($_POST["curp"])) {
  //echo "string";
  $control->obtenerPersonal($_POST["curp"]);
}
 ?>
