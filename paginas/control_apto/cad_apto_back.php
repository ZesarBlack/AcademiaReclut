<?php

/**
 *tel_celular
 */
class Aptos
{
  public function obtenerCadetes()
  {
    include '../../requires/conexion.php';
    /*
    $query="SELECT  cad.nombre, cad.a_paterno, cad.a_materno, cad.email, cad.tel_celular, cad.tel_1, cad.tel_2, cad.curp, cad.f_nacimiento ,ef.resultado, em.conclusion FROM  examen_fisico AS ef
    INNER JOIN cadete as cad ON ef.cadete_idCadete = cad.folio
    INNER JOIN exa_medico as em ON cad.folio = em.cadete_id
    WHERE em.conclusion ='Apto' AND ef.resultado='Apto' ";
    */
    //busca los que cumplen la condición (apto médico, apto físico, y maneja)
    $query ="SELECT DISTINCT cad.folio, cad.f_llenado, cad.nombre, cad.a_paterno, cad.a_materno, cad.f_nacimiento, cad.edad_registro, cad.tel_celular, cad.tel_1, cad.tel_2, cad.tipo_ingreso, cad.idCadete, cad.genero, em.conclusion, ef.resultado FROM exa_medico AS em
    INNER JOIN examen_fisico AS ef ON ef.cadete_idCadete = em.cadete_id
    INNER JOIN cadete AS cad ON em.cadete_id = cad.folio WHERE ef.resultado = 'APTO' AND em.conclusion = 'APTO' AND cad.tipo_ingreso LIKE '%Nuevo Ingreso%' AND em.obser ='valoracion actual' ORDER BY cad.f_llenado ASC";
    $respuesta=$conn->query($query);
    //$conn->close();

    while ($aptos=mysqli_fetch_array($respuesta)) {

      $query_llamado="SELECT * FROM llamados_c3 WHERE folio = '$aptos[0]'";
      $respuesta_llamado = $conn->query($query_llamado);
      if ($llamado=mysqli_fetch_array($respuesta_llamado)) {
        // code...
        $r_llamado = $llamado[1];
        $r_observacion = $llamado[2];
      }else {
        $r_llamado = "";
        $r_observacion = "";
      }
      $fecha_nacimiento = date("d-m-Y", strtotime($aptos[5]));
      $fecha_recepcion = date("d-m-Y", strtotime($aptos[1]));
      echo '
      <tr>
        <td>'.$aptos[0].'</td>
        <td>'.$fecha_recepcion.'</td>
        <td>'.$aptos[2].' '.$aptos[3].' '.$aptos[4].'</td>
        <td>'.$fecha_nacimiento.'</td>
        <td>'.$aptos[6].'</td>
        <td>'.$aptos[7].'</td>
        <td>'.$aptos[8].'</td>
        <td>'.$aptos[9].'</td>
        <td>'.$r_llamado.'</td>
        <td>'.$r_observacion.'</td>
        <td>
          <input type="text" name="" id="'.$aptos[11].'id_temp" value="'.$aptos[0].'" readonly hidden>
          <button type="button" class="btn btn-primary" onclick="ontenerId('.$aptos[11].')" data-toggle="modal" data-target="#myModal" name="button">Actualizar</button>
        </button>
        </td>
      </tr>
      ';
        //return $aptos[0];
    }
  $conn->close();
  }
  public function numeroCadetes()
  {
    require '../../requires/conexion.php';
    //numero de los que cumplen con la condicio,
    $numero_res = "SELECT DISTINCT COUNT(*) FROM exa_medico AS em
    INNER JOIN examen_fisico AS ef ON ef.cadete_idCadete = em.cadete_id
    INNER JOIN cadete AS cad ON em.cadete_id = cad.folio
    WHERE ef.resultado = 'APTO' AND em.conclusion = 'APTO' AND cad.tipo_ingreso LIKE '%Nuevo Ingreso%' AND em.obser ='valoracion actual'";
    $num_query = $conn->query($numero_res);

    if ($num = mysqli_fetch_array($num_query)) {
      echo $num[0];
    }
  }
  public function numeroCadeteshombres()
  {
    require '../../requires/conexion.php';
    //numero de los que cumplen con la condicio,
    $numero_res = "SELECT DISTINCT COUNT(*) FROM exa_medico AS em
    INNER JOIN examen_fisico AS ef ON ef.cadete_idCadete = em.cadete_id
    INNER JOIN cadete AS cad ON em.cadete_id = cad.folio
    WHERE  ef.resultado = 'APTO' AND em.conclusion = 'APTO' AND cad.tipo_ingreso LIKE '%Nuevo Ingreso%' AND cad.genero = 'MASCULINO' AND em.obser ='valoracion actual'";
    $num_query=$conn->query($numero_res);

    if ($num = mysqli_fetch_array($num_query)) {
      echo $num[0];
    }
  }
  public function numeroCadetesmujeres()
  {
    require '../../requires/conexion.php';
    //numero de los que cumplen con la condicio,
    $numero_res = "SELECT DISTINCT COUNT(*) FROM exa_medico AS em
    INNER JOIN examen_fisico AS ef ON ef.cadete_idCadete = em.cadete_id
    INNER JOIN cadete AS cad ON em.cadete_id = cad.folio
    WHERE  ef.resultado = 'APTO' AND em.conclusion = 'APTO' AND cad.tipo_ingreso LIKE '%Nuevo Ingreso%' AND cad.genero = 'FEMENINO' AND em.obser ='valoracion actual'";
    $num_query=$conn->query($numero_res);

    if ($num = mysqli_fetch_array($num_query)) {
      echo $num[0];
    }
  }

