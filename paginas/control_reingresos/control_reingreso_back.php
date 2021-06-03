<?php
/**
 *
 */
class Reingreso
{
  public function obtenerReingresos()
  {
    require '../../requires/conexion.php';
    // code...
    $query_reingresos="SELECT * FROM cadete WHERE tipo_ingreso like '%Reingreso%'";
    $respuesta_reingresos = $conn->query($query_reingresos);
    $conn->close();
    while ($reingresos = mysqli_fetch_row($respuesta_reingresos)) {
      echo '
        <tr>
          <td>'.$reingresos[0].'</td>
          <td>'.$reingresos[1].'</td>
          <td>'.$reingresos[2].'</td>
          <td>'.$reingresos[3].'</td>
          <td>'.$reingresos[4].'</td>
          <td>'.$reingresos[5].'</td>
          <td>'.$reingresos[6].'</td>
          <td>'.$reingresos[7].'</td>
          <td>'.$reingresos[8].'</td>
          <td>
          <form class="" action="antecedentes.php" method="post">
            <input type="text" name="id" value="'.$reingresos[0].'" readonly hidden>
            <button type="submit" name="button">Antecedentes</button>
          </form>
          </td>
          <td>
          <form action="pdf_reingreso.php" method="post">
          <input type="text" name="id_reingreso" value="'.$reingresos[0].'" readonly hidden>
          <button type="submit" name="button">Descargar ficha</button>
          </form>
          </td>
        </tr>
      ';
    }
  }
  public function obtenerFolio($id)
  {
    require '../../requires/conexion.php';
    $query_folio = "SELECT folio FROM cadete WHERE idCadete = '$id'";
    $respuesta_folio= $conn->query($query_folio);
    if ($folio=mysqli_fetch_row($respuesta_folio)) {
      return $folio;
    }
    $conn->close();
  }

  public function obtenerAntecedente($idcadete)
  {
    require '../../requires/conexion.php';
    $query_antecedentes = "SELECT * FROM antecedentes WHERE idCadete = '$idcadete'";
    $respuesta_antecedentes= $conn->query($query_antecedentes);
    if ($antecedentes = mysqli_fetch_row($respuesta_antecedentes)) {
      return  $antecedentes;
    }
    $conn->close();
  }

  public function agregarAntecedente($contraloria, $contraloria_res, $contraloria_resabi, $consejo, $consejo_res, $consejo_resabi, $comision, $comision_res,
  $comision_resabi, $asuntos, $asuntos_res, $asuntos_resabi, $direccion, $direccion_res, $direccion_resabi, $id, $folio)
  {
    require '../../requires/conexion.php';
    $query_verificar = "SELECT id_antecedene FROM antecedentes WHERE idCadete= $id";
    $verificar = $conn->query($query_verificar);
    $ver = mysqli_fetch_row($verificar);
    if (empty($ver)) {
      $query_agregar_antecedentes="INSERT INTO antecedentes(contraloria_mun_solicitud, contraloria_mun_respuesta, contraloria_mun_respuesta_abi, consejo_honor_solicitud,
      consejo_honor_respuesta, consejo_honor_respuesta_abi, comision_spcp_solicitud, comision_spcp_respuesta, comision_spcp_respuesta_abi, asuntos_interno_solicitud,
      asuntos_interno_respuesta, asuntos_interno_respuesta_abi, direccion_admin_solicitid, direccion_admin_respuesta, direccion_admin_respuesta_abi, idCadete, folio) VALUES
      ('$contraloria', '$contraloria_res', '$contraloria_resabi', '$consejo', '$consejo_res', '$consejo_resabi', '$comision', '$comision_res',
      '$comision_resabi', '$asuntos', '$asuntos_res', '$asuntos_resabi', '$direccion', '$direccion_res', '$direccion_resabi', $id, '$folio' )";

    }elseif(!empty($ver)){
      $query_agregar_antecedentes="UPDATE antecedentes SET contraloria_mun_solicitud='$contraloria', contraloria_mun_respuesta ='$contraloria_res',
      contraloria_mun_respuesta_abi= '$contraloria_resabi', consejo_honor_solicitud ='$consejo',
      consejo_honor_respuesta='$consejo_res', consejo_honor_respuesta_abi='$consejo_resabi',
      comision_spcp_solicitud='$comision' , comision_spcp_respuesta ='$comision_res',
      comision_spcp_respuesta_abi='$comision_resabi', asuntos_interno_solicitud='$asuntos',
      asuntos_interno_respuesta='$asuntos_res', asuntos_interno_respuesta_abi='$asuntos_resabi',
      direccion_admin_solicitid='$direccion', direccion_admin_respuesta='$direccion_res',
      direccion_admin_respuesta_abi='$direccion_resabi' WHERE idCadete = $id";
    }

