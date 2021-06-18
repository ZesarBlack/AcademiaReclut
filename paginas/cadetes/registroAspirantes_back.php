<?php
//require 'pdf.php';
//require('fpdf/fpdf.php');
    $error = false;
    if(isset($_POST['llenado'])){
        $llenado = $_POST['llenado'];
    }
    if (isset($_POST["estado"])) {
        $estado=$_POST["estado"];
    }
    if (isset($_POST["dependencia_anterior"])) {
        $dep_acterior = $_POST["dependencia_anterior"];
    }else {
      $dep_acterior = "No ex policia ni ex militar";
    }
    if(isset($_POST['tipoIngreso'])){
        if(strlen($_POST['tipoIngreso']) <= 45){
            $tipoIngreso = $_POST['tipoIngreso'];
        }
    }
    if(isset($_POST['folio'])){
        if(strlen($_POST['folio']) <= 45){
            $folio = $_POST['folio'];
        }else{
            echo "<script>alert('El Folio debe de contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['paterno'])){
        if(strlen($_POST['paterno']) <= 45){
            $paterno = $_POST['paterno'];
        }else{
            echo "<script>alert('El Apellido Paterno debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['materno'])){
        if(strlen($_POST['materno']) <= 45){
            $materno = $_POST['materno'];
        }else{
            echo "<script>alert('El Apellido Materno debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['nombre'])){
        if(strlen($_POST['nombre']) <= 45){
            $nombre = $_POST['nombre'];
        }else{
            echo "<script>alert('El nombre debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['fechan'])){
        if(strlen($_POST['fechan']) <= 45){
            $fechan = $_POST['fechan'];
        }else{
            echo "<script>alert('La fecha de nacimiento debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['edad'])){

        if(strlen( $_POST[ 'edad' ] ) <= 45 ){
            if( is_numeric( $_POST['edad'])){
                $edad = $_POST['edad'];
            }else{
                echo "<script>alert('Verifique el valor de edad proporcionado');</script>";
                echo "<html><head></head>".
                "<body onload=\"javascript:history.back()\">".
                "</body></html>";
                exit;
            }
        }else{
            echo "<script>alert('La fecha de nacimiento debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }

      //$edad = $_POST['edad'];
    }
    if(isset($_POST['genero'])){
        if(strlen($_POST['genero']) <= 45){
            $genero = $_POST['genero'];
        }else{
            echo "<script>alert('El genero debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['curp'])){
        if(strlen($_POST['curp']) <= 45){
            $curp = $_POST['curp'];
        }else{
            echo "<script>alert('El curp debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['correo'])){
        if(strlen($_POST['correo']) <= 45){
            $correo = $_POST['correo'];
        }else{
            echo "<script>alert('El correo debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }

    if(isset($_POST['celular'])){
        if(strlen( $_POST[ 'celular' ] ) <= 45 ){
            if( is_numeric( $_POST['celular'])){
                $celular = $_POST['celular'];
            }else{
                $celular = "";
                /*
                echo "<script>alert('Verifique el valor de celular proporcionadoxxx');</script>";
                echo "<html><head></head>".
                "<body onload=\"javascript:history.back()\">".
                "</body></html>";
                exit;
                */
            }
        }else{
            echo "<script>alert('El celular debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['telef-1'])){
        if(strlen( $_POST[ 'telef-1' ] ) <= 45 ){
            if( is_numeric( $_POST['telef-1'])){
                $telef1 = $_POST['telef-1'];
            }else{
              $telef1 = "";
              /*
                echo "<script>alert('Verifique el valor del telefono 1 proporcionado');</script>";
                echo "<html><head></head>".
                "<body onload=\"javascript:history.back()\">".
                "</body></html>";
                exit;
                */
            }
        }else{
            echo "<script>alert('El telefono 1 debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['telef-2'])){
        if(strlen( $_POST[ 'telef-2' ] ) <= 45 ){
            if( is_numeric( $_POST['telef-2'])){
                $telef2 = $_POST['telef-2'];
            }else{
              $telef2 = "";
              /*
                echo "<script>alert('Verifique el valor de telefono 2 proporcionado');</script>";
                echo "<html><head></head>".
                "<body onload=\"javascript:history.back()\">".
                "</body></html>";
                exit;
                */
            }
        }else{
            echo "<script>alert('El telefono 2 debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }

    if(isset($_POST['grado_es'])){
        if(strlen($_POST['grado_es']) <= 45){
            $grado_es = $_POST['grado_es'];
        }else{
            echo "<script>alert('El último grado de estudios debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['exPoli'])){
        $exPoli = $_POST['exPoli'];
    }
    if(isset($_POST['estadoCivil'])){
        if(strlen($_POST['estadoCivil']) <= 45){
            $estadoCivil = $_POST['estadoCivil'];
        }else{
            echo "<script>alert('El estado civil debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['medioInfo'])){
        if(strlen($_POST['medioInfo']) <= 45){
            $medioInfo = $_POST['medioInfo'];
        }else{
            echo "<script>alert('El medio de informacion debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['calle'])){
        if(strlen($_POST['calle']) <= 45){
            $calle = $_POST['calle'];
        }else{
            echo "<script>alert('La calle debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['ext'])){
        if(strlen($_POST['ext']) <= 45){
            $ext = $_POST['ext'];
        }else{
            echo "<script>alert('El numero exterior  debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['int'])){
        if(strlen($_POST['int']) <= 45){
            $int = $_POST['int'];
        }else{
            echo "<script>alert('El numero interior  debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['codpostal'])){
        if(strlen( $_POST[ 'codpostal' ] ) == 5 ){
            if( is_numeric( $_POST['codpostal'])){
                $codpostal = $_POST['codpostal'];
            }else{
                echo "<script>alert('Verifique el valor del codigo postal proporcionado');</script>";
                echo "<html><head></head>".
                "<body onload=\"javascript:history.back()\">".
                "</body></html>";
                exit;
            }
        }else{
            echo "<script>alert('El codigo postal debe contener 5 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['colonia'])){
        if(strlen($_POST['colonia']) <= 45){
            $colonia = $_POST['colonia'];
        }else{
            echo "<script>alert('La colonia debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['municipio'])){
        if(strlen($_POST['municipio']) <= 45){
            $municipio = $_POST['municipio'];
        }else{
            echo "<script>alert('El municipio debe contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['solicitud_completa'])){
        $solicitud_completa = $_POST['solicitud_completa'];
    }
    if(isset($_POST['solicitud_observacion'])){
        if(strlen($_POST['solicitud_observacion']) <= 45){
            $solicitud_observacion = $_POST['solicitud_observacion'];
        }else{
            echo "<script>alert('Las observaciones de la solicitud de empleo deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['acta_nac'])){
        $acta_nac = $_POST['acta_nac'];
    }
    if(isset($_POST['acta_nac_observacion'])){
        if(strlen($_POST['acta_nac_observacion']) <= 45){
            $acta_nac_observacion = $_POST['acta_nac_observacion'];
        }else{
            echo "<script>alert('Las observaciones del acta de nacimiento deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['doc_curp'])){
        $doc_curp = $_POST['doc_curp'];
    }
    if(isset($_POST['doc_curp_observacion'])){
        if(strlen($_POST['doc_curp_observacion']) <= 45){
            $doc_curp_observacion = $_POST['doc_curp_observacion'];
        }else{
            echo "<script>alert('Las observaciones del curp deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['doc_id'])){
        $doc_id = $_POST['doc_id'];
    }
    if(isset($_POST['doc_id_observacion'])){
        if(strlen($_POST['doc_id_observacion']) <= 45){
            $doc_id_observacion= $_POST['doc_id_observacion'];
        }else{
            echo "<script>alert('Las observaciones del documento de identificación deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['doc_licencia'])){
        $doc_licencia = $_POST['doc_licencia'];
    }
    if(isset($_POST['doc_licencia_observacion'])){
        if(strlen($_POST['doc_licencia_observacion']) <= 45){
            $doc_licencia_observacion = $_POST['doc_licencia_observacion'];
        }else{
            echo "<script>alert('Las observaciones de la licencia de conducir deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['const_ante'])){
        $const_ante = $_POST['const_ante'];
    }
    if(isset($_POST['const_ante_observacion'])){
        if(strlen($_POST['doc_licencia_observacion']) <= 45){
            $const_ante_observacion = $_POST['const_ante_observacion'];
        }else{
            echo "<script>alert('Las observaciones de la licencia de conducir deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['comp_estudios'])){
        $comp_estudios = $_POST['comp_estudios'];
    }
    if(isset($_POST['comp_estudios_observacion'])){
        if(strlen($_POST['comp_estudios_observacion']) <= 45){
            $comp_estudios_observacion = $_POST['comp_estudios_observacion'];
        }else{
            echo "<script>alert('Las observaciones del comprobante de estudios deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['cartilla'])){
        $cartilla = $_POST['cartilla'];
    }
    if(isset($_POST['cartilla_observacion'])){
        if(strlen($_POST['cartilla_observacion']) <= 45){
            $cartilla_observacion = $_POST['cartilla_observacion'];
        }else{
            echo "<script>alert('Las observaciones de la cartilla del servicio militar deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['const_no_sus'])){
        $const_no_sus = $_POST['const_no_sus'];
    }
    if(isset($_POST['const_no_sus_observacion'])){
        if(strlen($_POST['const_no_sus_observacion']) <= 45){
            $const_no_sus_observacion = $_POST['const_no_sus_observacion'];
        }else{
            echo "<script>alert('Las observaciones de la constancia de no habilitación deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['baja_voluntaria'])){
        $baja_voluntaria = $_POST['baja_voluntaria'];
    }
    if(isset($_POST['baja_voluntaria_observacion'])){
        if(strlen($_POST['baja_voluntaria_observacion']) <= 45){
            $baja_voluntaria_observacion = $_POST['baja_voluntaria_observacion'];
        }else{
            echo "<script>alert('Las observaciones de la baja voluntaria deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['comp_domicilio'])){
        $comp_domicilio = $_POST['comp_domicilio'];
    }
    if(isset($_POST['comp_domicilio_observacion'])){
        if(strlen($_POST['comp_domicilio_observacion']) <= 45){
            $comp_domicilio_observacion = $_POST['comp_domicilio_observacion'];
        }else{
            echo "<script>alert('Las observaciones del comprobante de comicilio deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['referencias'])){
        $referencias = $_POST['referencias'];
    }
    if(isset($_POST['referencias_observacion'])){
        if(strlen($_POST['referencias_observacion']) <= 45){
            $referencias_observacion = $_POST['referencias_observacion'];
        }else{
            echo "<script>alert('Las observaciones de las referencias deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['curriculum'])){
        $curriculum = $_POST['curriculum'];
    }
    if(isset($_POST['curriculum_observacion'])){
        if(strlen($_POST['curriculum_observacion']) <= 45){
            $curriculum_observacion = $_POST['curriculum_observacion'];
        }else{
            echo "<script>alert('Las observaciones del curriculum vitae deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['rfc'])){
        $rfc = $_POST['rfc'];
    }
    if(isset($_POST['rfc_observacion'])){
        if(strlen($_POST['rfc_observacion']) <= 45){
            $rfc_observacion = $_POST['rfc_observacion'];
        }else{
            echo "<script>alert('Las observaciones del RFC deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }
    if(isset($_POST['imss'])){
        $imss = $_POST['imss'];
    }
    if(isset($_POST['imss_observacion'])){
        if(strlen($_POST['imss_observacion']) <= 45){
            $imss_observacion = $_POST['imss_observacion'];
        }else{
            echo "<script>alert('Las observaciones del numero de seguridad social deben contener menos de 45 caracteres');</script>";
            echo "<html><head></head>".
            "<body onload=\"javascript:history.back()\">".
            "</body></html>";
            exit;
        }
    }

if (isset($_POST["curp"])) {
  require('fpdf/fpdf.php');
  class PDF extends FPDF
  {
        protected $B = 0;
        protected $I = 0;
        protected $U = 0;
        protected $HREF = '';

        function WriteHTML($html)
        {
            // HTML parser
            $html = str_replace("\n",' ',$html);
            $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
            foreach($a as $i=>$e)
            {
                if($i%2==0)
                {
                    // Text
                    if($this->HREF)
                        $this->PutLink($this->HREF,$e);
                    else
                        $this->Write(5,$e);
                }
                else
                {
                    // Tag
                    if($e[0]=='/')
                        $this->CloseTag(strtoupper(substr($e,1)));
                    else
                    {
                        // Extract attributes
                        $a2 = explode(' ',$e);
                        $tag = strtoupper(array_shift($a2));
                        $attr = array();
                        foreach($a2 as $v)
                        {
                            if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                                $attr[strtoupper($a3[1])] = $a3[2];
                        }
                        $this->OpenTag($tag,$attr);
                    }
                }
            }
        }
        function OpenTag($tag, $attr)
        {
            // Opening tag
            if($tag=='B' || $tag=='I' || $tag=='U')
                $this->SetStyle($tag,true);
            if($tag=='A')
                $this->HREF = $attr['HREF'];
            if($tag=='BR')
                $this->Ln(5);
        }

        function CloseTag($tag)
        {
            // Closing tag
            if($tag=='B' || $tag=='I' || $tag=='U')
                $this->SetStyle($tag,false);
            if($tag=='A')
                $this->HREF = '';
        }

        function SetStyle($tag, $enable)
        {
            // Modify style and select corresponding font
            $this->$tag += ($enable ? 1 : -1);
            $style = '';
            foreach(array('B', 'I', 'U') as $s)
            {
                if($this->$s>0)
                    $style .= $s;
            }
            $this->SetFont('',$style);
        }

        function PutLink($URL, $txt)
        {
            // Put a hyperlink
            $this->SetTextColor(0,0,255);
            $this->SetStyle('U',true);
            $this->Write(5,$txt,$URL);
            $this->SetStyle('U',false);
            $this->SetTextColor(0);
        }
    function Header()
  {
      // Logo
      $this->Image('../../logos/municipio.png',20,20,70,10);
      // Arial bold 15
      $this->SetFont('Arial','I',9);
      // Movernos a la derecha
      $this->SetY(20);
      $this->Cell(90);
      $texto=utf8_decode('Academia de Formalización y Profesionalizacion');
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
  $pdf->Cell(0,0,'Ficha de entrega de documentos para aspirantes');
  $pdf->SetY(40);
  $pdf->SetX(100);
  $pdf->SetFont('Arial','',9);
  //setlocale(LC_TIME, "es_ES");
  $pdf->Cell(0,15,'H. Puebla de Zaragoza, a '.$dia.' de '.strftime($mes).' del '.$aÃ±o,0,1);
  $pdf->Cell(0,10,'CONVOCATORIA:'.$tipoIngreso,0,1);
  $pdf->SetY(55);
  $pdf->SetX(160);
  $pdf->Cell(0,10,"Folio: $folio",0,1);
  $pdf->Cell(0,10,utf8_decode("Nombre Completo:  ". $paterno." ".$materno." ".$nombre),0,1);
  $nuevafecha = date("d/m/Y", strtotime($fechan));
  $pdf->Cell(0,10,'Fecha de Nacimiento:  '.$nuevafecha,0,1);
  $pdf->Cell(0,0,"",'B',0);
  $pdf->SetY(80);
  $pdf->SetX(90);
  $pdf->Cell(0,0,'Edad:  '.$edad,0,1);
  //$pdf->SetY(80);
  $pdf->SetX(130);
  $pdf->Cell(0,0,'Genero: '.$genero,0,1);
  $pdf->Cell(0,20,utf8_decode('Calle: '.$calle),0,1);
  $pdf->Cell(0,2,"",'B',0);
  $pdf->SetY(90);
  $pdf->SetX(90);
  $pdf->Cell(0,0,'No exterior: '.$ext,0,1);
  //$pdf->SetY(100);
  $pdf->SetX(130);
  $pdf->Cell(0,0,'No interior: '.$int,0,1);
  $pdf->Cell(0,2,"",'B',0);
  //$pdf->SetY(100);
  $pdf->SetX(160);
  $pdf->Cell(0,0,'CP:'.$codpostal,0,1);
  $pdf->Cell(0,20,'Colonia: '.$colonia,0,1);
  $pdf->Cell(0,2,"",'B',0);
  $pdf->SetY(100);
  $pdf->SetX(90);
  $pdf->Cell(0,0,utf8_decode('Municipio: '.$municipio),0,1);
  //$pdf->SetY(110);
  $pdf->SetX(160);
  $pdf->Cell(0,0,'Estado: '.$estado,0,1);
  $pdf->Cell(0,20,'Tel.Celular: '.$celular,0,1);
  $pdf->Cell(0,2,"",'B',0);
  $pdf->SetY(110);
  $pdf->SetX(90);
  $pdf->Cell(0,0,'Tel.1: '.$telef1,0,1);
  //$pdf->SetY(120);
  $pdf->SetX(130);
  $pdf->Cell(0,0,'Tel.2: '.$telef2,0,1);
  $pdf->Cell(0,20,'Estado Civil: '.$estadoCivil,0,1);
  $pdf->Cell(0,2,"",'B',0);
  $pdf->SetY(120);
  $pdf->SetX(90);
  $pdf->Cell(0,0,utf8_decode('último grado de estudios:  '.$grado_es),0,1);
  $pdf->Cell(0,20,utf8_decode('Correo Electrónico:  '.$correo),0,1);
  $pdf->Cell(0,2,"",'B',0);
  $pdf->SetY(130);
  $pdf->SetX(125);
  $pdf->Cell(0,0,utf8_decode('Ex policia o Ex militar:  '.$exPoli),0,1);
  $pdf->Cell(0,20,utf8_decode('Medio por el cual se enteró del empleo:  '.$medioInfo),0,1);
  if ($exPoli=='SI') {
    $pdf->SetY(140);
    $pdf->SetX(125);
    $pdf->Cell(0,0,utf8_decode('Dependencia :  '.$dep_acterior),0,1);
  }else {
    $pdf->SetY(140);
    $pdf->SetX(115);

  }
  $pdf->SetFont('Arial','B',13);
  $pdf->SetX(80);
  $pdf->Cell(0,20,utf8_decode('Documentación entregada'),0,1);

  $pdf->SetFont('Arial','',10);

  $pdf->SetY(155);
  $pdf->Cell(113,5,utf8_decode(''),1,1);

  $pdf->SetY(155);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode(''),1,1);

  $pdf->SetY(155);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode('Observación'),1,1);


  $pdf->Cell(113,5,utf8_decode('1. Solicitud de empleo con fotografía, escrita de puño y letra'),1,1);
  $pdf->SetY(160);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($solicitud_completa),1,1);
  $pdf->SetY(160);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($solicitud_observacion),1,1);

  $pdf->Cell(113,5,utf8_decode('2. Copia de acta de Nacimiento de reciente expedición'),1,1);
  $pdf->SetY(165);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($acta_nac),1,1);
  $pdf->SetY(165);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($acta_nac_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('3. Clave Unica Registro de Población (CURP)'),1,1);
  $pdf->SetY(170);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($doc_curp),1,1);
  $pdf->SetY(170);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($doc_curp_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('4. Identificación Oficial con fotografía vigente'),1,1);
  $pdf->SetY(175);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($doc_id),1,1);
  $pdf->SetY(175);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($doc_id_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('5. Licencia de manejo vigente (chofer o automovilista)'),1,1);
  $pdf->SetY(180);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($doc_licencia),1,1);
  $pdf->SetY(180);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($doc_licencia_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('6. Constancia vigente de No Antecedentes Penales'),1,1);
  $pdf->SetY(185);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($const_ante),1,1);
  $pdf->SetY(185);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($const_ante_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('7. Comprobante de estudios (Bachillerato mínimo)'),1,1);
  $pdf->SetY(190);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($comp_estudios),1,1);
  $pdf->SetY(190);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($comp_estudios_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('8. Cartilla Liberada del SMN'),1,1);
  $pdf->SetY(195);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($cartilla),1,1);
  $pdf->SetY(195);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($cartilla_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('9. Constancia de no estar suspendido o inhabilitado'),1,1);
  $pdf->SetY(200);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($const_no_sus),1,1);
  $pdf->SetY(200);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($const_no_sus_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('10. Baja voluntaria de las fuerzas armadas, seguridad pública o privada'),1,1);
  $pdf->SetY(205);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($baja_voluntaria),1,1);
  $pdf->SetY(205);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($baja_voluntaria_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('11. Comprobante de domicilio vigente'),1,1);
  $pdf->SetY(210);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($comp_domicilio),1,1);
  $pdf->SetY(210);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($comp_domicilio_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('12. Tres referencias personales (no familiares)'),1,1);
  $pdf->SetY(215);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($referencias),1,1);
  $pdf->SetY(215);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($referencias_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('13. Curriculum con fotografí­a vigente'),1,1);
  $pdf->SetY(220);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($curriculum),1,1);
  $pdf->SetY(220);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($curriculum_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('14. Registro Federal de Contribuyentes (RFC)'),1,1);
  $pdf->SetY(225);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($rfc),1,1);
  $pdf->SetY(225);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($rfc_observacion),1,1);
  $pdf->Cell(113,5,utf8_decode('15. Número de Seguridad Social (IMSS)'),1,1);
  $pdf->SetY(230);
  $pdf->SetX(128);
  $pdf->Cell(6,5,utf8_decode($imss),1,1);
  $pdf->SetY(230);
  $pdf->SetX(134);
  $pdf->Cell(49,5,utf8_decode($imss_observacion),1,1);
  //$pdf->Multicell(0,5,utf8_decode('Nota: En caso de existir un faltante en la documentaciÃ³n requerida, tendrÃ¡ que acordar un plazo por escrito para su entrega con el encargado del Ã¡rea de Reclutamiento y SelecciÃ³n.'),0,1);

  $pdf->PrintChapter();
  $pdf->SetFont('Arial','',9);
  $pdf->SetY(30);
  $pdf->Multicell(0,5,utf8_decode('Observaciones: Derivado de la convocatoria para Policia Preventivo Municipal, Mujeres y Hombres tendrán
  Oportunidad Equitativa de Empleo en este proceso de reclutamiento y selección, de igual manera no se hará¡
  distinción, exclusión o restricción con base en el origen étnico, condición económica o social, religión, opiniones,
  género y/o estado civil. El aspirante declara que la documentación que entregó es la que se relaciona con el
  presente formato y guarda en su poder los originales.

  AVISO DE PRIVACIDAD Y MANEJO DE DATOS PERSONALES

  La Academia de Formación y Profesionalización Policial del Municipio de Puebla, a través del área de Reclutamiento
  y Selección, con domicilio en Av. Gasoducto s/n Col. Bosques de San Sebastián, Puebla, Puebla. Es responsable
  del tratamiento de sus datos personales y el resguardo de las fotocopias de la documentación que entrega para
  iniciar el proceso de selección.

  Los datos que le solicitamos serán utilizados para el registro de aspirantes en la base de datos, programación para
  realizar: la evaluación del Control de Confianza, la solicitud de los resultados, el ingreso a la Academia de los
  aspirantes que aprueben, para la elaboración de informes y estadísticas. Para mayor información sobre este aviso
  puede solicitarla al Tel. de atención 2 1854 88 / 2 18 54 89.'),0,1);
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Cell(0,2,utf8_decode('                ___________________________                                            ___________________________'),0,1);
  $pdf->Cell(0,5,utf8_decode('                 Nombre y Firma del Aspirante                                                 Nombre y Firma de quien recibe'),0,1);

  $pdf->Ln();
  $pdf->Ln();
  $pdf->SetFont('Arial','B',9);
  $pdf->Cell(0,5,'-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1);
  $pdf->SetFont('Arial','',9);
  $pdf->Multicell(0,5,utf8_decode('Observaciones: Derivado de la convocatoria para Policia Preventivo Municipal, Mujeres y Hombres tendrán
  Oportunidad Equitativa de Empleo en este proceso de reclutamiento y selección, de igual manera no se hará¡
  distinción, exclusiÃ³n o restricción con base en el origen étnico, condición económica o social, religión, opiniones,
  género y/o estado civil. El aspirante declara que la documentación que entrega es la que se relaciona con el
  presente formato y guarda en su poder los originales.

  AVISO DE PRIVACIDAD Y MANEJO DE DATOS PERSONALES

  La Academia de Formación y Profesionalización Policial del Municipio de Puebla, a través del área de Reclutamiento
  y Selección, con domicilio en Av. Gasoducto s/n Col. Bosques de San Sebastián, Puebla, Puebla. Es responsable
  del tratamiento de sus datos personales y el resguardo de las fotocopias de la documentación que entrega para
  iniciar el proceso de selección.

  Los datos que le solicitamos serán utilizados para el registro de aspirantes en la base de datos, programación para
  realizar: la evaluación del Control de Confianza, la solicitud de los resultados, el ingreso a la Academia de los
  aspirantes que aprueben, para la elaboración de informes y estadísticas. Para mayor información sobre este aviso
  puede solicitarla al Tel. de atención 2 1854 88 / 2 18 54 89.'),0,1);
  $pdf->Ln();
  $pdf->Ln();

  $pdf->Cell(0,2,utf8_decode('                ___________________________                                            ___________________________'),0,1);
  $pdf->Cell(0,5,utf8_decode('                 Nombre y Firma del Aspirante                                                 Nombre y Firma de quien recibe'),0,1);
  $pdf->Close();
  $filename="test.pdf";
  $pdf->Output('FichaAspirante.pdf','D');

}


$aspirante = new Aspirante();

      //$_POST['rfc'],$_POST['nolic'],$_POST['nocartilla'];

      if (isset($_POST['folio'])) {
        $aspirante->nuevo($llenado, $tipoIngreso, $folio, $paterno, $materno, $nombre, $fechan, $edad, $genero, $curp,
        $correo, $_POST['celular'], $_POST['telef-1'], $_POST['telef-2'], $grado_es, $exPoli, $estadoCivil, $medioInfo, $dep_acterior ,$calle, $ext, $int,
        $codpostal, $colonia, $municipio, $estado, $solicitud_completa, $solicitud_observacion, $acta_nac, $acta_nac_observacion, $doc_curp, $doc_curp_observacion, $doc_id, $doc_id_observacion,
        $doc_licencia, $doc_licencia_observacion, $const_ante, $const_ante_observacion, $comp_estudios, $comp_estudios_observacion, $cartilla, $cartilla_observacion, $const_no_sus, $const_no_sus_observacion, $baja_voluntaria,
        $baja_voluntaria_observacion, $comp_domicilio, $comp_domicilio_observacion, $referencias, $referencias_observacion, $curriculum, $curriculum_observacion, $rfc, $rfc_observacion, $imss, $imss_observacion,
        $_POST['entidad_act'], $_POST['municipio_act'], $_POST['norfc'],$_POST['nolic'], $_POST['nocartilla'], $_POST['estatus_es'], $_POST['carrera_g'], $_POST['f_inicial'],  $_POST['f_formacion'], $_POST['identificacion']);
      }

      if (isset($_POST["nombre"])&& isset($_FILES["file"]["name"]) && isset($_FILES["file"]["tmp_name"])) {
          $aspirante -> subirArchivo($_POST["nombre"],$_FILES["file"]["name"], $_FILES["file"]["tmp_name"]);
          //echo $_POST["tipo2"];
      }


//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    class Aspirante{
      /////------------------------------------------------------------------------------------------aquí empieza archivos

      public function subirArchivo($curp,$archivo,$temp_archivo)
    	{

    		require '../../requires/conexion.php';

    		$path="../../archivos_cadetes/$curp";

    		if(!is_dir($path))
    		{
    			$old = umask(0);
    			mkdir($path,0777);
    			umask($old);
    			move_uploaded_file($temp_archivo, "../../archivos_cadetes/$curp/".$archivo);

          $sql = "INSERT INTO documentos (nombre, ruta, tipo_elemento, curp) VALUES ( '$archivo', '../../archivos_cadetes/$curp', 'cadete', '$curp')";
          $conn->query($sql);
          //se cierra la coneccion
          $conn->close();

    		}


    		if($archivo && move_uploaded_file($temp_archivo,  "../../archivos_cadetes/$curp/".$archivo))
    		{

          $sql = "INSERT INTO documentos (nombre, ruta, tipo_elemento, curp) VALUES ( '$archivo', '../../archivos_cadetes/$curp', 'cadete', '$curp')";
    			$conn->query($sql);
    			//se cierra la coneccion
    			$conn->close();

    		}
    	}

      public function bajaArchivo($curp, $archivo)
      {
        require '../../requires/conexion.php';
        $path="[sistema]/archivos_cadetes/$curp/";
        if(file_exists("../../archivos_cadetes/$curp/".$archivo))
        {
          //alimina el archivo de la carpeta
          unlink("../../archivos_cadetes/$curp/".$archivo);
          //se crea la copnsulta para la insercion
          $sql = "DELETE FROM documentos WHERE nombre = '$archivo' AND ruta = '$path'";
          $conn->query($sql);
          //se cierra la conexion
          $conn->close();
        }
        echo "El archivo ha sido eliminado";
      }
      /////------------------------------------------------------------------------------------------aquí termina archivos

        public function nuevo($llenado, $tipoIngreso, $folio, $paterno, $materno, $nombre, $fechan, $edad, $genero, $curp,
                                $correo, $celular, $telef1, $telef2, $grado_es, $exPoli, $estadoCivil, $medioInfo, $dep_acterior, $calle, $ext, $int,
                                $codpostal, $colonia, $municipio, $estado, $solicitud_completa, $solicitud_observacion, $acta_nac, $acta_nac_observacion, $doc_curp, $doc_curp_observacion, $doc_id, $doc_id_observacion,
                                $doc_licencia, $doc_licencia_observacion, $const_ante, $const_ante_observacion, $comp_estudios, $comp_estudios_observacion, $cartilla, $cartilla_observacion, $const_no_sus, $const_no_sus_observacion, $baja_voluntaria,
                                $baja_voluntaria_observacion, $comp_domicilio, $comp_domicilio_observacion, $referencias, $referencias_observacion, $curriculum, $curriculum_observacion, $rfc, $rfc_observacion, $imss, $imss_observacion,
                                 $entidad_dep, $municipio_dep, $norfc, $nolic, $nocartilla, $estatus_estudio, $carrera_g, $formacion_i, $fecha_formacion, $matricula_cuip)
                                {
                                    include '../../requires/conexion.php';
                                    $query ="SELECT folio  FROM cadete where folio = '$folio'";
                                    $resultado = $conn->query($query);
                                    //echo $resultado;
                                    if (empty($cadete=mysqli_fetch_row($resultado))) {
                                      $sql = "INSERT INTO cadete (f_llenado ,  tipo_ingreso ,  folio ,  a_paterno ,  a_materno ,  nombre ,  f_nacimiento ,  edad_registro ,  genero ,  curp ,
                                                          email ,  tel_celular ,  tel_1 ,  tel_2 ,  grado_estudio ,  exp_o_exm ,  estado_civil ,  metodo_e_empleo , dependencia ,calle ,  n_exterior ,  n_interior ,
                                                          c_postal ,  colonia ,  municipio, estado,  s_empleo ,  s_empleo_observacion ,  acta_nacimiento ,  acta_nacimiento_observacion ,  doc_curp ,  doc_curp_observacion ,  identificacion_ine ,  identificacion_ine_observacion ,
                                                          lic_conducir ,  lic_conducir_obervacion ,  no_penales ,  no_penales_observacion ,  comprobante_estudios ,  comprobante_estudios_observacion ,  cartilla_smn ,  cartilla_smn_observacion ,  no_inhabiltado ,  no_inhabilitado_observacion ,  baja_voluntaria ,
                                                          baja_voluntaria_observacion ,  comprobante_domicilio ,  comprobante_domicilio_observacion ,  referencias_personales ,  referencias_personales_observacion ,  curriculum ,  curriculum_observacion ,  documento_rfc ,  documento_rfc_observacion ,  documento_seguro_sosial ,  documento_seguro_sosial_observacion,
                                                          entidad_dep, municipio_dep, rfc, nolic, nocartilla, estatus_escolaridad, carrera_g, formacion_inical, fecha_formacion_inical, matricula_cuip)
                                                          values ('$llenado', '$tipoIngreso', '$folio', '$paterno', '$materno', '$nombre', '$fechan', '$edad', '$genero', '$curp',
                                                          '$correo','$celular', '$telef1', '$telef2', '$grado_es', '$exPoli', '$estadoCivil', '$medioInfo', '$dep_acterior' ,'$calle', '$ext', '$int',
                                                          '$codpostal', '$colonia', '$municipio', '$estado', '$solicitud_completa', '$solicitud_observacion', '$acta_nac', '$acta_nac_observacion', '$doc_curp', '$doc_curp_observacion', '$doc_id', '$doc_id_observacion',
                                                          '$doc_licencia', '$doc_licencia_observacion','$const_ante', '$const_ante_observacion','$comp_estudios', '$comp_estudios_observacion', '$cartilla', '$cartilla_observacion', '$const_no_sus', '$const_no_sus_observacion', '$baja_voluntaria',
                                                          '$baja_voluntaria_observacion', '$comp_domicilio','$comp_domicilio_observacion', '$referencias', '$referencias_observacion', '$curriculum', '$curriculum_observacion' ,'$rfc', '$rfc_observacion','$imss', '$imss_observacion', '$entidad_dep', '$municipio_dep', '$norfc', '$nolic', '$nocartilla',
                                                          '$estatus_estudio', '$carrera_g', '$formacion_i', '$fecha_formacion','$matricula_cuip')";
                                                          echo $sql;
                                      $conn->query($sql);
                                      $conn->close();
                                    }else{
                                      $sql = "UPDATE cadete SET f_llenado = '$llenado',  tipo_ingreso= '$tipoIngreso',  folio ='$folio',  a_paterno='$paterno' ,  a_materno='$materno' ,  nombre='$nombre' ,  f_nacimiento='$fechan' ,  edad_registro= '$edad',  genero ='$genero',  curp='$curp',
                                                          email='$correo' ,  tel_celular='$celular' ,  tel_1 ='$telef1',  tel_2= '$telef2',  grado_estudio='$grado_es' ,  exp_o_exm='$exPoli' ,  estado_civil='$estadoCivil' ,  metodo_e_empleo='$medioInfo' , dependencia='$dep_acterior' ,calle='$calle' ,  n_exterior='$ext' ,  n_interior='$int' ,
                                                          c_postal='$codpostal' ,  colonia='$colonia' ,  municipio='$municipio', estado='$estado' ,  s_empleo='$solicitud_completa' ,  s_empleo_observacion='$solicitud_observacion' ,  acta_nacimiento='$acta_nac' ,  acta_nacimiento_observacion='$acta_nac_observacion' ,  doc_curp='$doc_curp' ,  doc_curp_observacion='$doc_curp_observacion' ,  identificacion_ine='$doc_id' ,  identificacion_ine_observacion='$doc_id_observacion',
                                                          lic_conducir ='$doc_licencia' ,  lic_conducir_obervacion='$doc_licencia_observacion' ,  no_penales='$const_ante' ,  no_penales_observacion='$const_ante_observacion' ,  comprobante_estudios='$comp_estudios' ,  comprobante_estudios_observacion='$comp_estudios_observacion' ,  cartilla_smn='$cartilla' ,  cartilla_smn_observacion='$cartilla_observacion' ,  no_inhabiltado='$const_no_sus' ,  no_inhabilitado_observacion='$const_no_sus_observacion' ,  baja_voluntaria='$baja_voluntaria' ,
                                                          baja_voluntaria_observacion='$baja_voluntaria' ,  comprobante_domicilio='$comp_domicilio' ,  comprobante_domicilio_observacion='$comp_domicilio_observacion' ,  referencias_personales='$referencias' ,  referencias_personales_observacion='$referencias_observacion' ,  curriculum='$curriculum' ,  curriculum_observacion='$curriculum_observacion' ,  documento_rfc='$rfc' ,  documento_rfc_observacion='$rfc_observacion' ,  documento_seguro_sosial='$imss' ,  documento_seguro_sosial_observacion='$imss_observacion', entidad_dep ='$entidad_dep', municipio_dep='$municipio_dep',
                                                          rfc='$norfc', nolic ='$nolic', nocartilla='$nocartilla', estatus_escolaridad ='$estatus_estudio', carrera_g = '$carrera_g', formacion_inical = '$formacion_i',fecha_formacion_inical = '$fecha_formacion', matricula_cuip='$matricula_cuip'
                                                          WHERE folio = $folio";
                                                          echo $sql;
                                      $conn->query($sql);
                                      $conn->close();
                                      }

                                  }

                                  public function crearId($tipoingreso)
                                  {
                                    //$id = uniqid();
                                    require '../../requires/conexion.php';
                                    //se obtiene el folio con valor más alto
                                    $query_id="SELECT MAX(folio) FROM cadete";
                                    $res_id = $conn->query($query_id);
                                    $num_cadete1=mysqli_fetch_row($res_id);
                                    //se obtiene la fecha del folio más alto
                                    $query_fechas = "SELECT f_llenado FROM cadete WHERE folio = '$num_cadete1[0]' ";
                                    $res_fecha = $conn->query($query_fechas);
                                    $num_cadete = mysqli_fetch_row($res_fecha);

                                    //se separa cada 4 caracteres el folio en 2 partes, 1) año de registro y 2) numero de registro
                                    $texto = preg_replace('([A-Za-z])', '', $num_cadete1[0]);
                                    $folio = str_split($texto, 4);

                                    //se obtiene el año de la fecha del registro del aspirante
                                    $fecha_ultimo_registro = strtotime($num_cadete[0]);
                                    $anio = date("Y", $fecha_ultimo_registro);

                                    //se compara el año del registro con el año actual, se es direnete año se reinicia el numero del registro del aspirante
                                    if ($anio < date("Y")) {
                                      $folio[1] = 0;
                                    }


                                    if ($folio[1] < 10 ) {
                                      $sig_id = $folio[1]+1;
                                      $idnum=strval("000".$sig_id);
                                    }elseif ($folio[1] > 9 &&  $folio[1] < 100) {
                                      $sig_id = $folio[1]+1;
                                      $idnum=strval("00".$sig_id);
                                    }elseif ($folio[1] > 99 &&  $folio[1] < 1000) {
                                      $sig_id = $folio[1]+1;
                                      $idnum=strval("0".$sig_id);
                                    }elseif ($folio[1] > 999) {
                                      $sig_id = $folio[1]+1;
                                      $idnum = $sig_id;
                                  }
                                  if ($tipoingreso == "Nuevo Ingreso") {
                                    // code...
                                    $id = "NI".date("Y").$idnum;
                                  }elseif($tipoingreso == "Reingreso") {
                                    // code...
                                    $id = "RI".date("Y").$idnum;
                                  }
                                  //$id = date("Y").$idnum;
                                  //echo $id;
                                    return $id;
                              }
                          }

if (isset($_POST['tipoingreso'])) {
  //echo "id desde el back ".$_POST['tipoingreso'] ;
  $idr = $aspirante->crearId($_POST['tipoingreso']);
  echo $idr;
}

?>
