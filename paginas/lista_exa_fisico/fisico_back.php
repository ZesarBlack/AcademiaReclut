<?php
/**
 *
 */
class Examenfisico
{
  public function obtenerLista()
  {
    require '../../requires/conexion.php';
    $query_fisico="SELECT * FROM examen_fisico AS ef INNER JOIN cadete as cad ON ef.cadete_idCadete = cad.folio ORDER BY id_fisico DESC";
    $resultado = $conn->query($query_fisico);
    $conn->close();
    while ($datos = mysqli_fetch_row($resultado)) {
        echo '
        <tr>
          <td><h2>'.$datos[23].'</h2></td>
          <td><h2>'.$datos[24].'</h2></td>
          <td><h2>'.$datos[25].' '.$datos[26].' '.$datos[27].'</h2></td>
          <td><h2>'.$datos[1].'</h2></td>
          <td><h2>'.$datos[2].'</h2></td>
          <td><h2>'.$datos[3].'</h2></td>
          <td><h2>'.$datos[4].'</h2></td>
          <td><h2>'.$datos[5].'</h2></td>
          <td><h2>'.$datos[6].'</h2></td>
          <td><h2>'.$datos[7].'</h2></td>
          <td><h2>'.$datos[8].'</h2></td>
          <td><h2>'.$datos[9].'</h2></td>
          <td><h2>'.$datos[10].'</h2></td>
          <td><h2>'.$datos[11].'</h2></td>
          <td><h2>'.$datos[12].'</h2></td>
          <td><h2>'.$datos[13].'</h2></td>
          <td><h2>'.$datos[14].'</h2></td>
          <td><h2>'.$datos[15].'</h2></td>
          <td><h2>'.$datos[16].'</h2></td>
        </tr>
        ';
    }

  }
  public function axcelAspirantes()
  {
    $celda_inicial=2;
    include '../../requires/conexion.php';
    $query="SELECT * FROM examen_fisico AS ef INNER JOIN cadete as cad ON ef.cadete_idCadete = cad.folio ORDER BY id_fisico DESC";
    $respuesta=$conn->query($query);

    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
    /** Include PHPExcel */
    require 'PHPExcel/Classes/PHPExcel.php';
    $objPHPExcel = new PHPExcel();

    $objPHPExcel->getProperties()->setCreator("Academia de Policia Municipal")
                   ->setTitle("C3");

    // Add some data
    $objPHPExcel->setActiveSheetIndex(0)
                ->mergeCells('A1:C1')
                ->setCellValue('A1', 'Datos Generales del aspirante')
                ->setCellValue('A2', 'Tipo de convocatoria')
                ->setCellValue('B2', 'Folio de registro')
                ->setCellValue('C2', 'Nombre del aspirante')
                ->mergeCells('D1:E1')
                ->setCellValue('D1', 'Resistencia')
                ->setCellValue('D2', 'Metros')
                ->setCellValue('E2', 'Calorias')
                ->mergeCells('F1:G1')
                ->setCellValue('F1', 'Flexiones')
                ->setCellValue('F2', 'Cantidad')
                ->setCellValue('G2', 'Calorias')
                ->mergeCells('H1:I1')
                ->setCellValue('H1', 'Abdominales')
                ->setCellValue('H2', 'Cantidad')
                ->setCellValue('I2', 'Calorias')
                ->mergeCells('J1:K1')
                ->setCellValue('J1', 'Lagartijas')
                ->setCellValue('J2', 'Cantidad')
                ->setCellValue('K2', 'Calorias')
                ->mergeCells('L1:M1')
                ->setCellValue('L1', 'Sentadillas')
                ->setCellValue('L2', 'Cantidad')
                ->setCellValue('M2', 'Calorias')
                ->mergeCells('N1:O1')
                ->setCellValue('N1', 'Velocidad')///----
                ->setCellValue('N2', 'Tiempo')
                ->setCellValue('O2', 'Calorias')
                ->setCellValue('P1', 'Manejo')
                ->setCellValue('Q1', 'Total de calorias')
                ->setCellValue('R1', 'Resultado')
                ->setCellValue('S1', 'Evaluador')
                ->setCellValue('T1', 'Fecha de evaluación');

    //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);
    while ($aptos=mysqli_fetch_array($respuesta)) {
          $celda_inicial=$celda_inicial+1;
          $objPHPExcel->setActiveSheetIndex(0)

                      ->setCellValue('A'.$celda_inicial, $aptos[21])
                      ->setCellValue('B'.$celda_inicial, $aptos[22])
                      ->setCellValue('C'.$celda_inicial, $aptos[25].' '.$aptos[23].' '.$aptos[24])
                      ->setCellValue('D'.$celda_inicial, $aptos[1])
                      ->setCellValue('E'.$celda_inicial, $aptos[2])
                      ->setCellValue('F'.$celda_inicial, $aptos[3])
                      ->setCellValue('G'.$celda_inicial, $aptos[4])
                      ->setCellValue('H'.$celda_inicial, $aptos[5])
                      ->setCellValue('I'.$celda_inicial, $aptos[6])
                      ->setCellValue('J'.$celda_inicial, $aptos[7])
                      ->setCellValue('K'.$celda_inicial, $aptos[8])
                      ->setCellValue('L'.$celda_inicial, $aptos[9])
                      ->setCellValue('M'.$celda_inicial, $aptos[10])
                      ->setCellValue('N'.$celda_inicial, $aptos[11])
                      ->setCellValue('O'.$celda_inicial, $aptos[12])
                      ->setCellValue('P'.$celda_inicial, $aptos[13])
                      ->setCellValue('Q'.$celda_inicial, $aptos[14])
                      ->setCellValue('R'.$celda_inicial, $aptos[15])
                      ->setCellValue('S'.$celda_inicial, $aptos[16])
                      ->setCellValue('T'.$celda_inicial, $aptos[18])
                      ;


    }
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(15);
    $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(25);
    $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(25);

    // Save Excel 2007 file
    //echo date('H:i:s') , " Write to Excel2007 format" , EOL;
    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(str_replace('.php', '.xlsx', "Lista_examen_fisico.xlsx"));
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;
  }

}

$examen = new Examenfisico();


 ?>