    $conn->query($query_agregar_antecedentes);
    $conn->close();
    echo $query_agregar_antecedentes;
    header("Location:antecedentes.php?id=".$id);
  }

  public function excelReingresos()
  {
    $i=1;
    include '../../requires/conexion.php';

      $query= "SELECT DISTINCT c.folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla, formacion_inical, fecha_formacion_inical ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo,
      ant.contraloria_mun_solicitud,
      ant.contraloria_mun_respuesta,
      ant.contraloria_mun_respuesta_abi,
      ant.consejo_honor_solicitud,
      ant.consejo_honor_respuesta,
      ant.consejo_honor_respuesta_abi,
      ant.comision_spcp_solicitud,
      ant.comision_spcp_respuesta,
      ant.comision_spcp_respuesta_abi,
      ant.asuntos_interno_solicitud,
      ant.asuntos_interno_respuesta,
      ant.asuntos_interno_respuesta_abi,
      ant.direccion_admin_solicitid,
      ant.direccion_admin_respuesta,
      ant.direccion_admin_respuesta_abi,
      c.tipo_ingreso
      FROM cadete  AS c
      LEFT JOIN  exa_medico AS em ON em.cadete_id = c.folio
      LEFT JOIN examen_fisico AS ef ON ef.cadete_idCadete = c.folio
      LEFT JOIN antecedentes  AS ant ON ant.folio = c.folio WHERE c.tipo_ingreso LIKE 'Reingreso'
      UNION
      SELECT DISTINCT c.folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla, formacion_inical, fecha_formacion_inical ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo,
      ant.contraloria_mun_solicitud,
      ant.contraloria_mun_respuesta,
      ant.contraloria_mun_respuesta_abi,
      ant.consejo_honor_solicitud,
      ant.consejo_honor_respuesta,
      ant.consejo_honor_respuesta_abi,
      ant.comision_spcp_solicitud,
      ant.comision_spcp_respuesta,
      ant.comision_spcp_respuesta_abi,
      ant.asuntos_interno_solicitud,
      ant.asuntos_interno_respuesta,
      ant.asuntos_interno_respuesta_abi,
      ant.direccion_admin_solicitid,
      ant.direccion_admin_respuesta,
      ant.direccion_admin_respuesta_abi,
      c.tipo_ingreso
      FROM cadete  AS c
      LEFT JOIN  exa_medico AS em ON em.cadete_id = c.folio
      RIGHT JOIN  exa_medico  ON em.cadete_id = c.folio
      LEFT JOIN examen_fisico AS ef ON ef.cadete_idCadete = c.folio
      RIGHT JOIN examen_fisico  ON ef.cadete_idCadete = c.folio
      LEFT JOIN antecedentes  AS ant ON ant.folio = c.folio
      RIGHT JOIN antecedentes   ON ant.folio = c.folio WHERE c.tipo_ingreso LIKE 'Reingreso'
      UNION
      SELECT DISTINCT c.folio, f_llenado, a_paterno, a_materno, c.nombre, f_nacimiento, edad_registro , curp, rfc, genero, estado_civil, calle, n_interior, colonia, municipio,
      c.estado, c_postal, nolic,  nocartilla, formacion_inical, fecha_formacion_inical ,tel_celular, tel_1,  tel_2, email, grado_estudio, carrera_g , exp_o_exm, dependencia, entidad_dep, metodo_e_empleo, em.conclusion, ef.resultado, ef.promedio, ef.manejo,
      ant.contraloria_mun_solicitud,
      ant.contraloria_mun_respuesta,
      ant.contraloria_mun_respuesta_abi,
      ant.consejo_honor_solicitud,
      ant.consejo_honor_respuesta,
      ant.consejo_honor_respuesta_abi,
      ant.comision_spcp_solicitud,
      ant.comision_spcp_respuesta,
      ant.comision_spcp_respuesta_abi,
      ant.asuntos_interno_solicitud,
      ant.asuntos_interno_respuesta,
      ant.asuntos_interno_respuesta_abi,
      ant.direccion_admin_solicitid,
      ant.direccion_admin_respuesta,
      ant.direccion_admin_respuesta_abi,
      c.tipo_ingreso
      FROM cadete  AS c
      RIGHT JOIN  exa_medico AS em ON em.cadete_id = c.folio
      RIGHT JOIN examen_fisico AS ef ON ef.cadete_idCadete = c.folio
      RIGHT JOIN antecedentes  AS ant ON ant.folio = c.folio WHERE c.tipo_ingreso LIKE 'Reingreso'
      ";
      // code...

    $respuesta=$conn->query($query);

    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
    /** Include PHPExcel */
    require 'PHPExcel/Classes/PHPExcel.php';
    $objPHPExcel = new PHPExcel();

    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'FOLIO')
                ->setCellValue('B1', 'FECHA DE RECEPCIÓN DE DOCUMENTOS')
                ->setCellValue('C1', 'NOMBRE')
                ->setCellValue('D1', 'APELLIDO PATERNO')
                ->setCellValue('E1', 'APELLIDO MATERNO')
                ->setCellValue('F1', 'NOMBRE(S)')
                ->setCellValue('G1', 'FECHA DE NACIMIENTO')
                ->setCellValue('H1', 'EDAD')
                ->setCellValue('I1', 'CURP')
                ->setCellValue('J1', 'RFC')
                ->setCellValue('K1', 'GÉNERO')
                ->setCellValue('L1', 'ESTADO CIVIL')
                ->setCellValue('M1', 'DOMICILIO')
                ->setCellValue('N1', 'COLONIA')
                ->setCellValue('O1', 'MUNICIPIO')
                ->setCellValue('P1', 'ESTADO')
                ->setCellValue('Q1', 'CP')
                ->setCellValue('R1', 'NO. DE LICENCIA')
                ->setCellValue('S1', 'CARTILLA DE SERVICIO MILITAR')
                ->setCellValue('T1', 'FORMACIÓN INICIAL (HORAS)')
                ->setCellValue('U1', 'FECHA FORMACIÓN INICIAL')
                ->setCellValue('V1', 'CELULAR')
                ->setCellValue('W1', 'TELÉFONO 1')
                ->setCellValue('X1', 'TELÉFONO 2')
                ->setCellValue('Y1', 'CORREO ELECTRONICO')
                ->setCellValue('Z1', 'ESCOLARIDAD')
                ->setCellValue('AA1', 'ESPECIALIDAD')
                ->setCellValue('AB1', 'EX POLICIA O EX MILITAR')
                ->setCellValue('AC1', 'CARGO')
                ->setCellValue('AD1', 'LUGAR')
                ->setCellValue('AE1', 'MEDIO POR EL QUE SE ENTERÓ DE LA CONVOCATORIA')
                ->setCellValue('AF1', 'RESULTADO EXAMEN MÉDICO')
                ->setCellValue('AG1', 'RESULTADO EXAMEN FÍSICO')
                ->setCellValue('AH1', 'CALIFICACIÓN EXAMEN FÍSICO')
                ->setCellValue('AI1', 'MANEJA')
                ->setCellValue('AJ1', 'NÚMERO DE ESCRITO DE SOLICITUD DE ANTECEDENTES A LA CONTRALORIA MUNICIPAL')
                ->setCellValue('AK1', 'NÚMERO DE ESCRITO DE RESPIESTA DE ANTECEDENTES A LA CONTRALORIA MUNICIPAL')
                ->setCellValue('AL1', 'RESPUESTA CONTRALORÍA MUNICIPAL')
                ->setCellValue('AM1', 'NÚMERO DE ESCRITO DE SOLICITUD DE ANTECEDENTES AL CONSEJO DE HONOR Y JUSTICIA')
                ->setCellValue('AN1', 'NÚMERO DE ESCRITO DE RESPIESTA DE ANTECEDENTES DEL CONSEJO DE HONOR Y JUSTICIA')
                ->setCellValue('AO1', 'RESPUESTA CONSEJO DE HONOR Y JUSTICIA')
                ->setCellValue('AP1', 'NÚMERO DE ESCRITO DE SOLICITUD DE ANTECEDENTES A LA COMISIÓN DEL SPCP')
                ->setCellValue('AQ1', 'NÚMERO DE ESCRITO DE RESPIESTA DE ANTECEDENTES DE LA COMISIÓN DEL SPCP')
                ->setCellValue('AR1', 'RESPUESTA COMISIÓN DE LA SPCP')
                ->setCellValue('AS1', 'NÚMERO DE ESCRITO DE SOLICITUD DE ANTECEDENTES A LA UNIDAD DE ASUNTOS INTERNOS')
                ->setCellValue('AT1', 'NÚMERO DE ESCRITO DE RESPIESTA DE ANTECEDENTES DE LA UNIDAD DE ASUNTOS INTERNOS')
                ->setCellValue('AU1', 'RESPUESTA UNIDAD DE ASUNTOS INTERNOSL')
                ->setCellValue('AV1', 'NÚMERO DE ESCRITO DE SOLICITUD DE ANTECEDENTES A LA DIRECCIÓN ADMINISTRATIVA')
                ->setCellValue('AW1', 'NÚMERO DE ESCRITO DE RESPIESTA DE ANTECEDENTES DE DIRECCIÓN ADMINISTRATIVA')
                ->setCellValue('AX1', 'RESPUESTA DIRECCIÓN ADMINISTRATIVA')

                ;
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    while ($aptos=mysqli_fetch_array($respuesta)) {
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $aptos[0])
                      ->setCellValue('B'.$i, $aptos[1])
                      ->setCellValue('C'.$i, $aptos[2]." ".$aptos[3]." ".$aptos[4])
                      ->setCellValue('D'.$i, $aptos[2])
                      ->setCellValue('E'.$i, $aptos[3])
                      ->setCellValue('F'.$i, $aptos[4])
                      ->setCellValue('G'.$i, $aptos[5])
                      ->setCellValue('H'.$i, $aptos[6])//EDAD
                      ->setCellValue('I'.$i, $aptos[7])//CURP
                      ->setCellValue('J'.$i, $aptos[8])
                      ->setCellValue('K'.$i, $aptos[9])
                      ->setCellValue('L'.$i, $aptos[10])
                      ->setCellValue('M'.$i, $aptos[11].$aptos[12])
                      ->setCellValue('N'.$i, $aptos[13])
                      ->setCellValue('O'.$i, $aptos[14])
                      ->setCellValue('P'.$i, $aptos[15])
                      ->setCellValue('Q'.$i, $aptos[16])
                      ->setCellValue('R'.$i, $aptos[17])
                      ->setCellValue('S'.$i, $aptos[18])
                      ->setCellValue('T'.$i, $aptos[19])
                      ->setCellValue('U'.$i, $aptos[20])
                      ->setCellValue('V'.$i, $aptos[21])
                      ->setCellValue('W'.$i, $aptos[22])
                      ->setCellValue('X'.$i, $aptos[23])
                      ->setCellValue('Y'.$i, $aptos[24])
                      ->setCellValue('Z'.$i, $aptos[25])
                      ->setCellValue('AA'.$i, $aptos[26])
                      ->setCellValue('AB'.$i, $aptos[27])
                      ->setCellValue('AC'.$i, $aptos[28])
                      ->setCellValue('AD'.$i, $aptos[29])
                      ->setCellValue('AE'.$i, $aptos[30])
                      ->setCellValue('AF'.$i, $aptos[31])
                      ->setCellValue('AG'.$i, $aptos[32])
                      ->setCellValue('AH'.$i, $aptos[33])
                      ->setCellValue('AI'.$i, $aptos[34])
                      ->setCellValue('AJ'.$i, $aptos[35])
                      ->setCellValue('AK'.$i, $aptos[36])
                      ->setCellValue('AL'.$i, $aptos[37])
                      ->setCellValue('AM'.$i, $aptos[38])
                      ->setCellValue('AN'.$i, $aptos[39])
                      ->setCellValue('AO'.$i, $aptos[40])
                      ->setCellValue('AP'.$i, $aptos[41])
                      ->setCellValue('AQ'.$i, $aptos[42])
                      ->setCellValue('AR'.$i, $aptos[43])
                      ->setCellValue('AS'.$i, $aptos[44])
                      ->setCellValue('AT'.$i, $aptos[45])
                      ->setCellValue('AU'.$i, $aptos[46])
                      ->setCellValue('AV'.$i, $aptos[47])
                      ->setCellValue('AW'.$i, $aptos[48])
                      ->setCellValue('AX'.$i, $aptos[49])
                      ;


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
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AP')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AR')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AS')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AT')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AU')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AV')->setWidth(25);

    $objPHPExcel->getActiveSheet()->getStyle('A1:AX1')->applyFromArray(
              array(
              'font'  => array(
                  'bold'  => true,
                  'color' => array('rgb' => 'FFFFFF'),
                  'size'  => 11
              ),
              'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('rgb' => '333F4F')
                )
            )
    );


    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(str_replace('.php', '.xlsx', "Lista_Reingresos.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }

}

$reingreso = new Reingreso();

if (isset($_POST['contraloria'])&&
isset($_POST['contraloria_res'])&&
isset($_POST['contraloria_resabi'])&&
isset($_POST['consejo'])&&
isset($_POST['consejo_res'])&&
isset($_POST['consejo_resabi'])&&
isset($_POST['comision'])&&
isset($_POST['comision_res'])&&
isset($_POST['comision_resabi'])&&
isset($_POST['asuntos'])&&
isset($_POST['asuntos_res'])&&
isset($_POST['asuntos_resabi'])&&
isset($_POST['direccion'])&&
isset($_POST['direccion_res'])&&
isset($_POST['direccion_resabi'])&&
isset($_POST['id'])&&
isset($_POST['folio'])){
  $reingreso->agregarAntecedente($_POST['contraloria'], $_POST['contraloria_res'], $_POST['contraloria_resabi'], $_POST['consejo'], $_POST['consejo_res'],
   $_POST['consejo_resabi'], $_POST['comision'], $_POST['comision_res'], $_POST['comision_resabi'], $_POST['asuntos'], $_POST['asuntos_res'],
   $_POST['asuntos_resabi'], $_POST['direccion'], $_POST['direccion_res'], $_POST['direccion_resabi'], $_POST['id'], $_POST['folio']);
   //header("Location:antecedentes.php?id=".$_POST['id']);
}

 ?>
