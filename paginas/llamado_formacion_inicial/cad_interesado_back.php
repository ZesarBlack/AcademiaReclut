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
    $query_verificar ="SELECT * FROM  control_conf WHERE result_eva = 'APROBADO'";
    $respuesta_verificar = $conn->query($query_verificar);
    while ($datos = mysqli_fetch_row($respuesta_verificar)){

       $query_interesados = "SELECT DISTINCT folio, f_llenado, nombre, a_paterno, a_materno, f_nacimiento,edad_registro, tel_celular, tel_1, tel_2, email, idCadete FROM cadete WHERE folio = '$datos[1]' AND tipo_ingreso = 'Nuevo Ingreso'";
       $respuesta_interesados = $conn->query($query_interesados);

      if ($interasados = mysqli_fetch_row($respuesta_interesados)) {

        $fecha_nacimiento = date("d-m-Y", strtotime($interasados[5]));
        $fecha_recepcion = date("d-m-Y", strtotime($interasados[1]));

        $query_res_formacion ="SELECT * FROM llamados_formacion_inicial WHERE folio = '$interasados[0]'";
        $respuesta_formacion = $conn->query($query_res_formacion);
        if ($formacion = mysqli_fetch_array($respuesta_formacion)) {
          // code...
          echo '
          <tr>
            <td>'.$interasados[0].'</td>
            <td>'.$fecha_recepcion.'</td>
            <td>'.$interasados[2].' '.$interasados[3].' '.$interasados[4].'</td>
            <td>'.$fecha_nacimiento.'</td>
            <td>'.$interasados[6].'</td>
            <td>'.$interasados[7].'</td>
            <td>'.$interasados[8].'</td>
            <td>'.$interasados[9].'</td>
            <td>'.$interasados[10].'</td>
            <td>'.$formacion[1].'</td>
            <td>'.$formacion[2].'</td>
            <td>
            <input type="text" name="" id="'.$interasados[11].'id_temp" value="'.$interasados[0].'" readonly hidden>
            <button type="button" class="btn btn-primary" onclick="ontenerId('.$interasados[11].')" data-toggle="modal" data-target="#myModal" name="button">Actualizar</button>
            </button>
            </td>
          </tr>
          ';
        }else {
          echo '
          <tr>
            <td>'.$interasados[0].'</td>
            <td>'.$fecha_recepcion.'</td>
            <td>'.$interasados[2].' '.$interasados[3].' '.$interasados[4].'</td>
            <td>'.$fecha_nacimiento.'</td>
            <td>'.$interasados[6].'</td>
            <td>'.$interasados[7].'</td>
            <td>'.$interasados[8].'</td>
            <td>'.$interasados[9].'</td>
            <td>'.$interasados[10].'</td>
            <td></td>
            <td></td>
            <td>
            <input type="text" name="" id="'.$interasados[11].'id_temp" value="'.$interasados[0].'" readonly hidden>
            <button type="button" class="btn btn-primary" onclick="ontenerId('.$interasados[11].')" data-toggle="modal" data-target="#myModal" name="button">Actualizar</button>
            </button>
            </td>
          </tr>
          ';
        }
      }
       //return $interasados[0];
    }
  $conn->close();
  }

  public function obtenerInfoc3($id_c3)
  {
    require '../../requires/conexion.php';
    $query_info_c3="SELECT * FROM llamados_formacion_inicial WHERE folio = '$id_c3'";
    $respuesta_info_c3 = $conn->query($query_info_c3);
    if ($info_c3 = mysqli_fetch_row($respuesta_info_c3)) {
      echo json_encode($info_c3);
    }
    //echo $id_c3;
    $conn->close();
  }

  public function actualizarLlamado($folio, $resultado, $observacion)
  {
    include '../../requires/conexion.php';
    //comprobar si ya fue llamado antecedentes
    $query_comprobar = "SELECT * FROM llamados_formacion_inicial WHERE folio = '$folio'";
    $respuesta_comprobar = $conn->query($query_comprobar);
    if ($comprobar = mysqli_fetch_row($respuesta_comprobar)){
      $query_actualizar = "UPDATE llamados_formacion_inicial SET respuesta = '$resultado', observaciones = '$observacion' WHERE folio = '$folio'";
    }else {
      $query_actualizar = "INSERT INTO llamados_formacion_inicial (folio, respuesta, observaciones) VALUES ('$folio', '$resultado', '$observacion')";
    }
    echo $query_actualizar;
   $respuesta_actualizar = $conn->query($query_actualizar);
    $conn->close();
  }

  public function numeroCadetes()
  {
    require '../../requires/conexion.php';
    //numero de los que cumplen con la condicio,
    /*
    $numero_res = "SELECT DISTINCT COUNT(*) FROM exa_medico AS em
    INNER JOIN examen_fisico AS ef ON ef.cadete_idCadete = em.cadete_id
    INNER JOIN cadete AS cad ON em.cadete_id = cad.folio
    WHERE em.conclusion LIKE'%Apto%' AND ef.resultado LIKE '%Apto%' AND cad.tipo_ingreso LIKE '%Nuevo Ingreso%'";
    */
    $numero_res ="SELECT COUNT(*) FROM  control_conf WHERE result_eva = 'APROBADO'";

    $num_query=$conn->query($numero_res);

    if ($num = mysqli_fetch_array($num_query)) {
      echo $num[0];
    }
  }

  public function axcelAspirantes()
  {
    $i=1;
    include '../../requires/conexion.php';
    /*
    $query ="SELECT DISTINCT cad.folio, cad.f_llenado, cad.nombre, paterno, materno, f_nacimiento,cad.edad_registro, cad.tel_celular, cad.tel_1, cad.tel_2, cad.tipo_ingreso FROM exa_medico AS em
    INNER JOIN examen_fisico AS ef ON ef.cadete_idCadete = em.cadete_id
    INNER JOIN cadete AS cad ON em.cadete_id = cad.folio
    WHERE em.conclusion ='Apto' AND ef.resultado='Apto' AND cad.tipo_ingreso LIKE '%Nuevo Ingreso%'";
    */
//-----------------------------------------------------------------------------------------------------
/*
$query_verificar ="SELECT * FROM control_conf";
$respuesta_verificar = $conn->query($query_verificar);
while ($datos = mysqli_fetch_row($respuesta_verificar)){
}
*/
//-----------------------------------------------------------------------------------------------------
    //$respuesta=$conn->query($query);
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
                ->setCellValue('B1', 'FECHA DE RECEPCIÃ“N DE DOCUMENTOS')
                ->setCellValue('C1', 'NOMBRE COMPLETO	')
                ->setCellValue('D1', 'FECHA DE NACIMIENTO	')
                ->setCellValue('E1', 'EDAD')
                ->setCellValue('F1', 'CELULAR')
                ->setCellValue('G1', 'TELÃ‰FONO 1')
                ->setCellValue('H1', 'TELÃ‰FONO 2')
                ->setCellValue('I1', 'EMAIL')
                ->setCellValue('J1', 'LLAMADO A FORMACIÃ“N INICIAL')
                ->setCellValue('K1', 'OBSERVACIONES');
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $query_verificar ="SELECT * FROM  control_conf WHERE result_eva = 'APROBADO'";
    $respuesta_verificar = $conn->query($query_verificar);
    while ($datos = mysqli_fetch_row($respuesta_verificar)){

       $query_interesados = "SELECT DISTINCT folio, f_llenado, nombre, a_paterno, a_materno, f_nacimiento,edad_registro, tel_celular, tel_1, tel_2, email, idCadete FROM cadete WHERE folio = '$datos[1]' AND tipo_ingreso = 'Nuevo Ingreso'";
       $respuesta_interesados = $conn->query($query_interesados);

      if ($interasados = mysqli_fetch_row($respuesta_interesados)) {

        $fecha_nacimiento = date("d-m-Y", strtotime($interasados[5]));
        $fecha_recepcion = date("d-m-Y", strtotime($interasados[1]));

        $query_res_formacion ="SELECT * FROM llamados_formacion_inicial WHERE folio = '$interasados[0]'";
        $respuesta_formacion = $conn->query($query_res_formacion);
        if ($formacion = mysqli_fetch_array($respuesta_formacion)) {
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $interasados[0])
                      ->setCellValue('B'.$i, $interasados[1])
                      ->setCellValue('C'.$i, $interasados[2]." ".$interasados[3]." ".$interasados[4])
                      ->setCellValue('D'.$i, $interasados[5])
                      ->setCellValue('E'.$i, $interasados[6])
                      ->setCellValue('F'.$i, $interasados[7])
                      ->setCellValue('G'.$i, $interasados[8])
                      ->setCellValue('H'.$i, $interasados[9])
                      ->setCellValue('I'.$i, $interasados[10])
                      ->setCellValue('J'.$i, $formacion[1])
                      ->setCellValue('K'.$i, $formacion[2]);
        }else {
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $interasados[0])
                      ->setCellValue('B'.$i, $interasados[1])
                      ->setCellValue('C'.$i, $interasados[2]." ".$interasados[3]." ".$interasados[4])
                      ->setCellValue('D'.$i, $interasados[5])
                      ->setCellValue('E'.$i, $interasados[6])
                      ->setCellValue('F'.$i, $interasados[7])
                      ->setCellValue('G'.$i, $interasados[8])
                      ->setCellValue('H'.$i, $interasados[9])
                      ->setCellValue('I'.$i, $interasados[10])
                      ->setCellValue('J'.$i,'')
                      ->setCellValue('K'.$i,'');
        }
      }
       //return $interasados[0];
    }
    //////////////////////////////////////////////////////////////////////////////////////////////
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
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(25);
    // Save Excel 2007 file
    //echo date('H:i:s') , " Write to Excel2007 format" , EOL;
    //$callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(str_replace('.php', '.xlsx', "aspirantes_listos_formacion.xlsx"));
    //$callEndTime = microtime(true);
    //$callTime = $callEndTime - $callStartTime;
  }
}

$apto = new Aptos();


if (isset($_POST['id_ll']) && isset($_POST['oficio']) && isset($_POST['fecha']) && isset($_POST['adia']) &&
    isset($_POST['noficio']) && isset($_POST['resultado']) && isset($_POST['fecha_resultado']) && isset($_POST['observ'])) {
  $apto->actualizarInteresados($_POST['id_ll'], $_POST['oficio'], $_POST['fecha'], $_POST['adia'], $_POST['noficio'], $_POST['resultado'], $_POST['fecha_resultado'], $_POST['observ']);
  //echo "hola desde el back Actualizar";
}
if (isset($_POST['id_ll']) && isset($_POST['estado']) && isset($_POST['obs'])) {
  $apto->actualizarLlamado($_POST['id_ll'], $_POST['estado'], $_POST['obs']);
}
 ?>