  public function actualizarLlamado($folio, $resultado, $observacion)
  {
    include '../../requires/conexion.php';
    //comprobar si ya fue llamado antecedentes
    $query_comprobar = "SELECT * FROM llamados_c3 WHERE folio = '$folio'";
    $respuesta_comprobar = $conn->query($query_comprobar);
    if ($comprobar = mysqli_fetch_row($respuesta_comprobar)){
      $query_actualizar = "UPDATE llamados_c3 SET respuesta = '$resultado', observaciones = '$observacion' WHERE folio = '$folio'";
    }else {
      $query_actualizar = "INSERT INTO llamados_c3 (folio, respuesta, observaciones) VALUES ('$folio', '$resultado', '$observacion')";
    }
    echo $query_actualizar;
   $respuesta_actualizar = $conn->query($query_actualizar);
    $conn->close();
  }

  public function axcelAspirantes()
  {
    $i=1;
    include '../../requires/conexion.php';
    $query ="SELECT DISTINCT cad.folio, cad.f_llenado, cad.nombre, cad.a_paterno, cad.a_materno, cad.f_nacimiento, cad.edad_registro, cad.tel_celular, cad.tel_1, cad.tel_2, cad.tipo_ingreso, cad.idCadete, cad.genero, em.conclusion, ef.resultado FROM exa_medico AS em
    INNER JOIN examen_fisico AS ef ON ef.cadete_idCadete = em.cadete_id
    INNER JOIN cadete AS cad ON em.cadete_id = cad.folio WHERE ef.resultado = 'APTO' AND em.conclusion = 'APTO' AND cad.tipo_ingreso LIKE '%Nuevo Ingreso%'  AND em.obser ='valoracion actual'";
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
                ->setCellValue('A1', 'FOLIO DE REGISTRO')
                ->setCellValue('B1', 'FECHA DE RECEPCIÓN DE DOCUMENTOS')
                ->setCellValue('C1', 'NOMBRE COMPLETO')
                ->setCellValue('D1', 'FECHA DE NACIMIENTO')
                ->setCellValue('E1', 'EDAD')
                ->setCellValue('F1', 'CELULAR')
                ->setCellValue('G1', 'TELÉFONO 1')
                ->setCellValue('H1', 'TELÉFONO 2')
                ->setCellValue('I1', 'LLAMADO A EVALUACIÓN')
                ->setCellValue('J1', 'OBSERVACIONES');
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    while ($aptos= mysqli_fetch_array($respuesta)) {
      $query_llamado="SELECT * FROM llamados_c3 WHERE folio = '$aptos[0]'";
      if ($respuesta_llamado = $conn->query($query_llamado)) {
        if ($llamado=mysqli_fetch_array($respuesta_llamado)) {
          // code...
          $r_llamado = $llamado[1];
          $r_observacion = $llamado[2];
        }else {
          $r_llamado = "";
          $r_observacion = "";
        }
            $i=$i+1;
            $objPHPExcel->setActiveSheetIndex(0)
                        ->setCellValue('A'.$i, $aptos[0])
                        ->setCellValue('B'.$i, $aptos[1])
                        ->setCellValue('C'.$i, $aptos[2]." ".$aptos[3]." ".$aptos[4])
                        ->setCellValue('D'.$i, $aptos[5])
                        ->setCellValue('E'.$i, $aptos[6])
                        ->setCellValue('F'.$i, $aptos[7])
                        ->setCellValue('G'.$i, $aptos[8])
                        ->setCellValue('H'.$i, $aptos[9])
                        ->setCellValue('I'.$i, $r_llamado)
                        ->setCellValue('J'.$i, $r_observacion);


      }
    }
    $conn->close();
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
    $objWriter->save(str_replace('.php', '.xlsx', "aspirantes_C3.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }

}

$apto = new Aptos();

if (isset($_POST['id_ll']) && isset($_POST['estado']) && isset($_POST['obs'])) {
  $apto->actualizarLlamado($_POST['id_ll'], $_POST['estado'], $_POST['obs']);
}

 ?>
