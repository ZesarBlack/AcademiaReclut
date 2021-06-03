<?php
require('fpdf/fpdf.php');
require '../../requires/conexion.php';
if (isset($_POST['id_reingreso'])) {
  $id=$_POST['id_reingreso'];
  $query_resingresos = "SELECT * FROM cadete WHERE idCadete = '$id'";
  $resultado_reingresos = $conn->query($query_resingresos);
  $reingresos = mysqli_fetch_array($resultado_reingresos);

  $query_medico ="SELECT conclusion FROM exa_medico WHERE cadete_id = '$reingresos[3]'";
  $resultado_medico = $conn->query($query_medico);
  $medico = mysqli_fetch_array($resultado_medico);

  $query_fisico ="SELECT manejo, promedio ,resultado FROM examen_fisico WHERE cadete_idCadete = '$reingresos[3]'";
  $resultado_fisico = $conn->query($query_fisico);
  $fisico = mysqli_fetch_array($resultado_fisico);

  $conn->close();
}


class PDF extends FPDF
{

  function Header()
{
    // Logo
    $this->Image('../../logos/municipio.png',20,20,70,10);
    // Arial bold 15
    $this->SetFont('Arial','I',11);
    // Movernos a la derecha
    $this->SetY(20);
    $this->Cell(90);
    $texto=utf8_decode('Academia de Formalización y Profesionalización');
    $this->Cell(0,0,$texto);
    $this->SetY(25);
    $this->Cell(130);
    $this->Cell(0,0,'del Municipio de Puebla');
    $this->Ln(40);
}

  function PrintChapter()
{
    $this->AddPage();
  //  $this->ChapterBody($file);
}
}

setlocale(LC_TIME, 'es_ES');
$dia=date("d");
$mes=date("F");
$aÃ±o=date("Y");

if ($mes=="January") {
// code...
$mes="Enero";
}elseif ($mes=="February") {
// code...
$mes="Febrero";
}elseif ($mes=="March") {
// code...
$mes="Marzo";
}elseif ($mes=="April") {
// code...
$mes="Abril";
}elseif ($mes=="May") {
// code...
$mes="Mayo";
}elseif ($mes=="June") {
// code...
$mes="Junio";
}elseif ($mes=="July") {
// code...
$mes="Julio";
}elseif ($mes=="August") {
// code...
$mes="Agosto";
}elseif ($mes=="September") {
// code...
$mes="Septiembre";
}elseif ($mes=="October") {
// code...
$mes="Octubre";
}elseif ($mes=="November") {
// code...
$mes="Noviembre";
}elseif ($mes=="December") {
// code...
$mes="Diciembre";
}






$pdf = new PDF('P','mm',array(279, 216));
$pdf->SetAutoPageBreak(true,20);
$pdf->SetMargins(15.0,10.0,20.0);

$pdf->PrintChapter();
$pdf->SetFont('Arial','B',15);
// Move to 8 cm to the right
$pdf->SetY(40);
$pdf->SetX(40);
$pdf->Cell(0,0,'Datos generales del aspirante (Reingreso)');
$pdf->SetY(40);
$pdf->SetX(100);
$pdf->SetFont('Arial','',9);
//setlocale(LC_TIME, "es_ES");
$pdf->Cell(0,15,'H. Puebla de Zaragoza, a '.$dia.' de '.strftime($mes).' del '.$aÃ±o,0,1);
$pdf->Cell(0,10,'CONVOCATORIA: '.$reingresos[2],0,1);
$pdf->SetY(55);
$pdf->SetX(150);
$pdf->Cell(0,10,"Folio: ".$reingresos[3],0,1);
$pdf->Cell(0,0,"",1,1);
$pdf->Cell(0,10,utf8_decode("Nombre Completo: ". $reingresos[4]." ".$reingresos[5]." ".$reingresos[6]),0,1);
$pdf->Cell(0,0,"",1,1);
$nuevafecha = date("d/m/Y", strtotime($reingresos[7]));
$pdf->Cell(0,10,'Fecha de Nacimiento: '.$nuevafecha,0,1);
$pdf->Cell(0,0,"",'B',0);
$pdf->SetY(80);
$pdf->SetX(88);
$pdf->Cell(0,0,'Edad: '.$reingresos[8],0,0);
$pdf->Cell(0,0,"",1,1);
//$pdf->SetY(80);
$pdf->SetX(130);
$pdf->Cell(0,0,'Genero: '.$reingresos[9],0,1);

