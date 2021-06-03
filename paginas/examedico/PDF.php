<?php

require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header(){
    // Logo
    $this->Image('images/banner.png',10,8,65);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Image('images/mexico_logo.png',165,8,15);
    $this->Image('images/norma_logo1.png',185,8,15);
    // Salto de línea
    $this->Ln(20);
}
public function exafemenino()
{

  echo '
  <h3>Antecedentes Ginecoobstétricos</h3> <br>

    <div class="row tile_count">
        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
            <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                  id="menarca" placeholder="Menarca" name="menarca" style="font-size: 12pt;
                  font-weight: bold; color: red; text-align: center; "required>
                  Menarca
                  <div class="help-info"></div>
                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="tfrue">
                  </span>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
            <input type="date"  maxlength="30" class="form-control has-feedback-left"
                  id="fum" placeholder="Fum" name="fum" style="font-size: 12pt;
                  font-weight: bold; color: red; text-align: center;" required>
                  Fum
                  <div class="help-info"></div>
                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                  </span>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
            <input type="text"  maxlength="30" class="form-control has-feedback-left"
                  id="ritmo" placeholder="Ritmo" name="ritmo" style="font-size: 12pt;
                  font-weight: bold; color: red; text-align: center;" required>
                  Ritmo
                  <div class="help-info"></div>
                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                  </span>
        </div>
    </div>

    <div class="row tile_count">
        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
            <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                  id="cantidad" placeholder="Cantidad" name="cantidad" style="font-size: 12pt;
                  font-weight: bold; color: red; text-align: center;" required>
                  Cantidad
                  <div class="help-info"></div>
                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                  </span>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
            <input type="text"  maxlength="30" class="form-control has-feedback-left"
                  id="dolor" placeholder="Dolor" name="dolor" style="font-size: 12pt;
                  font-weight: bold; color: red; text-align: center;" required>
                  Dolor
                  <div class="help-info"></div>
                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                  </span>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
            <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                  id="gestas" placeholder="Gestas" name="gestas" style="font-size: 12pt;
                  font-weight: bold; color: red; text-align: center;" required>
                  Gestas
                  <div class="help-info"></div>
                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                  </span>
        </div>
      </div>

      <div class="row tile_count">
           <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
            <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                  id="partos" placeholder="Partos" name="partos" style="font-size: 12pt;
                  font-weight: bold; color: red; text-align: center;" required>
                  Partos
                  <div class="help-info"></div>
                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                  </span>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
            <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                  id="abortos" placeholder="Abortos" name="abortos" style="font-size: 12pt;
                  font-weight: bold; color: red; text-align: center;" required>
                  Abortos
                  <div class="help-info"></div>
                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                  </span>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
            <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                  id="cesareas" placeholder="Cesareas" name="cesareas" style="font-size: 12pt;
                  font-weight: bold; color: red; text-align: center;" required>
                  Cesareas
                  <div class="help-info"></div>
                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                  </span>
            </div>
        </div>


    <div class="row tile_count">
          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
              <label>Embarazo</label> &nbsp; &nbsp; &nbsp;
              <div class="">
              </div>
          </div>
          <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
              <label for="Si">Si</label>
              <input type="radio"  maxlength="45"  name="embarazo" id="embarazo" value="Si" required> &nbsp; &nbsp;
              <div class="">
              </div>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
              <label for="No">No</label>
              <input type="radio"   maxlength="45" name="embarazo" id="embarazo" value="No" > &nbsp; &nbsp;
              <div class="">
              </div>
          </div>


          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
              <label>Lactancia</label> &nbsp; &nbsp; &nbsp;
              <div class="">
              </div>
          </div>
          <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
              <label for="Si">Si</label>
              <input type="radio"  maxlength="45" name="lactancia" id="lactancia" value="Si" required> &nbsp; &nbsp;
              <div class="">
              </div>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
              <label for="No">No</label>
              <input type="radio"  maxlength="45" name="lactancia" id="lactancia" value="No" > &nbsp; &nbsp;
              <div class="">
              </div>
          </div>
      </div>
      <br>
  ';
}

