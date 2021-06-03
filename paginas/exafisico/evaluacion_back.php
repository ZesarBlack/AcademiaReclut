<?php

class Evaluado{

      public function datosBasicosCad($tipo, $busqueda)
      {
        include '../../requires/conexion.php';
        //$conn->query("SET CHARACTER SET 'utf8'");

//----------------------------------------------
        if ($tipo=="id") {
          // code...
          $query="SELECT folio ,nombre, a_paterno, a_materno, genero, edad_registro, curp, email, idCadete FROM cadete where folio = '$busqueda'";
        }elseif ($tipo=="nombre") {

          $piezas = explode(" ", $busqueda);
          if(sizeof($piezas) == 1){
            $nombre = $piezas[0];
            $query = "SELECT folio ,nombre, a_paterno, a_materno, genero, edad_registro, curp, email, idCadete FROM cadete WHERE nombre like '%$nombre%' or a_paterno like '%$nombre%' or a_materno like '%$nombre%'";
          }else if(sizeof($piezas) == 2){
            $nombre = $piezas[0];
            //$nombre2 = $piezas[0]." ".$piezas[1];
            $paterno = $piezas [1];
            $query = "SELECT folio ,nombre, a_paterno, a_materno, genero, edad_registro, curp, email, idCadete FROM cadete WHERE nombre like '%$nombre%' and a_paterno like '%$paterno%' or (a_paterno like '%$nombre%' and a_materno like '%$paterno%')";
          }else if(sizeof($piezas) == 3){
            $nombre = $piezas[0];
            $paterno = $piezas [1];
            $materno = $piezas[2];
            $nombre2 = $piezas[0]." ".$piezas[1];
            $paterno2 = $piezas[2];
           $query = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion FROM cadete WHERE (nombre like '%$nombre%' and a_paterno like '%$paterno%' and a_materno like '%$materno%') or (a_paterno like '%$nombre%' and a_materno like '%$paterno%' AND  nombre like '%$materno%')";
          }else if(sizeof($piezas) == 4){
            $nombre = $piezas[0];
            $nombre2 = $piezas[0]." ".$piezas[1];
            $paterno = $piezas [1];
            $paterno2 = $piezas[2];
            $materno = $piezas[2];
            $materno2 = $piezas[3];
            $query = "SELECT folio ,nombre, a_paterno, a_materno, genero, edad_registro, curp, email, idCadete FROM cadete WHERE (nombre like '%$nombre2%' and a_paterno like '%$paterno2%' and a_materno like '%$materno2%')";
          }

        }

//----------------------------------------------
        $resultado = $conn->query($query);
        if ($datos=mysqli_fetch_array($resultado)) {
          //echo json_encode($datos);
          //echo "encontrado";
          //echo $query ;
          echo '
          <tr>
	          <td><input type="text" id="id" name="id" size=10 value="'.$datos[8].'" readonly></td>
            <td><input type="text" id="folio" size=8 name="folio" value="'.$datos[0].'" required readonly></td>
            <td><input type="text" id="nombre" name="nombre" size=10 value="'.$datos[1].'" readonly></td>
            <td><input type="text" id="apellidop" name="apellidop" value="'.$datos[2].'" readonly></td>
            <td><input type="text" id="apellidom" name="apellidom" value="'.$datos[3].'" readonly></td>
            <td><input type="text" id="edad" name="edad" value="'.$datos[5].'"  readonly></td>
            <td><input type="text" id="sexo" name="sexo" value="'.$datos[4].'"  readonly></td>
            <td><input type="text" id="curp" name="sexo" value="'.$datos[6].'"  readonly></td>
          </tr>
          ';
        }else {
          //echo $query ;
          //$mensaje="El aspirante no ha sido encontrado";
          //echo  $mensaje;
        }
      }
      public function actualizarEvaluacion()
      {
        include '../../requires/conexion.php';

      }
      public function guardardatos($idcadete, $resmts, $rescal, $flexcm, $flexcal, $abcant, $abcal, $lagcant, $lagcal, $sentcant, $sentcal, $velcant, $velcal, $manejo, $total, $resultado, $nomeva, $promedio, $observacion){
        include '../../requires/conexion.php';
        //$conn->query("SET CHARACTER SET 'utf8'");
        $hoy = date("Y-m-d");
        $consulta= "INSERT INTO examen_fisico(resistencia_mts, resistencia_cal, flexibilidad_cm, flexibilidad_cal, abdominal_cant, abdominal_cal, lagartija_cant, lagartija_cal, sentadilla_cant, sentadilla_cal,velocidad_tpo, velocidad_cal, manejo, total, resultado, instructor,cadete_idCadete, fecha_registro, promedio, observacion) values ('$resmts', '$rescal', '$flexcm' ,'$flexcal', '$abcant', '$abcal', '$lagcant' ,'$lagcal', '$sentcant', '$sentcal','$velcant', '$velcal', '$manejo','$total' , '$resultado', '$nomeva' ,'$idcadete', '$hoy', '$promedio', '$observacion')";

        $resultado= mysqli_query($conn, $consulta);
                    echo $consulta;
                    $conn->close();
      }
  }

$nuevo = new Evaluado();


if (isset($_POST['tipo']) && isset($_POST['busqueda']) && $_POST['busqueda'] !="" && $_POST['tipo'] !="") {
 $nuevo->datosBasicosCad($_POST['tipo'], $_POST['busqueda']);
}

if (isset($_POST['id'])&&
    isset($_POST['resultado'])&&
    isset($_POST['nomeva'])&&
    isset($_POST['resmts'])&&
    isset($_POST['rescal'])&&
    isset($_POST['flexcm'])&&
    isset($_POST['flexcal'])&&
    isset($_POST['abcant'])&&
    isset($_POST['abcal'])&&
    isset($_POST['lagcant'])&&
    isset($_POST['lagcal'])&&
    isset($_POST['sentcant'])&&
    isset($_POST['sentcal'])&&
    isset($_POST['velcant'])&&
    isset($_POST['velcal'])&&
    isset($_POST['manejo'])&&
    isset($_POST['total'])&&
    isset($_POST['promedio']) &&
    isset($_POST['observacion'])
    ) {
      $resmts=$_POST['resmts'];
      $rescal=$_POST['rescal'];
      $flexcm=$_POST['flexcm'];
      $flexcal=$_POST['flexcal'];
      $abcant=$_POST['abcant'];
      $abcal=$_POST['abcal'];
      $lagcant=$_POST['lagcant'];
      $lagcal=$_POST['lagcal'];
      $sentcant=$_POST['sentcant'];
      $sentcal=$_POST['sentcal'];
      $velcant=$_POST['velcant'];
      $velcal=$_POST['velcal'];
      $manejo=$_POST['manejo'];
      $total=$_POST['total'];
      $promedio=$_POST['promedio'];
      $resultado=$_POST['resultado'];
      $nomeva=$_POST['nomeva'];
      $idcadete=$_POST['folio'];
      $observacion=$_POST['observacion'];


      $nuevo-> guardardatos($idcadete, $resmts, $rescal, $flexcm, $flexcal, $abcant, $abcal, $lagcant, $lagcal, $sentcant, $sentcal, $velcant, $velcal,  $manejo , $total, $resultado, $nomeva, $promedio, $observacion);
      header('location: evaluacion.php');
}


    //header("Location: confianza.php");


?>