$pdf->Cell(0,20,utf8_decode('Calle: '.$reingresos[20]),0,1);
$pdf->Cell(0,2,"",'B',0);
$pdf->SetY(90);
$pdf->SetX(88);
$pdf->Cell(0,0,'No exterior: '.$reingresos[21],0,1);
$pdf->Cell(0,2,"",'B',0);
//$pdf->SetY(100);
$pdf->SetX(130);
$pdf->Cell(0,0,'No interior: '.$reingresos[22],0,1);
$pdf->Cell(0,2,"",'B',0);
//$pdf->SetY(100);
$pdf->SetX(160);
$pdf->Cell(0,0,'CP: '.$reingresos[23],0,1);
$pdf->Cell(0,20,'Colonia: '.$reingresos[24],0,1);
$pdf->Cell(0,2,"",'B',0);
$pdf->SetY(100);
$pdf->SetX(88);
$pdf->Cell(0,0,utf8_decode('Municipio: '.$reingresos[25]),0,1);
//$pdf->SetY(110);
$pdf->SetX(160);
$pdf->Cell(0,0,'Estado: '.$reingresos[26],'L',1);
$pdf->Cell(0,20,'Tel.Celular: '.$reingresos[12],0,1);
$pdf->Cell(0,2,"",'B',0);
$pdf->SetY(110);
$pdf->SetX(88);
$pdf->Cell(0,0,'Tel.1: '.$reingresos[13],0,1);
//$pdf->SetY(120);
$pdf->SetX(135);
$pdf->Cell(0,0,'Tel.2: '.$reingresos[14],0,1);
$pdf->Cell(0,20,'Estado Civil: '.$reingresos[17],0,1);
$pdf->Cell(0,2,"",'B',0);
$pdf->SetY(120);
$pdf->SetX(88);
$pdf->Cell(0,0,utf8_decode('último grado de estudios:  '.$reingresos[15]),0,1);
$pdf->Cell(0,20,utf8_decode('Correo Electrónico:  '.$reingresos[11]),0,1);
$pdf->Cell(0,2,"",'B',0);
$pdf->SetY(130);
$pdf->SetX(125);
$pdf->Cell(0,0,utf8_decode('Ex policia o Ex militar:  '.$reingresos[16]),0,1);
$pdf->Cell(0,20,utf8_decode('Medio por el cual se enteró del empleo:  '.$reingresos[18]),0,1);
$pdf->SetY(142);

if (empty($medico) && empty($fisico)) {
  $pdf->Cell(180, 10 , utf8_decode("Conclusión del examen medico: "),'B',  1);
  $pdf->Cell(30, 10 , utf8_decode("Sabe conducir: "), 'B' );
  $pdf->Cell(30, 10 , utf8_decode("Calificación examen físico: "), 'B' );
  $pdf->Cell(120, 10 , utf8_decode("Conclusión examen físico: "), 'B' );
  // code...
}elseif (!empty($medico) && empty($fisico)) {
  $pdf->Cell(180, 10 , utf8_decode("Conclusión del examen medico: ".$medico[0]),'B',  1);
  $pdf->Cell(30, 10 , utf8_decode("Sabe conducir: "), 'B' );
  $pdf->Cell(30, 10 , utf8_decode("Calificación examen físico: "), 'B' );
  $pdf->Cell(120, 10 , utf8_decode("Conclusión examen físico: "), 'B' );
  // code...
} elseif (empty($medico) && !empty($fisico)) {
  // code...
  $pdf->Cell(180, 10 , utf8_decode("Conclusión del examen medico: "),'B',  1);
  $pdf->Cell(40, 10 , utf8_decode("Sabe conducir: ".$fisico[0]), 'B' );
  $pdf->Cell(70, 10 , utf8_decode("Calificación examen físico: ".$fisico[1]), 'B' );
  $pdf->Cell(70, 10 , utf8_decode("Conclusión examen físico: ".$fisico[2]), 'B' );
}else {
  $pdf->Cell(180, 10 , utf8_decode("Conclusión del examen medico: ".$medico[0]),'B',  1);
  $pdf->Cell(40, 10 , utf8_decode("Sabe conducir: ".$fisico[0]), 'B' );
  $pdf->Cell(70, 10 , utf8_decode("Calificación examen físico: ".$fisico[1]), 'B' );
  $pdf->Cell(70, 10 , utf8_decode("Conclusión examen físico: ".$fisico[2]), 'B' );
}

if ($reingresos[16]=='SI') {
  $pdf->SetY(140);
  $pdf->SetX(125);
  $pdf->Cell(0,0,utf8_decode('Dependencia :  '.$reingresos[19]),0,1);
}else {
  $pdf->SetY(140);
  $pdf->SetX(115);
}