public function nuevo($id ,$fece,$tip,$asp,$pat,$mat,$sex,$edad,$fecn,$esc,$estc,$dom,$num,$gru,
                      $tat,$tatv,$lugarTat,$per,$perv,$lugarPerf,$cala,$calv,$hig,$men,$fum,$rit,$cant,$dol,$ges,$part,$abo,$ces,
                      $emb,$lac,$ale,$espa,$hos,$esph,$cir,$espc,$tra,$espt1,$fra,$espf,$lim,$espl,$coa,$espco,$cic,
                      $espci,$ins,$espi,$dia,$espd,$hip,$esphi,$asma,$espas,$epi,$espe,$can,$espca,$car,$espio,
                      $aut,$espt2,$ets,$esps,$hep,$esphe,$otr2,$espo2,$medi,$espm,$taba,$can1,$alc,$can2,$dro,$can3,
                      $fc,$fr,$ta,$tem,$pes,$esta,$imc,$cab,$esp1,$vis,$esp2,$dis,$esp3,$audi,$esp4,$cue,$esp5,
                      $tor,$esp6,$abd,$esp7,$ext,$esp8,$colu,$esp9,$obs,$con,$med, $saturacion){
    include '../../requires/conexion.php';

$query_verificar = "SELECT * FROM exa_medico WHERE cadete_id = '$id'";
$respuesta_verificar = $conn->query($query_verificar);
if ($verificado = mysqli_fetch_row($respuesta_verificar)) {
  $query_actualizar_anterior="UPDATE exa_medico  SET obser = 'valoracion anterior' WHERE cadete_id = '$id'";
  $conn->query($query_actualizar_anterior);
}
    $sql = "INSERT INTO exa_medico ( fecha_eva,	tipo_eva,	nombre,	paterno,	materno,	sexo,	edad,	fecha_nac,	escolaridad,
                                    estado_c,	domicilio, numero_tel,	grupo_sang,	tatuajes,
                                    tat_visibles, lugar_tatu,	perforaciones,	per_visibles, lugar_perf,	calidad_ali,	calidad_viv,	hig_personal,	menarca,	fum,
                                    ritmo,	cantidad,	dolor,	gestas,	partos,	abortos,	cesareas,	embarazo,	lactancia,	alergias,
                                    esp_alergias,	hospitalizaciones,	esp_hospi,	cirugias,	esp_cirug,	transfusiones,	esp_transf,
                                    fracturas, esp_frac, limitaciones, esp_limit, coagulopatias, esp_coag, cicatrizacion, esp_cicat,
                                    insulina, esp_ins, diabetes, esp_diab, hipertension, esp_hipert, asma, esp_asma, epilepsia, esp_epil,
                                    cancer, esp_cancer, cardiopatias, esp_cardio, autoinmunes, esp_auto, ets, esp_ets, hepatitis, esp_hepat,
                                    otros_dos, esp_otros, medicamentos, esp_medic, tabaquismo, cantidad_tab, alcoholismo, cantidad_alc, drogas,
                                    cantidad_dro, fc, fr, ta, temperatura, peso, estatura, imc, cabeza, esp_cab, vision, esp_vis,
                                    discromatopsia, esp_dis, audicion, esp_aud, cuello, esp_cue, torax, esp_tor,
                                    abdomen, esp_abd, extremidades, esp_ext, columna, esp_col, observaciones,
                                    conclusion, nombre_medico, fecha, cadete_id, saturacion_o, obser) values ('$fece', '$tip',	'$asp', '$pat', '$mat', '$sex',	'$edad',
                                                               '$fecn', '$esc', '$estc', '$dom', '$num', '$gru', '$tat', '$tatv','$lugarTat',
                                                               '$per', '$perv', '$lugarPerf',	'$cala',	'$calv',	'$hig', '$men', '$fum',
                                                               '$rit',	'$cant', '$dol', '$ges',	'$part', '$abo', '$ces',	'$emb',
                                                               '$lac', '$ale', '$espa', '$hos', '$esph', '$cir',
                                                               '$espc',	'$tra',	'$espt1', '$fra', '$espf', '$lim',
                                                               '$espl', '$coa', '$espco', '$cic', '$espci', '$ins',
                                                               '$espi', '$dia', '$espd', '$hip', '$esphi', '$asma', '$espas',
                                                               '$epi', '$espe', '$can', '$espca', '$car', '$espio', '$aut',
                                                               '$espt2', '$ets', '$esps', '$hep', '$esphe', '$otr2', '$espo2',
                                                               '$medi', '$espm', '$taba', '$can1', '$alc', '$can2','$dro', '$can3', '$fc',
                                                               '$fr', '$ta', '$tem', '$pes', '$esta', '$imc', '$cab', '$esp1',
                                                               '$vis', '$esp2', '$dis', '$esp3', '$audi', '$esp4', '$cue',
                                                               '$esp5', '$tor', '$esp6', '$abd', '$esp7', '$ext', '$esp8',
                                                               '$colu', '$esp9', '$obs', '$con', '$med', '$fece', '$id', '$saturacion', 'valoracion actual')";
                                                               
                                                               //echo $sql;

                                                               if(mysqli_query($conn, $sql)){
                                                                 /*
                                                                 echo '<script type="text/javascript">
                                                                 alert("el resultado del aspirante ha sido registrado");
                                                                 window.location.href = "medico.php";
                                                                 </script>';
                                                                 */
//                                                                       echo $sql;
                                                               }else{
                                                                   echo "Error as: ". mysqli_error($conn);
                                                                  // echo $sql;
                                                               }

    $conn->close();
    return 0;
}
public function obtenerEmedico($id)
{
  include '../../requires/conexion.php';
  $querye="SELECT * FROM exa_medico WHERE idExa = '$id'";
  $resultado = $conn->query($querye);
  if ($examed=mysqli_fetch_row($resultado)) {
    //echo $querye;
    return $examed;
  }else {
    $mensaje="El aspirante no tiene examen previo";
    return $mensaje;
  }
  $conn->close();
}

public function datosBasicosCad($id)
{
  include '../../requires/conexion.php';
  $query="SELECT idCadete ,nombre, a_paterno, a_materno, genero, edad_registro, f_nacimiento, grado_estudio, estado_civil, municipio, colonia, calle, n_interior, tel_celular FROM cadete where folio = '$id'";
  $resultado = $conn->query($query);
  if ($datos=mysqli_fetch_array($resultado)) {
    echo json_encode($datos);
    //header('location: medico.php');
    //$medico = json_encode($datos);
    //return $medico;
  }else {
    $mensaje="El aspirante no ha sido encontrado";
    return $mensaje;
  }
      $conn->close();
}


public function obtenerCmedico($tipo, $busqueda)
{
  include '../../requires/conexion.php';
  if ($tipo=="nombre") {
  $query="SELECT idExa, nombre, paterno, materno, fecha_nac, domicilio, conclusion, cadete_id, estado FROM exa_medico WHERE nombre like '%$busqueda%' ";
    //echo $query;
    $resultado = $conn->query($query);
    while ($cad=mysqli_fetch_row($resultado)) {
      echo '
      <tr>
      <td>'. $cad[7].'</td>
      <td>'. $cad[1].'</td>
      <td>'. $cad[2].'</td>
      <td>'. $cad[3].'</td>
      <td>'. $cad[4].'</td>
      <td>'. $cad[5].'</td>
      <td>'. $cad[6].'</td>
      <td>
      <form class="" action="revalorar_medico.php" method="post">
        <input type="text" name="idCad" value="'.$cad[0].'" hidden>
        <button type="submit" class="btn btn-primary glyphicon">Revalorar</button>
      </form>
      </td>
      </tr>
      ';
    }
  }elseif($tipo=="folio") {
  //$query="SELECT cad.folio, cad.nombre, cad.a_paterno, cad.a_materno, cad.f_nacimiento, cad.curp, cad.email  FROM exa_medico AS em INNER JOIN cadete AS cad  ON em.cadete_id = cad.folio WHERE em.cadete_id like '%$busqueda%'";
  $query="SELECT idExa ,nombre, paterno, materno, fecha_nac, domicilio, conclusion, cadete_id, estado FROM exa_medico WHERE cadete_id like '%$busqueda%' ";
    //echo $query;
    $resultado = $conn->query($query);
    while ($cad=mysqli_fetch_row($resultado)) {
      echo '
      <tr>
      <td>'. $cad[7].'</td>
      <td>'. $cad[1].'</td>
      <td>'. $cad[2].'</td>
      <td>'. $cad[3].'</td>
      <td>'. $cad[4].'</td>
      <td>'. $cad[5].'</td>
      <td>'. $cad[6].'</td>
      <td>
      <form class="" action="revalorar_medico.php" method="post">
        <input type="text" name="idCad" value="'.$cad[0].'" hidden>
        <button type="submit" class="btn btn-primary glyphicon">Revalorar</button>
      </form>
      </td>
      </tr>
      ';
    }

  }
  $conn->close();
}

