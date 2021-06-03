<?php
/**
 *
 */
class Formacion
{
  public function registrarInformacion($id_cadete, $id_curso)
  {
    require '../../requires/conexion.php';
    $queryfr="INSERT INTO cadete_tiene_cursos (cadete_idCadete ,cursos_idcurso) VALUES ($id_cadete, $id_curso)";
    $conn->query($queryfr);
    $conn->close();
  }
  public function verInformacioncurso($id)
  {
    require '../../requires/conexion.php';
    $queryfv = "SELECT * FROM cursos WHERE idcurso ='$id'";
    $result = $conn->query($queryfv);
    $datos = mysqli_fetch_row($result);
    $conn->close();
    return $datos;
  }

  public function verCadetes($curso)
  {
    require '../../requires/conexion.php';
    $query_alumno="SELECT c.nombre, c.a_paterno, c.a_materno , edad_registro, curp, folio, tel_celular, email FROM cadete as c INNER JOIN cadete_tiene_cursos as ctc ON c.idCadete = ctc.cadete_idCadete INNER JOIN cursos as cu ON ctc.cursos_idcurso = cu.idcurso WHERE cursos_idcurso = $curso";
    $alumno = $conn->query($query_alumno);
    while ($datos = mysqli_fetch_row($alumno)) {
      echo '
      <tr>
        <td>'.$datos[0]." ".$datos[1]." ".$datos[0].'</td>
        <td>'.$datos[3].'</td>
        <td>'.$datos[4].'</td>
        <td>'.$datos[5].'</td>
        <td>'.$datos[6].'</td>
        <td>'.$datos[7].'</td>
      </tr>
      ';
    }
     $conn->close();
  }

  public function BuscarCursos()
  {
    require '../../requires/conexion.php';
    $queryfc = "SELECT * FROM cursos WHERE nombre like '%formacion%' ";
    $respuesta = $conn->query($queryfc);
    while ($cursos = mysqli_fetch_row($respuesta)) {
      echo  '<tr>
              <td><h2>'.$cursos[3].'</h2></td>
              <td><h2>'.$cursos[4].'</h2></td>
              <td><h2>'.$cursos[5].'</h2></td>
              <td><h2>'.$cursos[6].'</h2></td>
              <td><h2>'.$cursos[11].'</h2></td>
              <td><h2>'.$cursos[12].'</h2></td>
              <td><h2>'.$cursos[13].'</h2></td>
              <td>
              <form class="" action="formacion_registro.php" method="post">
                  <input type="text" name="id" value="'.$cursos[0].'" hidden readonly>
                  <button type="submit" class="btn btn-primary" name="button">Agregar Cadetes</button>
              </form>
              </td>
            <tr>
           ';
    }
    $conn->close();
  }

  public function buscarAspirante($busqueda)
  {
    require '../../requires/conexion.php';
    //$queryfb="SELECT * FROM cadete where nombre like '%$nombre%'";
      $piezas = explode(" ", $busqueda);
      if(sizeof($piezas) == 1){
        $nombre = $piezas[0];
        $queryfb = "SELECT  nombre, a_paterno, a_materno, tel_celular, folio, idCadete FROM cadete WHERE nombre like '%$nombre%' or a_paterno like '%$nombre%' ";
      }else if(sizeof($piezas) == 2){
        $nombre = $piezas[0];
        $paterno = $piezas [1];
        $queryfb = "SELECT  nombre, a_paterno, a_materno, tel_celular, folio, idCadete FROM cadete WHERE (nombre like '%$nombre%' and a_paterno like '%$paterno%') or (a_paterno like '%$nombre%' and a_materno like '%$paterno%') "; //nombre like '%$nombre2%'
      }else if(sizeof($piezas) == 3){
        $nombre = $piezas[0];
        $paterno = $piezas[1];
        $materno = $piezas[2];
        $queryfb = "SELECT  nombre, a_paterno, a_materno, tel_celular, folio, idCadete FROM cadete WHERE (nombre like '%$nombre%' and a_paterno like '%$paterno%' and a_materno like '%$materno%') or (a_paterno like '%$nombre%' and a_materno like '%$paterno%' AND  nombre like '%$materno%')";
      }else if(sizeof($piezas) == 4){
        $nombre = $piezas[0];
        $nombre2 = $piezas[0]." ".$piezas[1];
        $paterno = $piezas [1];
        $paterno2 = $piezas[2];
        $materno = $piezas[2];
        $materno2 = $piezas[3];
        $queryfb = "SELECT  nombre, a_paterno, a_materno, tel_celular, folio, idCadete FROM cadete WHERE (nombre like '%$nombre2%' and a_paterno like '%$paterno2%' and a_materno like '%$materno2%')";
      }

    $resultado = $conn->query($queryfb);
    $respuesta = mysqli_fetch_row($resultado);
    if ($respuesta) {
      echo  '<tr>
              <td>
              <input type="text" name="id_cadete" value="'.$respuesta[5].'" hidden>
              </td>
              <td><h2>'.$respuesta[0].'</h2></td>
              <td><h2>'.$respuesta[1].'</h2></td>
              <td><h2>'.$respuesta[2].'</h2></td>
              <td><h2>'.$respuesta[3].'</h2></td>
              <td><h2>'.$respuesta[4].'</h2></td>
            <tr>
           ';
    }else {
      echo "<h2>No existe el cadete</h2>";
    }
  }
}

$formacion = new Formacion();


if (isset($_POST['nombre'])) {
  $formacion->buscarAspirante($_POST['nombre']);
}

if (isset($_POST['id_cadete']) && isset($_POST['id_curso'])) {
  //echo $_POST['id_cadete'];
  //echo "<br>";
  //echo $_POST['id_curso'];
  $formacion->registrarInformacion($_POST['id_cadete'], $_POST['id_curso']);
  header('Location:formacion_registro.php?curso='.$_POST['id_curso']);
}
 ?>
