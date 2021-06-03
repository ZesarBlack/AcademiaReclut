
<form class="" action="index.html" method="post">

</form>
<?php
/**
 *
 */

class ControlConf
{
  public function obtenerConfianza()
  {
    include '../../requires/conexion.php';
    $query_conf="SELECT * FROM control_conf";
    //$conn->query("SET CHARACTER SET 'utf8'");
    $resultado_conf=$conn->query($query_conf);
    while ($datos=mysqli_fetch_row($resultado_conf)) {
      echo
            "<tr>
               <td>$datos[2]</td>
               <td>$datos[3]</td>
               <td>$datos[4]</td>
               <td>$datos[5]</td>
               <td>$datos[6]</td>
               <td>$datos[7]</td>
               <td>$datos[8]</td>
             </tr>
            ";
    }
  }
  public function actualizarContro($curp, $cuip, $nombre, $oficio, $fecha, $resultado, $oficio_ce, $fecha_resultado)
  {
    include '../../requires/conexion.php';

    $query_r="SELECT n_control FROM control_conf WHERE n_control ='$curp' ";
    $res = $conn->query($query_r);

    if (empty($d=mysqli_fetch_row($res))) {
      // code...
      $query_act="INSERT INTO control_conf(n_control, CUIP, nombre, n_oficio, progra_eva, result_eva, n_oce, fecha_emision_result) values ('$curp',' $cuip', '$nombre', '$oficio', '$fecha', '$resultado', '$oficio_ce', '$fecha_resultado')";
    }else {
      $query_act="UPDATE control_conf SET n_oficio ='$oficio' , progra_eva = '$fecha', result_eva = '$resultado', n_oce ='$oficio_ce', fecha_emision_result= '$fecha_resultado'";
    }

    $conn->query($query_act);
    //echo $query_act;
    $conn->close();
    header('location: solconfi.php');
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
      /*
      echo "<h1>Elemento</h1>
      <thead>
        <th>Número de control</th>
        <th>Nombre</th>
        <th>CUIP</th>
      </thead>
      ";*/

      echo '
      <div class="row" style="margin-top:2em;">
          <div class="col-sm-1"></div>
          <div class="col-sm-3">CUIP:</div>
          <div class="col-sm-7"><input id="cuip" name="cuip" value="'.$policia->{'cuip'}.'" type="text" style="font-size: 12pt;
          font-weight: bold; color: red; text-align: center;" maxlength="18" required></div>
      </div>
      <div class="row" style="margin-top:2em;">
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Nombre completo:</div>
          <div class="col-sm-7"><input id="nombre" name="nombre" value="'.$policia->{'nombre'}.'" type="text" style="font-size: 12pt;
          font-weight: bold; color: red; text-align: center;" maxlength="18" required></div>
      </div>
      ';

      /*
            "<tr>
               <td>".$policia->{'no_control'}."</td>
               <td>".$policia->{'nombre'}."</td>
               <td>".$policia->{'cuip'}."</td>
            </tr>";
*/
    }
  }
}

$control = new ControlConf();

if (isset($_POST["curp"])&&isset($_POST["fecha"])) {
  //echo "ok";
  //$_POST['fecha'];
  //cuip $_POST['cuip'];
  //nombre $_POST['nombre'];
  //oficio $_POST['oficio'];
  //resultado $_POST['resultado'];
  //fecha_resultado $_POST['oficio_ce'];
  $control->actualizarContro($_POST["curp"], $_POST['cuip'], $_POST['nombre'], $_POST['oficio'], $_POST["fecha"],$_POST['resultado'], $_POST['oficio_ce'],$_POST['fecha_resultado']);
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