function CreatePDF($folio,$fece,$tip,$asp,$pat,$mat,$sex,$edad,$fecn,$esc,$estc,$dom,$num,$gru,
                      $tat,$tatv,$lugarTat,$per,$perv,$lugarPerf,$cala,$calv,$hig,$men,$fum,$rit,$cant,$dol,$ges,$part,$abo,$ces,
                      $emb,$lac,$ale,$espa,$hos,$esph,$cir,$espc,$tra,$espt1,$fra,$espf,$lim,$espl,$coa,$espco,$cic,
                      $espci,$ins,$espi,$dia,$espd,$hip,$esphi,$asma,$espas,$epi,$espe,$can,$espca,$car,$espio,
                      $aut,$espt2,$ets,$esps,$hep,$esphe,$otr2,$espo2,$medi,$espm,$taba,$can1,$alc,$can2,$dro,$can3,
                      $fc,$fr,$ta,$tem,$pes,$esta,$imc,$cab,$esp1,$vis,$esp2,$dis,$esp3,$audi,$esp4,$cue,$esp5,
                      $tor,$esp6,$abd,$esp7,$ext,$esp8,$colu,$esp9,$obs,$con,$med, $saturacion, $nivel){
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------



//------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            include '../../requires/conexion.php';
            $query_f="SELECT * FROM examen_fisico WHERE cadete_idCadete = '$folio' ";
            $resultado_f = $conn->query($query_f);
            $datos = mysqli_fetch_array($resultado_f);
    $conn->close();

            $this->SetFont('Arial','',8);
            $this->Cell(40 , 5,  utf8_decode("FECHA DE EVALUACIÓN"), 'LRBT',    0, 'C'  );
            $f_eva = date("d/m/Y", strtotime($fece));
            $this->Cell(150, 5,  utf8_decode($f_eva),                    'RTB',     1, 'C'  );
            $this->Cell(40 , 5,  utf8_decode("TIPO DE EVALUACIÓN"),  'LRB',     0, 'C'  );
            $this->Cell(150 , 5,  utf8_decode($tip),                    'RB',      0, 'C'  );
            $this->Ln(8);

            //TABLA DE DATOS PRINCIPALES
            $this->SetFont('Arial','B',9);
            $this->Cell(0,10,utf8_decode('DATOS GENERALES'),0,1,'L');
            $this->SetFont('Arial','',8);
            $this->Cell(190,     5 , utf8_decode("NOMBRE: ".$asp." ".$pat." ".$mat ),  'LRBT', 1   );
            $this->Cell(60 ,     5 , utf8_decode("SEXO: ".$sex),      'LRB'       );
            $this->Cell(60 ,     5 , utf8_decode("EDAD: ".$edad),     'RB'        );
            $f_nac = date("d/m/Y", strtotime($fecn));
            $this->Cell(70 ,    5 , utf8_decode("FECHA DE NACIMIENTO: ".$f_nac), 'RB', 1);
            $this->Cell(60 ,     5 , utf8_decode("ESCOLARIDAD: ".$esc), 'LRB');
            $this->Cell(130 ,     5 , utf8_decode("ESTADO CIVIL: ".$estc), 'LRB', 1);
            $this->Cell(190,     5 , utf8_decode("DOMICILIO PARTICULAR: ".$dom),'LRB',  1 );
            $this->Cell(190,     5 , utf8_decode("NÚMERO DE TELÉFONO: ".$num),  'LRB',  1 );
            $this->Ln(4);

            //ANTECEDENTES PENALES NO PATOLÓGICOS
            $this->SetFont('Arial','B',9);
            $this->Cell(0,  10,utf8_decode('ANTECEDENTES PERSONALES NO PATOLÓGICOS'),0,1,'L');

            $this->SetFont('Arial','',8);
            $this->Cell(38 ,     16 , utf8_decode("GRUPO SANGUÍNEO Y RH"),'LRBT');
            $this->Cell(20 ,     16 , utf8_decode($gru),'TRB',  0,  'C' );
            $this->Cell(27 ,     8  , utf8_decode("TATUAJES"),'TBR',  0,  'C' );
            $this->Cell(40 ,     8  , utf8_decode($tat), 'TBRL', 0,  'C' );
            //$this->Cell(20 ,     4  , utf8_decode("NO"),'TBR' , 0,  'C' );
            $this->Cell(27 ,     16 , utf8_decode("VISIBLES"),'TBR' , 0,  'C' );
            $this->Cell(38 ,     8  , utf8_decode($tatv),'TBRL', 0,  'C' );
            //$this->Cell(19 ,     4  , utf8_decode("NO"),'TBR',  1 , 'C' );

            //$this->Cell(85);
            //$this->Cell(40,4, utf8_decode($tat),'TBLR', 1,  'C' ); //TATUAJES: NO

            $this->Cell(58);
            $this->SetXY(68, 110);
            $this->Cell(27,8,utf8_decode("PERFORACIONES"),'TBLR');
            $this->Cell(40,8,utf8_decode($per),'BR', 0,'C'); //PERFORACIONES: SI


            $this->SetXY(162, 106);
            //$this->Cell(38 ,    4,  utf8_decode(""),'BR',0, 'C' ); //PERFORACIONES: SI
            $this->SetXY(162, 110);
            $this->Cell(38 ,    8,  utf8_decode($perv),'BR',1, 'C' ); //PERFORACIONES: NO
            $this->Cell(190 ,    5 , utf8_decode("LUGAR DEL TATUAJE : ".$lugarTat), 'LRB', 1);
            $this->Cell(190 ,    5 , utf8_decode("LUGAR DE LA PERFORACIÓN: ".$lugarPerf), 'LRB', 1);

            $this->Cell(60,    5 ,  utf8_decode("CALIDAD DE ALIMENTACIÓN: ".$cala),  'LRB' );
            $this->Cell(60 ,    5 ,  utf8_decode("CALIDAD DE VIVIENDA: ".$calv),      'LRB' );
            $this->Cell(70 ,    5 , utf8_decode("HIGIENE PERSONAL: ".$hig),         'LRB' );
            $this->Ln(8);

            //ANTECEDENTES GINECOOBSTÉTRICOS
            if ($sex == "FEMENINO") {
              $this->SetFont('Arial','B',9);
              $this->Cell(0,  10,utf8_decode('ANTECEDENTES GINECOOBSTÉTRICOS'),0,1,'L');

              $this->SetFont('Arial','',8);
              $this->Cell(19 ,    4,  utf8_decode("MENARCA"),     'TBRL', 0, 'C'  );
              $this->Cell(19 ,    4,  utf8_decode("FUM"),         'TBR' , 0, 'C'  );
              $this->Cell(19 ,    4,  utf8_decode("RITMO"),       'TBR' , 0, 'C'  );
              $this->Cell(19 ,    4,  utf8_decode("CANTIDAD"),    'TBR' , 0, 'C'  );
              $this->Cell(19 ,    4,  utf8_decode("DOLOR"),       'TBR' , 0, 'C'  );
              $this->Cell(19 ,    4,  utf8_decode("GESTAS"),      'TBR' , 0, 'C'  );
              $this->Cell(19 ,    4,  utf8_decode("PARTOS"),      'TBR' , 0, 'C'  );
              $this->Cell(19 ,    4,  utf8_decode("ABORTOS"),     'TBR' , 0, 'C'  );
              $this->Cell(19 ,    4,  utf8_decode("CESÁREAS"),    'TBR' , 0, 'C'  );
              $this->Cell(19 ,    4,  utf8_decode("OTROS"),       'TBR' , 1, 'C'  );

              $this->Cell(19 ,    6,  utf8_decode($men),        'TBRL', 0, 'C'  );
              $this->Cell(19 ,    6,  utf8_decode($fum),        'TBR' , 0, 'C'  );
              $this->Cell(19 ,    6,  utf8_decode($rit),        'TBR' , 0, 'C'  );
              $this->Cell(19 ,    6,  utf8_decode($cant),        'TBRL', 0, 'C'  );
              $this->Cell(19 ,    6,  utf8_decode($dol),        'TBR' , 0, 'C'  );
              $this->Cell(19 ,    6,  utf8_decode($ges),        'TBR' , 0, 'C'  );
              $this->Cell(19 ,    14, utf8_decode($part),        'TBR' , 0, 'C'  );
              $this->Cell(19 ,    14, utf8_decode($abo),        'TBRL', 0, 'C'  );
              $this->Cell(19 ,    14, utf8_decode($ces),        'TBR' , 0, 'C'  );
              $this->Cell(19 ,    14, utf8_decode(""),        'TBR' , 1, 'C'  );

              $this->SetXY(10,156);
              $this->Cell(19 ,    8,  utf8_decode("EMBARAZO"),    'BRL', 0, 'C'  );
              $this->Cell(38 ,    8,  utf8_decode($emb),          'BR' , 0, 'C'  );


              $this->Cell(19 ,    8,  utf8_decode("LACTANCIA"),   'BRL', 0, 'C'  );
              $this->Cell(38 ,    8,  utf8_decode($lac),          'BR' , 0, 'C'  );
              //$this->Cell(19 ,    4,  utf8_decode("NO"),          'BR' , 1, 'C'  );
              $this->Cell(19);
              $this->Cell(19 ,    4,  utf8_decode(""),   '' , 0, 'C'  );
              $this->Cell(19 ,    4,  utf8_decode(""),   '' , 0, 'C'  );

              $this->Cell(19);
              $this->Cell(19 ,    4,  utf8_decode(""),   '' , 0, 'C'  );
              $this->Cell(19 ,    4,  utf8_decode(""),   '' , 0, 'C'  );
            }

            $this->Ln(8);

            //ANTECEDENTES GINECOOBSTÉTRICOS
            $this->SetFont('Arial','B',9);
            $this->Cell(0,  10,utf8_decode('ANTECEDENTES PERSONALES PATOLÓGICOS'),0,1,'L');

            $this->SetFont('Arial','',8);
            $this->Cell(60 ,    4,  utf8_decode(""),            'TBRL', 0, 'C'  );
            $this->Cell(60 ,    4,  utf8_decode("SI/NO"),          'TBRL', 0, 'C'  );
            $this->Cell(70 ,    4,  utf8_decode("ESPECIFICAR"), 'TBRL', 1, 'C'  );

            $AntededentesGinecoo = array(
                'ALERGIAS',
                'HOSPITALIZACIONES',
                'CIRUGÍAS',
                'TRANSFUSIONES',
                'FRACTURAS O LUXACIONES',
                'LIMITACIONES FÍSICAS',
                'COAGULOPATÍAS',
                'TRASTORNOS DE LA CICATRIZACIÓN',
                'RESISTENCIA A LA INSULINA',
                'DIABETES',
                'HIPERTENSIÓN ARTERIAL SISTÉMICA',
                'ASMA',
                'EPILEPSIA',
                'CÁNCER',
                'CARDIOPATÍAS',
                'TRASTORNOS AUTOINMUNES',
                'ETS',
                'HEPATITIS',
                'OTROS',
                'CONSUMO DE MEDICAMENTO',
            );
            $resultadogineco  = array(
              $ale,
              $hos,
              $cir,
              $tra,
              $fra,
              $lim,
              $coa,
              $cic,
              $ins,
              $dia,
              $hip,
              $asma,
              $epi,
              $can,
              $car,
              $aut,
              $ets,
              $hep,
              $otr2,
              $medi,
            );

            $especidificargineco = array(
              $espa,
              $esph,
              $espc,
              $espt1,
              $espf,
              $espl,
              $espco,
              $espci,
              $espi,
              $espd,
              $esphi,
              $espas,
              $espe,
              $espca,
              $espio,
              $espt2,
              $esps,
              $esphe,
              $espo2,
              $espm,
            );

            for( $i = 0; $i < sizeof($AntededentesGinecoo); $i++ ){

                $this->Cell(60 ,    4,  utf8_decode($AntededentesGinecoo[$i]),      'TBRL', 0, 'C'  );
                $this->Cell(60 ,    4,  utf8_decode($resultadogineco[$i]),          'TBRL', 0, 'C'  );
                $this->Cell(70 ,    4,  utf8_decode($especidificargineco[$i]),          'TBRL', 1, 'C'  );
            }

            $this->AddPage();

            //TAXICOMANIAS
            $this->SetFont('Arial','B',9);
            $this->Cell(0,  10,utf8_decode('TOXICOMANÍAS '),0,1,'L');
            $this->SetFont('Arial','',8);
            $this->Cell(60 ,    4,  utf8_decode(""),                        'TBRL', 0, 'C'  );
            $this->Cell(60 ,    4,  utf8_decode("SI/NO"),                      'TBRL', 0, 'C'  );
            $this->Cell(70 ,    4,  utf8_decode("CANTIDAD Y FRECUENCIA"),   'TBR',  1, 'C'  );

            $Toxicomanias = array(
                'TABAQUISMO',
                'ALCOHOLISMO',
                'DROGAS'
            );
            $resultadotoxico = array(
              $taba,
              $alc,
              $dro,
            );
            $cantidadtoxico = array(
              $can1,
              $can2,
              $can3,
            );

            for( $i = 0; $i < sizeof($Toxicomanias); $i++ ){
                $this->Cell(60 ,    4,  utf8_decode($Toxicomanias[$i]),     'TBRL', 0, 'C'  );
                $this->Cell(60 ,    4,  utf8_decode($resultadotoxico[$i]),  'TBR',  0, 'C'  );
                $this->Cell(70 ,    4,  utf8_decode($cantidadtoxico[$i]),   'TBR',  1, 'C'  );
            }

            $this->Ln(8);

            //EXPLORACIÓN FISICA
            $this->SetFont('Arial','B',9);
            $this->Cell(0,  10,utf8_decode('EXPLORACIÓN FÍSICA '),0,1,'L');
            $this->SetFont('Arial','',8);
            $this->Cell(60 ,    4,  utf8_decode("FC ".$fc),          'TBRL', 0, 'L'  );
            $this->Cell(30 ,    4,  utf8_decode("FR ".$fr),          'TBRL', 0, 'L'  );
            $this->Cell(30 ,    4,  utf8_decode("TA ".$ta),          'TBRL', 0, 'L'  );
            $this->Cell(70 ,    4,  utf8_decode("TEMPERATURA ".$tem), 'TBR',  1, 'L'  );
            $this->Cell(60 ,    4,  utf8_decode("PESO ".$pes),        'BRL',  0, 'L'  );
            $this->Cell(60 ,    4,  utf8_decode('ESTATURA '.$esta),    'BRL',  0, 'L'  );
            $this->Cell(70 ,    4,  utf8_decode("IMC ".$imc),         'TBR',  1, 'L'  );
            $this->Cell(190 ,    4,  utf8_decode("NIVEL DE PESO ".$nivel),         'LTBR',  1, 'L'  );
            $this->Cell(190 ,    4,  utf8_decode("SATURACION DE EXIGENO ".$saturacion),         'LTBR',  1, 'L'  );
            $this->Cell(60 ,    8,  utf8_decode(""),            'TBRL', 0, 'L'  );
            $this->Cell(130 ,   4,  utf8_decode("ALTERACIONES"),'TBRL', 2, 'C'  );
            $this->Cell(60 ,    4,  utf8_decode("SI/NO"),          'BL',   0, 'C'  );
            $this->Cell(70 ,    4,  utf8_decode("ESPECIFICAR"), 'RBL',  1, 'C'  );

            $Exploracion =  array(
                'CABEZA',
                'VISIÓN',
                'DISCROMATOPSIA',
                'AUDICIÓN',
                'CUELLO',
                'TÓRAX',
                'ABDOMEN',
                'EXTREMIDADES',
                'COLUMNA',
            );
            $alteraciones = array(
              $cab,
              $vis,
              $dis,
              $audi,
              $cue,
              $tor,
              $abd,
              $ext,
              $colu,
            );
            $especificalteraciones = array(
              $esp1,
              $esp2,
              $esp3,
              $esp4,
              $esp5,
              $esp6,
              $esp7,
              $esp8,
              $esp9,

            );
            /*
            $cab,$esp1,$vis,$esp2,$dis,$esp3,$audi,$esp4,$cue,$esp5,
            $tor,$esp6,$abd,$esp7,$ext,$esp8,$colu,$esp9,$obs,$con,$med, $saturacion
            */

            for( $i = 0; $i < sizeof($Exploracion); $i++ ){
                $this->Cell(60 ,    4,  utf8_decode($Exploracion[$i]),'TBRL', 0, 'C'  );
                $this->Cell(60 ,    4,  utf8_decode($alteraciones[$i]),'TBR', 0, 'C'  );
                $this->Cell(70 ,    4,  utf8_decode($especificalteraciones[$i]),'TBR', 1, 'C'  );
            }

            $this->Cell(190 ,    6 , utf8_decode("OBSERVACIONES: ".$obs),'LRB' ,1        );
            $this->Cell(60 ,     8 , utf8_decode("CONCLUSIÓN"),'LRB'           );
            //$this->Cell(60 ,     4 , utf8_decode("APTO "),'LRB', 0, 'C'   );
            $this->Cell(130 ,     4 , utf8_decode("APTO/NO APTO "),'LRB' ,1, 'C'   );

            $this->Cell(60);

            //$this->Cell(60 ,     4 , utf8_decode(""),   'RB' , 0, 'C'    );
            $this->Cell(130 ,     4 , utf8_decode($con),   'RB' , 1, 'C'    );
            $this->Cell(190,     20, utf8_decode(''),'RL',1);
            $this->Cell(90,     10, utf8_decode($asp." ".$pat." ".$mat),    'L',   0, 'C' );
            $this->Cell(10,     10, utf8_decode(''));
            $this->Cell(90,     10, utf8_decode($med),    'R',   1 ,'C' );


            $this->Cell(15,     15, utf8_decode(''),                                'LB'            );
            $this->Cell(60,     15, utf8_decode('NOMBRE Y FIRMA DEL ASPIRANTE'),    'TB',   0,'C'   );
            $this->Cell(15,     15, utf8_decode(''),                                'B'             );

            $this->Cell(10,     15, utf8_decode(''), 'B' );

            $this->Cell(15,     15, utf8_decode(''),                                        'B'             );
            $this->Cell(60,     15, utf8_decode('NOMBRE Y FIRMA DEL MÉDICO EVALUADOR'),     'TB',   0,'C'   );
            $this->Cell(15,     15, utf8_decode(''),                                        'RB' ,  1       );


            $this->Ln(8);

            //evaluación física
            if (!empty($datos)) {
              $this->SetFont('Arial','B',9);
              $this->Cell(0,  10,utf8_decode('EVALUACIÓN FÍSICA'),0,1,'L');

              $this->SetFont('Arial','',8);
              $this->Cell(190 ,    6 , utf8_decode("FECHA: "),                    'LRBT', 1       );
              $this->Cell(190 ,    10 , utf8_decode("OBSERVACIONES: "),           'LRBT', 1       );
              $this->Cell(100 ,     8 , utf8_decode("CONCLUSIÓN: ".$datos[15]),               'LRB',  0, 'C'  );
              $this->Cell(90 ,     8 , utf8_decode("MANEJA: ".$datos[13]),                   'RB',  1, 'C'  );
              //$this->Cell(60);

              //$this->Cell(50 ,     4 , utf8_decode(""),   'LRB' , 0, 'C'    );
              //$this->Cell(50 ,     4 , utf8_decode(""),   'LRB' , 0, 'C'    );
              //$this->Cell(30 ,     4 , utf8_decode(""),   'LRB' , 1, 'C'    );
              $this->Cell(190 ,     10 , utf8_decode(""),  'LR' , 1, 'C');

              $this->Cell(190 ,    10 , utf8_decode($datos[16]), 'LR',  1, 'C'   );
              $this->Cell(190 ,    4 , utf8_decode("NOMBRE Y FIRMA DEL INSTRUCTOR EVALUADOR"), 'LRB', 1, 'C'   );

            }else {
              $this->SetFont('Arial','B',9);
              $this->Cell(0,  10,utf8_decode('EVALUACIÓN FÍSICA'),0,1,'L');

              $this->SetFont('Arial','',8);
              $this->Cell(190 ,    6 , utf8_decode("FECHA: "),                    'LRBT', 1       );
              $this->Cell(190 ,    10 , utf8_decode("OBSERVACIONES: "),           'LRBT', 1       );
              $this->Cell(100 ,     8 , utf8_decode("CONCLUSIÓN: "),               'LRB',  0, 'C'  );
              $this->Cell(90 ,     8 , utf8_decode("MANEJA: "),                   'RB',  1, 'C'  );
              //$this->Cell(60);

              //$this->Cell(50 ,     4 , utf8_decode(""),   'LRB' , 0, 'C'    );
              //$this->Cell(50 ,     4 , utf8_decode(""),   'LRB' , 0, 'C'    );
              //$this->Cell(30 ,     4 , utf8_decode(""),   'LRB' , 1, 'C'    );
              $this->Cell(190 ,     10 , utf8_decode(""),  'LR' , 1, 'C');

              $this->Cell(190 ,    10 , utf8_decode(""), 'LR',  1, 'C'   );
              $this->Cell(190 ,    4 , utf8_decode("NOMBRE Y FIRMA DEL INSTRUCTOR EVALUADOR"), 'LRB', 1, 'C'   );
            }

    }

}
//--------------------------------------primer registro
if (isset($_POST['tmedico'])) {
  $folio = $_POST['folio'];
  $fece  = $_POST['fechaeval'];
  $tip  = "primera";
  $sex = $_POST['sexo'];
  $edad  = $_POST['edad'];
  $fecn  = $_POST['fechaNac'];
  //$lug  = $_POST['lugar'];
  $esc  = $_POST['escolaridad'];
  //$ocu  = $_POST['ocupacion'];
  $estc  = $_POST['estadoc'];
  //$hij  = $_POST['numhijos'];
  //$ehij  = $_POST['edadhijos'];
  $dom  = $_POST['domicilio'];
  $num  = $_POST['numerotel'];
  $gru  = $_POST['gruposan'];
  $tat  = $_POST['tatuajes'];
  $tatv  = $_POST['tatVisibles'];
  $lugarTat = $_POST['lugarTat'];
  $per  = $_POST['perforaciones'];
  $perv  = $_POST['perVisibles'];
  $lugarPerf = $_POST['lugarPerf'];
  $cala  = $_POST['alimentacion'];
  $calv  = $_POST['vivienda'];
  $hig  = $_POST['higiene'];
if (isset($_POST['menarca'])) {
// code...
$men  = $_POST['menarca'];
$fum  = $_POST['fum'];
$rit  = $_POST['ritmo'];
$cant  = $_POST['cantidad'];
$dol  = $_POST['dolor'];
$ges  = $_POST['gestas'];
$part  = $_POST['partos'];
$abo  = $_POST['abortos'];
$ces  = $_POST['cesareas'];
//$otr  = $_POST['otros'];
$emb  = $_POST['embarazo'];
$lac  = $_POST['lactancia'];
}else {
$men  = "";
$fum  = "";
$rit  = "";
$cant  = "";
$dol  = "";
$ges  = "";
$part  = "";
$abo  = "";
$ces  = "";
//$otr  = $_POST['otros'];
$emb  = "";
$lac  = "";

}

  $ale  = $_POST['alergias'];
  $espa  = $_POST['esp_alerg'];
  $hos  = $_POST['hospital'];
  $esph  = $_POST['esp_hospi'];
  $cir  = $_POST['cirugias'];
  $espc  = $_POST['esp_cir'];
  $tra  = $_POST['transfusiones'];
  $espt1  = $_POST['esp_tran'];
  $fra  = $_POST['fracturas'];
  $espf  = $_POST['esp_frac'];
  $lim  = $_POST['limitaciones'];
  $espl  = $_POST['esp_limi'];
  $coa  = $_POST['coagulopatias'];
  $espco  = $_POST['esp_coa'];
  $cic  = $_POST['cicatrizacion'];
  $espci  = $_POST['esp_cica'];
  $ins  = $_POST['insulina'];
  $espi  = $_POST['esp_ins'];
  $dia  = $_POST['diabetes'];
  $espd  = $_POST['esp_dia'];
  $hip  = $_POST['hipertension'];
  $esphi  = $_POST['esp_hip'];
  $asma  = $_POST['asma'];
  $espas  = $_POST['esp_asma'];
  $epi  = $_POST['epilepsia'];
  $espe  = $_POST['esp_epi'];
  $can  = $_POST['cancer'];
  $espca  = $_POST['esp_cancer'];
  $car  = $_POST['cardiopatias'];
  $espio  = $_POST['esp_cardio'];
  $aut  = $_POST['autoinmunes'];
  $espt2  = $_POST['esp_auto'];
  $ets  = $_POST['ets'];
  $esps  = $_POST['esp_ets'];
  $hep  = $_POST['hepatitis'];
  $esphe  = $_POST['esp_hepa'];
  $otr2  = $_POST['otrosE'];
  $espo2  = $_POST['esp_otros'];
  $medi  = $_POST['medicamentos'];
  $espm  = $_POST['esp_medi'];

  $id  = $_POST['id'];
  $taba  = $_POST['taba'];
  $can1  = $_POST['cantidad1'];
  $alc  = $_POST['alcohol'];
  $can2  = $_POST['cantidad2'];
  $dro  = $_POST['drogas'];
  $can3  = $_POST['cantidad3'];
  $fc  = $_POST['fc'];
  $fr  = $_POST['fr'];
  $ta  = $_POST['ta'];
  $tem  = $_POST['temperatura'];
  $pes  = $_POST['peso'];
  $esta  = $_POST['estatura'];
  $imc  = $_POST['imc'];
  $cab  = $_POST['cabeza'];
  $esp1  = $_POST['espec1'];
  $vis  = $_POST['vision'];
  $esp2  = $_POST['espec2'];
  $dis  = $_POST['disco'];
  $esp3  = $_POST['espec3'];
  $audi  = $_POST['audi'];
  $esp4  = $_POST['espec4'];
  $cue  = $_POST['cuello'];
  $esp5  = $_POST['espec5'];
  $tor  = $_POST['torax'];
  $esp6  = $_POST['espec6'];
  $abd  = $_POST['abdo'];
  $esp7  = $_POST['espec7'];
  $ext  = $_POST['extre'];
  $esp8  = $_POST['espec8'];
  $colu  = $_POST['colu'];
  $esp9  = $_POST['espec9'];
  $obs  = $_POST['obser'];
  $con  = $_POST['apto'];
  $asp  = $_POST['aspirante'];
  $pat  = $_POST['paterno'];
  $mat  = $_POST['materno'];
  $med  = $_POST['medico'];
  $saturacion = $_POST['saturacion'];
  $nivel = $_POST['nivel'];
  //$fec1  = $_POST['fecha1'];
  //$obs2  = $_POST['obser2'];
  //$con2  = $_POST['apto2'];
  //$est  = $_POST['estado'];
  $pdf = new PDF('P','mm','A4');
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(0,10,utf8_decode('EVALUACIÓN MÉDICA PARA ASPIRANTE A POLICÍA PREVENTIVO MUNICIPAL'),0,1,'C');
  $pdf -> CreatePDF($folio,$fece,$tip,$asp,$pat,$mat,$sex,$edad,$fecn,$esc,$estc,$dom,$num,$gru,
                        $tat,$tatv,$lugarTat,$per,$perv,$lugarPerf,$cala,$calv,$hig,$men,$fum,$rit,$cant,$dol,$ges,$part,$abo,$ces,
                        $emb,$lac,$ale,$espa,$hos,$esph,$cir,$espc,$tra,$espt1,$fra,$espf,$lim,$espl,$coa,$espco,$cic,
                        $espci,$ins,$espi,$dia,$espd,$hip,$esphi,$asma,$espas,$epi,$espe,$can,$espca,$car,$espio,
                        $aut,$espt2,$ets,$esps,$hep,$esphe,$otr2,$espo2,$medi,$espm,$taba,$can1,$alc,$can2,$dro,$can3,
                        $fc,$fr,$ta,$tem,$pes,$esta,$imc,$cab,$esp1,$vis,$esp2,$dis,$esp3,$audi,$esp4,$cue,$esp5,
                        $tor,$esp6,$abd,$esp7,$ext,$esp8,$colu,$esp9,$obs,$con,$med, $saturacion, $nivel);

$pdf->Output('ExamenMedico.pdf','D');
  $pdf -> nuevo($folio,$fece,$tip,$asp,$pat,$mat,$sex,$edad,$fecn,$esc,$estc,$dom,$num,$gru,
                        $tat,$tatv,$lugarTat,$per,$perv,$lugarPerf,$cala,$calv,$hig,$men,$fum,$rit,$cant,$dol,$ges,$part,$abo,$ces,
                        $emb,$lac,$ale,$espa,$hos,$esph,$cir,$espc,$tra,$espt1,$fra,$espf,$lim,$espl,$coa,$espco,$cic,
                        $espci,$ins,$espi,$dia,$espd,$hip,$esphi,$asma,$espas,$epi,$espe,$can,$espca,$car,$espio,
                        $aut,$espt2,$ets,$esps,$hep,$esphe,$otr2,$espo2,$medi,$espm,$taba,$can1,$alc,$can2,$dro,$can3,
                        $fc,$fr,$ta,$tem,$pes,$esta,$imc,$cab,$esp1,$vis,$esp2,$dis,$esp3,$audi,$esp4,$cue,$esp5,
                        $tor,$esp6,$abd,$esp7,$ext,$esp8,$colu,$esp9,$obs,$con,$med, $saturacion);
  // Creación del objeto de la clase heredada
}

