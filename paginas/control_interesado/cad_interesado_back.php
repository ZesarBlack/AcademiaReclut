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
    $query_verificar ="SELECT * FROM llamados_c3 WHERE respuesta = 'INTERESADO'";
    $respuesta_verificar = $conn->query($query_verificar);
    while ($datos = mysqli_fetch_row($respuesta_verificar)){

       $query_interesados = "SELECT DISTINCT folio, f_llenado, curp, a_paterno, a_materno, nombre, genero, f_nacimiento, idCadete FROM cadete WHERE folio = '$datos[0]' AND tipo_ingreso = 'Nuevo Ingreso' ORDER BY f_llenado ASC";
       $respuesta_interesados = $conn->query($query_interesados);

      if ($interasados = mysqli_fetch_row($respuesta_interesados)) {
        $query_res_c3 ="SELECT * FROM control_conf WHERE folio = '$interasados[0]'";

        $respuesta_res_c3 = $conn->query($query_res_c3);
        $fecha_nacimiento = date("d-m-Y", strtotime($interasados[7]));
        $fecha_recepcion = date("d-m-Y", strtotime($interasados[1]));

        if ($c3 = mysqli_fetch_row($respuesta_res_c3)) {

          if ($c3[7] == '1500-01-01') {
             $fecha_emision = "";
          }else {
             $fecha_emision = date("d-m-Y", strtotime($c3[7]));
          }

          if ($c3[3] == '1500-01-01') {
             $fecha_primerdia = "";

          }else {
            $fecha_primerdia = date("d-m-Y", strtotime($c3[3]));
          }

          echo '
          <tr>
            <td><input type="text" id="'.$interasados[8].'id_temp_c3" name="'.$interasados[8].'id_temp_c3" value="'.$interasados[0].'" readonly hidden>'.$interasados[0].'</td>
            <td>'.$fecha_recepcion.'</td>
            <td>'.$interasados[2].'</td>
            <td>'.$interasados[3].'</td>
            <td>'.$interasados[4].'</td>
            <td>'.$interasados[5].'</td>
            <td>'.$interasados[5].' '.$interasados[3].' '.$interasados[4].'</td>
            <td>'.$interasados[6].'</td>
            <td>'.$fecha_nacimiento.'</td>
            <td>'.$c3[2].'</td>
            <td>'.$fecha_primerdia.'</td>
            <td>'.$c3[4].'</td>
            <td>'.$c3[5].'</td>
            <td>'.$c3[6].'</td>
            <td>'.$fecha_emision.'</td>
            <td>'.$c3[8].'</td>
            <td>
            <input type="text" name="" id="'.$interasados[8].'id_temp" value="'.$interasados[0].'" readonly hidden>
            <button type="button" class="btn btn-primary" onclick="ontenerId('.$interasados[8].')" data-toggle="modal" data-target="#myModal" name="button">Actualizar</button>
            </button>
            </td>
          </tr>
          ';
        }else {
          echo '
          <tr>
            <td><input type="text" name="'.$interasados[8].'id_temp_c3" value="'.$interasados[0].'" readonly hidden>'.$interasados[0].'</td>
            <td>'.$fecha_recepcion.'</td>
            <td>'.$interasados[2].'</td>
            <td>'.$interasados[3].'</td>
            <td>'.$interasados[4].'</td>
            <td>'.$interasados[5].'</td>
            <td>'.$interasados[5].' '.$interasados[3].' '.$interasados[4].'</td>
            <td>'.$interasados[6].'</td>
            <td>'.$fecha_nacimiento.'</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
            <input type="text" name="" id="'.$interasados[8].'id_temp" value="'.$interasados[0].'" readonly hidden>
            <button type="button" class="btn btn-primary" onclick="ontenerId('.$interasados[8].')" data-toggle="modal" data-target="#myModal" name="button">Actualizar</button>
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
    $numero_res ="SELECT COUNT(*) FROM llamados_c3 WHERE respuesta = 'INTERESADO'";

    $num_query=$conn->query($numero_res);

    if ($num = mysqli_fetch_array($num_query)) {
      echo $num[0];
    }
  }

  public function obtenerInfoc3($id_c3)
  {
    require '../../requires/conexion.php';
    $query_info_c3="SELECT * FROM control_conf WHERE folio = '$id_c3'";
    $respuesta_info_c3 = $conn->query($query_info_c3);
    if ($info_c3 = mysqli_fetch_row($respuesta_info_c3)) {
      echo json_encode($info_c3);
      //$control = array('n_oficio' => $info_c3[2], 'asistencia' => $info_c3, 'n_oc' => $info_c3 , 'resultado' => $info_c3 , 'fecha_resultado' => $info_c3 , 'observacion' => $info_c3 , 'nacimiento' => $info_c3);

      //echo json_encode($control);
    }
    //echo $id_c3;
    $conn->close();
  }

  public function actualizarInteresados($id_ll, $oficio, $fecha, $adia, $noficio, $resultado, $fecha_resultado, $observ)
  {
    include '../../requires/conexion.php';
//comprobar si ya fue llamado antecedentes
if ($fecha == "") {
   $fecha = '1500-01-01';
}
if ($fecha_resultado == "") {
   $fecha_resultado = '1500-01-01';
}
    $query_comprobar = "SELECT * FROM control_conf WHERE folio = '$id_ll'";
    $respuesta_comprobar = $conn->query($query_comprobar);
    if ($comprobar = mysqli_fetch_row($respuesta_comprobar)){
      $query_actualizar = "UPDATE control_conf SET folio = '$id_ll', n_oficio = '$oficio', f_inicio = '$fecha', asistencia = '$adia', n_oc = '$noficio',
      result_eva = '$resultado', fecha_emision_result = '$fecha_resultado', observaciones = '$observ' WHERE folio = '$id_ll' ";
    }else {
      $query_actualizar = "INSERT INTO control_conf (folio, n_oficio, f_inicio, asistencia, n_oc, result_eva, fecha_emision_result, observaciones) VALUES
      ('$id_ll', '$oficio', '$fecha', '$adia', '$noficio', '$resultado', '$fecha_resultado', '$observ')";
    }
    echo $query_actualizar;
   $respuesta_actualizar = $conn->query($query_actualizar);
    $conn->close();
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
$query_verificar ="SELECT * FROM control_conf";
$respuesta_verificar = $conn->query($query_verificar);
while ($datos = mysqli_fetch_row($respuesta_verificar)){
}
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
                ->setCellValue('B1', 'FECHA DE RECEPCIÓN DE DOCUMENTOS')
                ->setCellValue('C1', 'CURP')
                ->setCellValue('D1', 'APELLIDO PATERNO')
                ->setCellValue('E1', 'APELLIDO MATERNO')
                ->setCellValue('F1', 'NOMBRE(S)')
                ->setCellValue('G1', 'NOMBRE COMPLETO')
                ->setCellValue('H1', 'GÉNERO')
                ->setCellValue('I1', 'FECHA DE NACIMIENTO')
                ->setCellValue('J1', 'NÚMERO DE OFICIO DE COMISIÓN A C3')
                ->setCellValue('K1', 'FECHA DE PRIMER DÍA')
                ->setCellValue('L1', 'ASISTENCIA PRIMER DÍA')
                ->setCellValue('M1', 'RESULTADO (APROBADO/ NO APROBADO)')
                ->setCellValue('N1', 'NÚMERO DE OFICIO')
                ->setCellValue('O1', 'FECHA DE EMISIÓN DE RESULTADOS')
                ->setCellValue('P1', 'OBSERVACIONES');
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $query_verificar ="SELECT * FROM llamados_c3 WHERE respuesta = 'INTERESADO'";
    $respuesta_verificar = $conn->query($query_verificar);
    while ($datos = mysqli_fetch_row($respuesta_verificar)){

       $query_interesados = "SELECT DISTINCT folio, f_llenado, curp, a_paterno, a_materno, nombre, genero, f_nacimiento, idCadete FROM cadete WHERE folio = '$datos[0]' AND tipo_ingreso = 'Nuevo Ingreso'";
       $respuesta_interesados = $conn->query($query_interesados);

      if ($interasados = mysqli_fetch_row($respuesta_interesados)) {
        $query_res_c3 ="SELECT * FROM control_conf WHERE folio = '$interasados[0]'";
        $respuesta_res_c3 = $conn->query($query_res_c3);

        if ($c3 = mysqli_fetch_row($respuesta_res_c3)) {
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $interasados[0])
                      ->setCellValue('B'.$i, $interasados[1])
                      ->setCellValue('C'.$i, $interasados[2])
                      ->setCellValue('D'.$i, $interasados[3])
                      ->setCellValue('E'.$i, $interasados[4])
                      ->setCellValue('F'.$i, $interasados[5])
                      ->setCellValue('G'.$i, $interasados[5]." ".$interasados[3]." ".$interasados[4])
                      ->setCellValue('H'.$i, $interasados[6])
                      ->setCellValue('I'.$i, $interasados[7])
                      ->setCellValue('J'.$i, $c3[2])
                      ->setCellValue('K'.$i, $c3[3])
                      ->setCellValue('L'.$i, $c3[4])
                      ->setCellValue('M'.$i, $c3[6])
                      ->setCellValue('N'.$i, $c3[5])
                      ->setCellValue('O'.$i, $c3[7])
                      ->setCellValue('P'.$i, $c3[8]);
        }else {
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $interasados[0])
                      ->setCellValue('B'.$i, $interasados[1])
                      ->setCellValue('C'.$i, $interasados[2])
                      ->setCellValue('D'.$i, $interasados[3])
                      ->setCellValue('E'.$i, $interasados[4])
                      ->setCellValue('F'.$i, $interasados[5])
                      ->setCellValue('G'.$i, $interasados[5]." ".$interasados[3]." ".$interasados[4])
                      ->setCellValue('H'.$i, $interasados[6])
                      ->setCellValue('I'.$i, $interasados[7])
                      ->setCellValue('J'.$i, '')
                      ->setCellValue('K'.$i, '')
                      ->setCellValue('L'.$i, '')
                      ->setCellValue('M'.$i, '')
                      ->setCellValue('N'.$i, '')
                      ->setCellValue('O'.$i, '')
                      ->setCellValue('P'.$i, '');
        }
      }
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
    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(str_replace('.php', '.xlsx', "aspirantes_C3.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }
}

$apto = new Aptos();


if (isset($_POST['id_ll']) && isset($_POST['oficio']) && isset($_POST['fecha']) && isset($_POST['adia']) &&
    isset($_POST['noficio']) && isset($_POST['resultado']) && isset($_POST['fecha_resultado']) && isset($_POST['observ'])) {
  $apto->actualizarInteresados($_POST['id_ll'], $_POST['oficio'], $_POST['fecha'], $_POST['adia'], $_POST['noficio'], $_POST['resultado'], $_POST['fecha_resultado'], $_POST['observ']);
  //echo "hola desde el back Actualizar";
}

if (isset($_POST['id_c3'])) {
  $apto->obtenerInfoc3($_POST['id_c3']);
}
 ?>
