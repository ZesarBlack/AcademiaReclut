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
    $query_verificar ="SELECT * FROM llamados_formacion_inicial WHERE respuesta = 'INTERESADO'";
    $respuesta_verificar = $conn->query($query_verificar);
    while ($datos = mysqli_fetch_row($respuesta_verificar)){

       $query_interesados = "SELECT DISTINCT folio, f_llenado, curp, a_paterno, a_materno, nombre, genero, f_nacimiento, idCadete FROM cadete WHERE folio = '$datos[0]' AND tipo_ingreso = 'Nuevo Ingreso'";
       $respuesta_interesados = $conn->query($query_interesados);

      if ($interasados = mysqli_fetch_row($respuesta_interesados)) {

                $fecha_nacimiento = date("d-m-Y", strtotime($interasados[7]));
                $fecha_recepcion = date("d-m-Y", strtotime($interasados[1]));

                $query_res_formacion ="SELECT * FROM formacion_inicial WHERE folio = '$interasados[0]'";
                $respuesta_formacion = $conn->query($query_res_formacion);
        if ($formacion = mysqli_fetch_array($respuesta_formacion)) {

          if ($formacion[4] == "1800-01-01") {
              $fecha_inicio = "";
          }else {
              $fecha_inicio = date("d-m-Y", strtotime($formacion[4]));
          }
          if ($formacion[5] == "1800-01-01") {
              $fecha_final = "";
          }else {
              $fecha_final = date("d-m-Y", strtotime($formacion[5]));
          }
          if ($formacion[6] == "1800-01-01") {
              $fecha_baja = "";
          }else {
            $fecha_baja = date("d-m-Y", strtotime($formacion[6]));
          }

          echo '
          <tr>
            <td>'.$interasados[0].'</td>
            <td>'.$fecha_recepcion.'</td>
            <td>'.$interasados[2].'</td>
            <td>'.$interasados[3].'</td>
            <td>'.$interasados[4].'</td>
            <td>'.$interasados[5].'</td>
            <td>'.$interasados[5].' '.$interasados[3].' '.$interasados[4].'</td>
            <td>'.$interasados[6].'</td>
            <td>'.$fecha_nacimiento.'</td>
            <td>'.$formacion[1].'</td>
            <td>'.$formacion[2].'</td>
            <td>'.$formacion[3].'</td>
            <td>'.$fecha_inicio.'<br>-<br>'.$fecha_final.'</td>
            <td>'.$fecha_baja.'</td>
            <td>'.$formacion[7].'</td>
            <td>'.$formacion[8].'</td>
            <td>'.$formacion[9].'</td>
            <td>'.$formacion[10].'</td>
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
            <td>'.$interasados[0].'</td>
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
            <td></td>
            <td></td>
            <td>
            <input type="text" name="" id="'.$interasados[8].'id_temp" value="'.$interasados[0].'" readonly hidden>
            <button type="button" class="btn btn-primary" onclick="ontenerId('.$interasados[8].')" data-toggle="modal" data-target="#myModal" name="button">Actualizar</button>
            </button>
            </td>
          </tr>
          ';
          // code...
        }
      }
       //return $interasados[0];
    }
  $conn->close();
  }

  public function obtenerInfoformacion($id_formacion)
  {
    require '../../requires/conexion.php';
    $query_info_formacion="SELECT * FROM formacion_inicial WHERE folio = '$id_formacion'";
    $respuesta_info_formacion = $conn->query($query_info_formacion);
    if ($info_formacion = mysqli_fetch_row($respuesta_info_formacion)) {
      echo json_encode($info_formacion);
    }
    $conn->close();
  }


  public function actualizarResultados($id_ll, $asistencia, $num_gen,  $grupo,  $per_cap1, $per_cap2,  $fecha_baja,  $motivo_baja,  $calf_final,  $calf_desempeño,  $observacion)
  {
    include '../../requires/conexion.php';
//comprobar si ya fue llamado antecedentes
    $query_comprobar = "SELECT * FROM formacion_inicial WHERE folio = '$id_ll'";
    $respuesta_comprobar = $conn->query($query_comprobar);
    if ($comprobar = mysqli_fetch_row($respuesta_comprobar)){
      $query_actualizar = "UPDATE formacion_inicial SET  asistencia= '$asistencia' ,generacion= '$num_gen', grupo = '$grupo', f_inicio= '$per_cap1',  f_final= '$per_cap2', fecha_baja= '$fecha_baja', motivo_baja= '$motivo_baja', calificacion_final= '$calf_final', calificacion_evaluacion= '$calf_desempeño', observacion= '$observacion' WHERE folio = '$id_ll'";
    }else {
      $query_actualizar = "INSERT INTO formacion_inicial (folio, asistencia, generacion, grupo, f_inicio, f_final, fecha_baja, motivo_baja, calificacion_final, calificacion_evaluacion, observacion ) VALUES
      ('$id_ll', '$asistencia' ,'$num_gen',  '$grupo',  '$per_cap1', '$per_cap2',  '$fecha_baja',  '$motivo_baja',  '$calf_final',  '$calf_desempeño',  '$observacion')";
    }
    echo $query_comprobar;
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
    $numero_res ="SELECT COUNT(*) FROM llamados_formacion_inicial WHERE respuesta = 'INTERESADO'";

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
                ->setCellValue('J1', 'ASISTIÓ A LA PLÁTICA INDUCTIVA')
                ->setCellValue('K1', 'NÚMERO DE GENERACIÓN')
                ->setCellValue('L1', 'GRUPO')
                ->setCellValue('M1', 'PERIODO DE CAPACITACIÓN')
                ->setCellValue('N1', 'FECHA DE BAJA')
                ->setCellValue('O1', 'MOTIVO DE BAJA')
                ->setCellValue('P1', 'CALIFICACIÓN FINAL')
                ->setCellValue('Q1', 'CALIFICACIÓN DE LA EVALUACIÓN DE DESEMPEÑO')
                ->setCellValue('R1', 'OBSERVACIONES');
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $query_verificar ="SELECT * FROM llamados_formacion_inicial WHERE respuesta = 'INTERESADO'";
    $respuesta_verificar = $conn->query($query_verificar);
    while ($datos = mysqli_fetch_row($respuesta_verificar)){

      $query_interesados = "SELECT DISTINCT folio, f_llenado, curp, a_paterno, a_materno, nombre, genero, f_nacimiento, idCadete FROM cadete WHERE folio = '$datos[0]' AND tipo_ingreso = 'Nuevo Ingreso'";
      $respuesta_interesados = $conn->query($query_interesados);

      if ($interasados = mysqli_fetch_row($respuesta_interesados)) {
        $query_res_formacion ="SELECT * FROM formacion_inicial WHERE folio = '$interasados[0]'";
        $respuesta_formacion = $conn->query($query_res_formacion);

        if ($formacion = mysqli_fetch_array($respuesta_formacion)) {
          if ($formacion[4] == "1800-01-01") {
              $formacion[4] = "";
          }
          if ($formacion[5] == "1800-01-01") {
              $formacion[5] = "";
          }
          if ($formacion[6] == "1800-01-01") {
              $formacion[6] = "";
          }

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
                      ->setCellValue('J'.$i, $formacion[1])
                      ->setCellValue('K'.$i, $formacion[2])
                      ->setCellValue('L'.$i, $formacion[3])
                      ->setCellValue('M'.$i, $formacion[4]."/".$formacion[5])
                      ->setCellValue('N'.$i, $formacion[6])
                      ->setCellValue('O'.$i, $formacion[7])
                      ->setCellValue('P'.$i, $formacion[8])
                      ->setCellValue('Q'.$i, $formacion[9])
                      ->setCellValue('R'.$i, $formacion[10]);
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
                      ->setCellValue('P'.$i, '')
                      ->setCellValue('Q'.$i, '')
                      ->setCellValue('R'.$i, '');
          // code...
        }
      }
    }
    /*
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
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $aptos[0])
                      ->setCellValue('B'.$i, $aptos[1]." ".$aptos[2]." ".$aptos[3])
                      ->setCellValue('C'.$i, $aptos[4])
                      ->setCellValue('D'.$i, $aptos[5])
                      ->setCellValue('E'.$i, $aptos[6])
                      ->setCellValue('F'.$i, $aptos[7])
                      ->setCellValue('G'.$i, $aptos[8])
                      ->setCellValue('H'.$i, $aptos[8])
                      ->setCellValue('I'.$i, $r_llamado)
                      ->setCellValue('J'.$i, $r_observacion);
    }
    */
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
    $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(25);
    // Save Excel 2007 file
    //echo date('H:i:s') , " Write to Excel2007 format" , EOL;
    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(str_replace('.php', '.xlsx', "aspirantes_Formacion_inicial.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }
}

$apto = new Aptos();


if (isset($_POST['id_formacion'])) {
  // code...
  $apto->obtenerInfoformacion($_POST['id_formacion']);
}

if (isset($_POST['id_ll']) && isset($_POST['asistencia']) && isset($_POST['num_gen']) && isset($_POST['grupo'])  && isset($_POST['per_cap1']) && isset($_POST['per_cap2']) && isset($_POST['fecha_baja']) &&
    isset($_POST['motivo_baja']) && isset($_POST['calf_final'])&& isset($_POST['calf_desempeño']) && isset($_POST['observacion'])) {
  // code...

  $apto->actualizarResultados($_POST['id_ll'] , $_POST['asistencia'], $_POST['num_gen'] , $_POST['grupo'], $_POST['per_cap1'], $_POST['per_cap2'], $_POST['fecha_baja'],
        $_POST['motivo_baja'] ,$_POST['calf_final'], $_POST['calf_desempeño'] , $_POST['observacion']);

  //echo $_POST['id_ll'];

}
//id_ll + num_gen + grupo + per_cap + fecha_baja + motivo_baja + calf_final + calf_desempeño + observacion
 ?>