//---------------------------------------------revaloracion
if (isset($_POST["id_exa"]) && isset($_POST["id"])) {

        $folio = $_POST['id'];
        $fece  = $_POST['fechaeval'];
        $tip  = "revaloracion";
        $sex = $_POST['sexo'];
        $edad  = $_POST['edad'];
        $fecn  = $_POST['fechaNac'];
        //$lug  = $_POST['lugar'];
        $esc  = $_POST['escolaridad'];
        //$ocu  = $_POST['ocupacion'];
        $estc  = $_POST['estadoc'];
        //$hij  = $_POST['numhijos'];
        //$ehij  = $_POST['edadhijos'];
        $dom  = $_POST['domicilio'];
        $num  = $_POST['numerotel'];
        $gru  = $_POST['gruposan'];
        $tat  = $_POST['tatuajes'];
        $tatv  = $_POST['tatVisibles'];
        $lugarTat = $_POST['lugarTat'];
        $per  = $_POST['perforaciones'];
        $perv  = $_POST['perVisibles'];
        $lugarPerf = $_POST['lugarPerf'];
        $cala  = $_POST['alimentacion'];
        $calv  = $_POST['vivienda'];
        $hig  = $_POST['higiene'];
        if (isset($_POST['menarca'])) {
        // code...
        $men  = $_POST['menarca'];
        $fum  = $_POST['fum'];
        $rit  = $_POST['ritmo'];
        $cant  = $_POST['cantidad'];
        $dol  = $_POST['dolor'];
        $ges  = $_POST['gestas'];
        $part  = $_POST['partos'];
        $abo  = $_POST['abortos'];
        $ces  = $_POST['cesareas'];
        //$otr  = $_POST['otros'];
        $emb  = $_POST['embarazo'];
        $lac  = $_POST['lactancia'];
        }else {
        $men  = "x";
        $fum  = "x";
        $rit  = "x";
        $cant  = "x";
        $dol  = "x";
        $ges  = "x";
        $part  = "x";
        $abo  = "x";
        $ces  = "x";
        //$otr  = $_POST['otros'];
        $emb  = "x";
        $lac  = "x";

        }

        $ale  = $_POST['alergias'];
        $espa  = $_POST['esp_alerg'];
        $hos  = $_POST['hospital'];
        $esph  = $_POST['esp_hospi'];
        $cir  = $_POST['cirugias'];
        $espc  = $_POST['esp_cir'];
        $tra  = $_POST['transfusiones'];
        $espt1  = $_POST['esp_tran'];
        $fra  = $_POST['fracturas'];
        $espf  = $_POST['esp_frac'];
        $lim  = $_POST['limitaciones'];
        $espl  = $_POST['esp_limi'];
        $coa  = $_POST['coagulopatias'];
        $espco  = $_POST['esp_coa'];
        $cic  = $_POST['cicatrizacion'];
        $espci  = $_POST['esp_cica'];
        $ins  = $_POST['insulina'];
        $espi  = $_POST['esp_ins'];
        $dia  = $_POST['diabetes'];
        $espd  = $_POST['esp_dia'];
        $hip  = $_POST['hipertension'];
        $esphi  = $_POST['esp_hip'];
        $asma  = $_POST['asma'];
        $espas  = $_POST['esp_asma'];
        $epi  = $_POST['epilepsia'];
        $espe  = $_POST['esp_epi'];
        $can  = $_POST['cancer'];
        $espca  = $_POST['esp_cancer'];
        $car  = $_POST['cardiopatias'];
        $espio  = $_POST['esp_cardio'];
        $aut  = $_POST['autoinmunes'];
        $espt2  = $_POST['esp_auto'];
        $ets  = $_POST['ets'];
        $esps  = $_POST['esp_ets'];
        $hep  = $_POST['hepatitis'];
        $esphe  = $_POST['esp_hepa'];
        $otr2  = $_POST['otrosE'];
        $espo2  = $_POST['esp_otros'];
        $medi  = $_POST['medicamentos'];
        $espm  = $_POST['esp_medi'];

        $id  = $_POST['id'];
        $taba  = $_POST['taba'];
        $can1  = $_POST['cantidad1'];
        $alc  = $_POST['alcohol'];
        $can2  = $_POST['cantidad2'];
        $dro  = $_POST['drogas'];
        $can3  = $_POST['cantidad3'];
        $fc  = $_POST['fc'];
        $fr  = $_POST['fr'];
        $ta  = $_POST['ta'];
        $tem  = $_POST['temperatura'];
        $pes  = $_POST['peso'];
        $esta  = $_POST['estatura'];
        $imc  = $_POST['imc'];
        $cab  = $_POST['cabeza'];
        $esp1  = $_POST['espec1'];
        $vis  = $_POST['vision'];
        $esp2  = $_POST['espec2'];
        $dis  = $_POST['disco'];
        $esp3  = $_POST['espec3'];
        $audi  = $_POST['audi'];
        $esp4  = $_POST['espec4'];
        $cue  = $_POST['cuello'];
        $esp5  = $_POST['espec5'];
        $tor  = $_POST['torax'];
        $esp6  = $_POST['espec6'];
        $abd  = $_POST['abdo'];
        $esp7  = $_POST['espec7'];
        $ext  = $_POST['extre'];
        $esp8  = $_POST['espec8'];
        $colu  = $_POST['colu'];
        $esp9  = $_POST['espec9'];
        $obs  = $_POST['obser'];
        $con  = $_POST['apto'];
        $asp  = $_POST['aspirante'];
        $pat  = $_POST['paterno'];
        $mat  = $_POST['materno'];
        $med  = $_POST['medico'];
        $saturacion = $_POST['saturacion'];
        $nivel = $_POST['nivel'];

        $pdf = new PDF('P','mm','A4');
        //echo $lac;

        $pdf->AddPage();
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(0,10,utf8_decode('EVALUACIÓN MÉDICA PARA ASPIRANTE A POLICÍA PREVENTIVO MUNICIPAL'),0,1,'C');

        $pdf -> CreatePDF($folio,$fece,$tip,$asp,$pat,$mat,$sex,$edad,$fecn,$esc,$estc,$dom,$num,$gru,
                              $tat,$tatv,$lugarTat,$per,$perv,$lugarPerf,$cala,$calv,$hig,$men,$fum,$rit,$cant,$dol,$ges,$part,$abo,$ces,
                              $emb,$lac,$ale,$espa,$hos,$esph,$cir,$espc,$tra,$espt1,$fra,$espf,$lim,$espl,$coa,$espco,$cic,
                              $espci,$ins,$espi,$dia,$espd,$hip,$esphi,$asma,$espas,$epi,$espe,$can,$espca,$car,$espio,
                              $aut,$espt2,$ets,$esps,$hep,$esphe,$otr2,$espo2,$medi,$espm,$taba,$can1,$alc,$can2,$dro,$can3,
                              $fc,$fr,$ta,$tem,$pes,$esta,$imc,$cab,$esp1,$vis,$esp2,$dis,$esp3,$audi,$esp4,$cue,$esp5,
                              $tor,$esp6,$abd,$esp7,$ext,$esp8,$colu,$esp9,$obs,$con,$med, $saturacion, $nivel);
      $pdf->Output('ExamenMedico.pdf','D');

        $pdf -> nuevo($folio,$fece,$tip,$asp,$pat,$mat,$sex,$edad,$fecn,$esc,$estc,$dom,$num,$gru,
                              $tat,$tatv,$lugarTat,$per,$perv,$lugarPerf,$cala,$calv,$hig,$men,$fum,$rit,$cant,$dol,$ges,$part,$abo,$ces,
                              $emb,$lac,$ale,$espa,$hos,$esph,$cir,$espc,$tra,$espt1,$fra,$espf,$lim,$espl,$coa,$espco,$cic,
                              $espci,$ins,$espi,$dia,$espd,$hip,$esphi,$asma,$espas,$epi,$espe,$can,$espca,$car,$espio,
                              $aut,$espt2,$ets,$esps,$hep,$esphe,$otr2,$espo2,$medi,$espm,$taba,$can1,$alc,$can2,$dro,$can3,
                              $fc,$fr,$ta,$tem,$pes,$esta,$imc,$cab,$esp1,$vis,$esp2,$dis,$esp3,$audi,$esp4,$cue,$esp5,
                              $tor,$esp6,$abd,$esp7,$ext,$esp8,$colu,$esp9,$obs,$con,$med, $saturacion);

}

?>
