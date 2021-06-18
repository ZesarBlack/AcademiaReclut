<?php

class Psicometrico
{
  public function buscarElemento($busqueda)
  {
    require '../../requires/conexion.php';
    $query_buscar="SELECT folio, a_paterno, a_materno, nombre, curp, tel_celular FROM cadete WHERE folio = '$busqueda'";
    $respuesta_buscar = $conn->query($query_buscar);
    if ($elemento=mysqli_fetch_array($respuesta_buscar)) {
      $query_resultado="SELECT * FROM examen_psicometrico WHERE folio = '$elemento[0]'";
      //echo $query_resultado;
      $respuesta_resultado= $conn->query($query_resultado);
      if ($resultado = mysqli_fetch_array($respuesta_resultado)) {
        $apt = $resultado[1];
      }else {
        $apt = "Sin evaluar";
      }
      echo '
        <tr>
          <td>'.utf8_decode($elemento[1])." ".utf8_decode($elemento[2])." ".utf8_decode($elemento[3]).'</td>
          <td>'.$elemento[4].'</td>
          <td>'.$elemento[5].'</td>
          <td>'.$elemento[0].'</td>
          <td>'.$apt.'</td>
          <td>
            <select class="form-control" id="resultado" onchange="guardarResultado()" name="">
             <option selected="selected">Resultado</option>
             <option value="apto">apto</option>
             <option value="no apto">no apto</option>
            </select>
          </td>
        </tr>
      ';
    }else {
      echo "No hay resultados";
    }
    $conn->close();
  }
  public function registroResultado($folio, $resultado)
  {
    require '../../requires/conexion.php';
    $query_verificar ="SELECT COUNT(*) FROM examen_psicometrico WHERE folio = '$folio'";
    $resultado_verificar =  $conn->query($query_verificar);
    $verificar=mysqli_fetch_array($resultado_verificar);
    if ($verificar[0] < 1) {
      $query_registrar ="INSERT INTO examen_psicometrico (resultado, folio) VALUES ('$resultado', '$folio')";
    }else {
      $query_registrar ="UPDATE examen_psicometrico SET resultado = '$resultado' WHERE folio = '$folio'";
    }
    $conn->query($query_registrar);
    //echo $query_registrar;
  }
}

$psicometrico = new Psicometrico();

if (isset($_POST['folio'])) {
$psicometrico->buscarElemento($_POST['folio']);
}

if (isset($_POST['busqueda']) && isset($_POST['resultado'])) {
  $psicometrico->registroResultado($_POST['busqueda'], $_POST['resultado']);
  //echo "hola desde el back de guardar";
}
 ?>
