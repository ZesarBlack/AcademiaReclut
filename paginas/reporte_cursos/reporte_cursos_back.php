<?php
/**
 *
 */
class Reportecursos
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
    $query_alumno="SELECT c.nombre, c.a_paterno, c.a_materno , edad_registro, curp, folio, tel_celular, email, ctc.cursos_idcurso FROM cadete as c INNER JOIN cadete_tiene_cursos as ctc ON c.idCadete = ctc.cadete_idCadete INNER JOIN cursos as cu ON ctc.cursos_idcurso = cu.idcurso WHERE cursos_idcurso = $curso";
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
                  <button type="button" onclick="reporteCurso('.$cursos[0].')" class="btn btn-primary" name="button">Lista de registrados al curso</button>
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

  public function excelCursos()
  {
    $i=1;
    include '../../requires/conexion.php';
    $query="SELECT c.folio ,c.nombre, c.a_paterno, c.a_materno , c.curp , cursos_idcurso, cu.nombre, cu.generacion, cu.grupo, cu.periodo , calificacion FROM cadete as c INNER JOIN cadete_tiene_cursos as ctc ON c.idCadete = ctc.cadete_idCadete INNER JOIN cursos as cu ON ctc.cursos_idcurso = cu.idcurso WHERE cu.nombre LIKE 'Formacion inicial' OR cu.nombre LIKE 'FORMACION INICIAL'  ";

    $respuesta=$conn->query($query);

    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
    /** Include PHPExcel */
    require 'PHPExcel/Classes/PHPExcel.php';
    $objPHPExcel = new PHPExcel();
    // Set document properties
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    //$objPHPExcel->getActiveSheet()->getStyle('A8')->getAlignment()->setWrapText(true);
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    $objPHPExcel->getProperties()->setCreator("Academia de Policia Municipal")
                   ->setTitle("C3");

    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    // Add some data
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'Folio de registro')
                ->setCellValue('B1', 'Nombre del cadete')
                ->setCellValue('C1', 'CURP')
                ->setCellValue('D1', 'ID del curso')
                ->setCellValue('E1', 'Nombre del curso')
                ->setCellValue('F1', 'Generación')
                ->setCellValue('G1', 'Grupo')
                ->setCellValue('H1', 'Periodo')
                ->setCellValue('I1', 'Calificación Final');
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    while ($aptos=mysqli_fetch_array($respuesta)) {
      if ($aptos[10] == "") {
        $calf="Calificación sin asignar";
      }else {
        $calf = $aptos[10];
      }
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $aptos[0])
                      ->setCellValue('B'.$i, $aptos[1]." ".$aptos[2]." ".$aptos[3])
                      ->setCellValue('C'.$i, $aptos[4])
                      ->setCellValue('D'.$i, $aptos[5])
                      ->setCellValue('E'.$i, $aptos[6])
                      ->setCellValue('F'.$i, $aptos[7])
                      ->setCellValue('G'.$i, $aptos[8])
                      ->setCellValue('H'.$i, $aptos[9])
                      ->setCellValue('I'.$i, $calf);


    }
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(25);
    // Save Excel 2007 file
    //echo date('H:i:s') , " Write to Excel2007 format" , EOL;
    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(str_replace('.php', '.xlsx', "Reporte_cursos.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }
///----------------------------------------------------------------------reporte
  public function excelCurso($id)
  {
    $i=1;
    include '../../requires/conexion.php';
    $query="SELECT c.folio ,c.nombre, c.a_paterno, c.a_materno , c.curp , cursos_idcurso, cu.nombre, cu.generacion, cu.grupo, cu.periodo , calificacion FROM cadete as c INNER JOIN cadete_tiene_cursos as ctc ON c.idCadete = ctc.cadete_idCadete INNER JOIN cursos as cu ON ctc.cursos_idcurso = cu.idcurso WHERE ctc.cursos_idcurso LIKE '$id'";

    $respuesta=$conn->query($query);

    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
    /** Include PHPExcel */
    require 'PHPExcel/Classes/PHPExcel.php';
    $objPHPExcel = new PHPExcel();
    // Set document properties
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    //$objPHPExcel->getActiveSheet()->getStyle('A8')->getAlignment()->setWrapText(true);
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    $objPHPExcel->getProperties()->setCreator("Academia de Policia Municipal")
                   ->setTitle("C3");

    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    // Add some data
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'Folio de registro')
                ->setCellValue('B1', 'Nombre del cadete')
                ->setCellValue('C1', 'CURP')
                ->setCellValue('D1', 'ID del curso')
                ->setCellValue('E1', 'Nombre del curso')
                ->setCellValue('F1', 'Generación')
                ->setCellValue('G1', 'Grupo')
                ->setCellValue('H1', 'Periodo')
                ->setCellValue('I1', 'Calificación Final');
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    while ($aptos=mysqli_fetch_array($respuesta)) {
      if ($aptos[10] == "") {
        $calf="Calificación sin asignar";
      }else {
        $calf = $aptos[10];
      }
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $aptos[0])
                      ->setCellValue('B'.$i, $aptos[1]." ".$aptos[2]." ".$aptos[3])
                      ->setCellValue('C'.$i, $aptos[4])
                      ->setCellValue('D'.$i, $aptos[5])
                      ->setCellValue('E'.$i, $aptos[6])
                      ->setCellValue('F'.$i, $aptos[7])
                      ->setCellValue('G'.$i, $aptos[8])
                      ->setCellValue('H'.$i, $aptos[9])
                      ->setCellValue('I'.$i, $calf);


    }
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(25);
    // Save Excel 2007 file
    //echo date('H:i:s') , " Write to Excel2007 format" , EOL;
    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(str_replace('.php', '.xlsx', "Reporte_curso.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
    echo  1;
  }

}

$reporte = new Reportecursos();


if (isset($_POST['nombre'])) {
  $reporte->buscarAspirante($_POST['nombre']);
}

if (isset($_POST['idc']) && $_POST['idc'] != "") {
  //echo "el curso es: ".$_POST['idc'];
  $reporte->excelCurso($_POST['idc']);

}
/*
if (isset($_POST['id_cadete']) && isset($_POST['id_curso'])) {
  $reporte->registrarInformacion($_POST['id_cadete'], $_POST['id_curso']);
  header('Location:formacion_registro.php?curso='.$_POST['id_curso']);
}
*/
 ?>
