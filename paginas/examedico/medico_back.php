<?php
class Medico{

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
                       <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
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

      public function nuevo($id,$fece,$tip,$asp,$pat,$mat,$sex,$edad,$fecn,$esc,$estc,$dom,$num,$gru,
                            $tat,$tatv,$lugarTat,$per,$perv,$lugarPerf,$cala,$calv,$hig,$men,$fum,$rit,$cant,$dol,$ges,$part,$abo,$ces,
                            $emb,$lac,$ale,$espa,$hos,$esph,$cir,$espc,$tra,$espt1,$fra,$espf,$lim,$espl,$coa,$espco,$cic,
                            $espci,$ins,$espi,$dia,$espd,$hip,$esphi,$asma,$espas,$epi,$espe,$can,$espca,$car,$espio,
                            $aut,$espt2,$ets,$esps,$hep,$esphe,$otr2,$espo2,$medi,$espm,$taba,$can1,$alc,$can2,$dro,$can3,
                            $fc,$fr,$ta,$tem,$pes,$esta,$imc,$cab,$esp1,$vis,$esp2,$dis,$esp3,$audi,$esp4,$cue,$esp5,
                            $tor,$esp6,$abd,$esp7,$ext,$esp8,$colu,$esp9,$obs,$con,$med, $saturacion){
          include '../../requires/conexion.php';


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
                                          conclusion, nombre_medico, fecha, cadete_id, saturacion_o) values ('$fece', '$tip',	'$asp', '$pat', '$mat', '$sex',	'$edad',
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
                                                                     '$colu', '$esp9', '$obs', '$con', '$med', '$fece', '$id', '$saturacion')";
                                                                      echo $sql;

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
      }


      public function obtenerCmedico($tipo, $busqueda)
      {
        include '../../requires/conexion.php';
        if ($tipo == "nombre") {
          $piezas = explode(" ", $busqueda);
          if(sizeof($piezas) == 1){
            $nombre = $piezas[0];
            $query_cadetes = "SELECT idExa, nombre, paterno, materno, fecha_nac, domicilio, conclusion, cadete_id, estado, fecha_eva FROM exa_medico WHERE nombre like '%$busqueda%'  or paterno like '%$nombre%' ORDER BY fecha_eva DESC, idExa DESC";
          }else if(sizeof($piezas) == 2){
            $nombre = $piezas[0];
            $paterno = $piezas [1];
            $query_cadetes = "SELECT idExa, nombre, paterno, materno, fecha_nac, domicilio, conclusion, cadete_id, estado, fecha_eva FROM exa_medico WHERE (nombre like '%$nombre%' and paterno like '%$paterno%') or (paterno like '%$nombre%' and materno like '%$paterno%') ORDER BY fecha_eva DESC,idExa DESC"; //nombre like '%$nombre2%'
          }else if(sizeof($piezas) == 3){
            $nombre = $piezas[0];
            $paterno = $piezas[1];
            $materno = $piezas[2];
            $query_cadetes = "SELECT idExa, nombre, paterno, materno, fecha_nac, domicilio, conclusion, cadete_id, estado, fecha_eva FROM exa_medico WHERE (nombre like '%$nombre%' and paterno like '%$paterno%' and materno like '%$materno%') or (paterno like '%$nombre%' and materno like '%$paterno%' AND  nombre like '%$materno%') ORDER BY fecha_eva DESC, idExa DESC";
          }else if(sizeof($piezas) == 4){
            $nombre = $piezas[0];
            $nombre2 = $piezas[0]." ".$piezas[1];
            $paterno = $piezas [1];
            $paterno2 = $piezas[2];
            $materno = $piezas[2];
            $materno2 = $piezas[3];
            $query_cadetes = "SELECT nombre, a_paterno, a_materno, curp, f_nacimiento, tipo_ingreso, genero, idCadete, folio, validacion, fecha_eva FROM cadete WHERE (nombre like '%$nombre2%' and a_paterno like '%$paterno2%' and a_materno like '%$materno2%')";
          }
          $resultado = $conn->query($query_cadetes);
          //echo $query_cadetes;
          while ($cad=mysqli_fetch_row($resultado)) {
            echo '
            <tr>
            <td>'. $cad[0].'</td>
            <td>'. $cad[1].'</td>
            <td>'. $cad[2].'</td>
            <td>'. $cad[3].'</td>
            <td>'. $cad[4].'</td>
            <td>'. $cad[5].'</td>
            <td>'. $cad[9].'</td>
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
        $query="SELECT idExa ,nombre, paterno, materno, fecha_nac, domicilio, conclusion, cadete_id, fecha_eva FROM exa_medico WHERE cadete_id like '%$busqueda%' ORDER BY fecha_eva DESC,idExa DESC";
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
            <td>'. $cad[8].'</td>
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


  }

$nuevo = new Medico();

if (isset($_POST['tipo']) && isset($_POST['busqueda'])) {
$nuevo->obtenerCmedico($_POST['tipo'] ,$_POST['busqueda']);
}

if (isset($_POST['folio'])) {
 $nuevo->datosBasicosCad($_POST['folio']);
}


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
      //$fec1  = $_POST['fecha1'];
      //$obs2  = $_POST['obser2'];
      //$con2  = $_POST['apto2'];
      //$est  = $_POST['estado'];
      $nuevo -> nuevo($folio,$fece,$tip,$asp,$pat,$mat,$sex,$edad,$fecn,$esc,$estc,$dom,$num,$gru,
                            $tat,$tatv,$lugarTat,$per,$perv,$lugarPerf,$cala,$calv,$hig,$men,$fum,$rit,$cant,$dol,$ges,$part,$abo,$ces,
                            $emb,$lac,$ale,$espa,$hos,$esph,$cir,$espc,$tra,$espt1,$fra,$espf,$lim,$espl,$coa,$espco,$cic,
                            $espci,$ins,$espi,$dia,$espd,$hip,$esphi,$asma,$espas,$epi,$espe,$can,$espca,$car,$espio,
                            $aut,$espt2,$ets,$esps,$hep,$esphe,$otr2,$espo2,$medi,$espm,$taba,$can1,$alc,$can2,$dro,$can3,
                            $fc,$fr,$ta,$tem,$pes,$esta,$imc,$cab,$esp1,$vis,$esp2,$dis,$esp3,$audi,$esp4,$cue,$esp5,
                            $tor,$esp6,$abd,$esp7,$ext,$esp8,$colu,$esp9,$obs,$con,$med, $saturacion);
      header('location: medico.php');
    }

    if (isset($_POST["tipo2"])) {
      if ($_POST["tipo2"] == "FEMENINO") {
         $nuevo->exafemenino();
      }else {
        echo "";
      }
    }

    if (isset($_POST["id_exa"]) && isset($_POST["id"])) {

      $folio = $_POST['id'];
      $fece  = $_POST['fechaeval'];
      $tip  = "revalorarcion";
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

      $nuevo -> nuevo($folio,$fece,$tip,$asp,$pat,$mat,$sex,$edad,$fecn,$esc,$estc,$dom,$num,$gru,
                            $tat,$tatv,$lugarTat,$per,$perv,$lugarPerf,$cala,$calv,$hig,$men,$fum,$rit,$cant,$dol,$ges,$part,$abo,$ces,
                            $emb,$lac,$ale,$espa,$hos,$esph,$cir,$espc,$tra,$espt1,$fra,$espf,$lim,$espl,$coa,$espco,$cic,
                            $espci,$ins,$espi,$dia,$espd,$hip,$esphi,$asma,$espas,$epi,$espe,$can,$espca,$car,$espio,
                            $aut,$espt2,$ets,$esps,$hep,$esphe,$otr2,$espo2,$medi,$espm,$taba,$can1,$alc,$can2,$dro,$can3,
                            $fc,$fr,$ta,$tem,$pes,$esta,$imc,$cab,$esp1,$vis,$esp2,$dis,$esp3,$audi,$esp4,$cue,$esp5,
                            $tor,$esp6,$abd,$esp7,$ext,$esp8,$colu,$esp9,$obs,$con,$med, $saturacion);
    // header('location: busqueda_medico.php');

    // echo $hos;
    }

    //header("Location: confianza.php");

?>