$pdf->SetFont('Arial','B',11);

$pdf->SetXY(80, 155);
$pdf->Cell(0,20,utf8_decode('Documentación entregada'),0,1);

$pdf->SetFont('Arial','',9);

$pdf->SetY(170);
$pdf->Cell(113,5,utf8_decode(''),1,1);

$pdf->SetY(170);
$pdf->SetX(128);
$pdf->Cell(6,5,utf8_decode(''),1,1);

$pdf->SetY(170);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode('Observación'),1,1);

$pdf->Cell(113,5,utf8_decode('1. Solicitud de empleo con fotografía, escrita de puño y letra'),1,1);
$pdf->SetY(175);
$pdf->SetX(128);
if ($reingresos[27] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(175);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[28]),1,1);

$pdf->Cell(113,5,utf8_decode('2. Copia de acta de Nacimiento de reciente expedición'),1,1);
$pdf->SetY(180);
$pdf->SetX(128);
if ($reingresos[29] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(180);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[30]),1,1);
$pdf->Cell(113,5,utf8_decode('3. Clave Unica Registro de Población (CURP)'),1,1);
$pdf->SetY(185);
$pdf->SetX(128);
if ($reingresos[31] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(185);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[32]),1,1);
$pdf->Cell(113,5,utf8_decode('4. Identificación Oficial con fotografía vigente'),1,1);
$pdf->SetY(190);
$pdf->SetX(128);
if ($reingresos[33] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(190);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[34]),1,1);
$pdf->Cell(113,5,utf8_decode('5. Licencia de manejo vigente (chofer o automovilista)'),1,1);
$pdf->SetY(195);
$pdf->SetX(128);
if ($reingresos[35] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(195);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[36]),1,1);
$pdf->Cell(113,5,utf8_decode('6. Constancia vigente de No Antecedentes Penales'),1,1);
$pdf->SetY(200);
$pdf->SetX(128);
if ($reingresos[37] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(200);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[38]),1,1);
$pdf->Cell(113,5,utf8_decode('7. Comprobante de estudios (Bachillerato mínimo)'),1,1);
$pdf->SetY(205);
$pdf->SetX(128);
if ($reingresos[39] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(205);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[40]),1,1);
$pdf->Cell(113,5,utf8_decode('8. Cartilla Liberada del SMN'),1,1);
$pdf->SetY(210);
$pdf->SetX(128);
if ($reingresos[41] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(210);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[42]),1,1);
$pdf->Cell(113,5,utf8_decode('9. Constancia de no estar suspendido o inhabilitado'),1,1);
$pdf->SetY(215);
$pdf->SetX(128);
if ($reingresos[43] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(215);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[44]),1,1);
$pdf->Cell(113,5,utf8_decode('10. Baja voluntaria de las fuerzas armadas, seguridad pública o privada'),1,1);
$pdf->SetY(220);
$pdf->SetX(128);
if ($reingresos[45] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(220);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[46]),1,1);
$pdf->Cell(113,5,utf8_decode('11. Comprobante de domicilio vigente'),1,1);
$pdf->SetY(225);
$pdf->SetX(128);
if ($reingresos[47] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(225);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[48]),1,1);
$pdf->Cell(113,5,utf8_decode('12. Tres referencias personales (no familiares)'),1,1);
$pdf->SetY(230);
$pdf->SetX(128);
if ($reingresos[49] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(230);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[50]),1,1);
$pdf->Cell(113,5,utf8_decode('13. Curriculum con fotografí­a vigente'),1,1);
$pdf->SetY(235);
$pdf->SetX(128);
if ($reingresos[51] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(235);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[52]),1,1);
$pdf->Cell(113,5,utf8_decode('14. Registro Federal de Contribuyentes (RFC)'),1,1);
$pdf->SetY(240);
$pdf->SetX(128);
if ($reingresos[53] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(240);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[54]),1,1);
$pdf->Cell(113,5,utf8_decode('15. Número de Seguridad Social (IMSS)'),1,1);
$pdf->SetY(245);
$pdf->SetX(128);
if ($reingresos[55] =="Si") {
  $pdf->Cell(6,5,utf8_decode("SÍ"),1,1);
}else {
  $pdf->Cell(6,5,utf8_decode("NO"),1,1);
}
$pdf->SetY(245);
$pdf->SetX(134);
$pdf->Cell(49,5,utf8_decode($reingresos[56]),1,1);
$pdf->Close();

$pdf->Output("FichaDeRegistro.pdf","D");


 ?>
