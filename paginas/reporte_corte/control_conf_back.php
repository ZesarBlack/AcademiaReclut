<?php
/**
 *
 */

class ControlConf
{
  public function obtenerConfianza()
  {

    $arrContextOptions=array(
        "ssl"=>array(
            'method'=>"GET",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );

    include '../../requires/conexion.php';
    $query_conf="SELECT * FROM reporte_corte";
    $resultado_conf=$conn->query($query_conf);
    while ($datos=mysqli_fetch_row($resultado_conf)) {

    $response = file_get_contents("http://172.18.0.28/swebAcademia/?pass=c3s4RM494p&user=cesar&control=".$datos[2], true, stream_context_create($arrContextOptions));
    $policia = json_decode($response);

      echo
            "<tr>
               <td>".$policia->{'no_control'}."</td>
               <td>".$policia->{'nombre'}."</td>
               <td>".$policia->{'cuip'}."</td>
               <td>".$policia->{'PuestoRNPSP'}."</td>
               <td>$datos[0]</td>
               <td>$datos[1]</td>
             </tr>
            ";
    }
  }

  public function actualizarCorte($control, $estatus, $observacion)
  {
    include '../../requires/conexion.php';
    $query_act="INSERT INTO reporte_corte(estatus_cup, observaciones, num_control) values ('$estatus', '$observacion', '$control')";
    $conn->query($query_act);
    header('location: reporte_corte.php');
    echo $query_act;
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
      echo "<h1>Elemento</h1>
      <thead>
        <th>Número de control</th>
        <th>Nombre</th>
        <th>CUIP</th>
        <th>Puesto</th>
      </thead>
      ";
      echo
            "<tr>
               <td>".$policia->{'no_control'}."</td>
               <td>".$policia->{'nombre'}."</td>
               <td>".$policia->{'cuip'}."</td>
               <td>".$policia->{'PuestoRNPSP'}."</td>
            </tr>";

    }
  }

  public function axcelAspirantes()
  {
    $i=1;
    include '../../requires/conexion.php';
    $query ="SELECT DISTINCT cad.nombre, paterno, materno, email, numero_tel, tel_1, tel_2, curp, f_nacimiento , ef.resultado, em.conclusion FROM exa_medico AS em
    INNER JOIN examen_fisico AS ef ON ef.cadete_idCadete = em.cadete_id
    INNER JOIN cadete AS cad ON em.cadete_id = cad.folio
    WHERE em.conclusion ='Apto' AND ef.resultado='Apto'";
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
                ->setCellValue('A1', 'Nombre completo')
                ->setCellValue('B1', 'Correo')
                ->setCellValue('C1', 'Teléfono movil')
                ->setCellValue('D1', 'Teléfono 2')
                ->setCellValue('E1', 'Teléfono 3')
                ->setCellValue('F1', 'CURP')
                ->setCellValue('G1', 'Fecha de nacimiento')
                ->setCellValue('H1', 'Resultado Evaluacion Física')
                ->setCellValue('I1', 'resultado Evaluacion Médica');
    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    while ($aptos=mysqli_fetch_array($respuesta)) {
          $i=$i+1;
          $objPHPExcel->setActiveSheetIndex(0)
                      ->setCellValue('A'.$i, $aptos[0]." ".$aptos[1]." ".$aptos[2])
                      ->setCellValue('B'.$i, $aptos[3])
                      ->setCellValue('C'.$i, $aptos[4])
                      ->setCellValue('D'.$i, $aptos[5])
                      ->setCellValue('E'.$i, $aptos[6])
                      ->setCellValue('F'.$i, $aptos[7])
                      ->setCellValue('G'.$i, $aptos[8])
                      ->setCellValue('H'.$i, $aptos[9])
                      ->setCellValue('I'.$i, $aptos[10]);


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
    $objWriter->save(str_replace('.php', '.xlsx', "aspirantes_C3.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }


}

$control = new ControlConf();

if (isset($_POST["control"]) && isset($_POST["estatus"]) && isset($_POST["observacion"])) {
  //echo "ok";
  $control->actualizarCorte($_POST["control"],$_POST["estatus"], $_POST["observacion"]);
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
