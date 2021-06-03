<?php
/**
 *
 */
class Seguimiento
{

  public function buscarElemento($cuip)
  {
    require '../../requires/conexion.php';
			$config=array(
					"ssl"=>array(
							'method'=>"GET",
							"verify_peer"=>false,
							"verify_peer_name"=>false,
					),
			);

			$response = file_get_contents("https://172.18.0.28/swebAcademia/?pass=c3s4RM494p&user=cesar&cuip=".$cuip, true, stream_context_create($config));
			$policia = json_decode($response);
      $curp = $policia->{'curp'};
      $querydocs="SELECT * FROM documentos WHERE curp = '$curp'";
      $resultadocs = $conn->query($querydocs);
			//$curp = $policia->{'nombre'};
      echo '
<br>
<br>
<br>
<div class="col-md-6 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h1>Información del elemento</h1>
      <div class="clearfix"></div>
      </div>
    <div class="x_content">
           <div class="form-group row">
             <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>Nombre completo</h2></label>
             <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>'.$policia->{'nombre'}.'</h2></label>
           </div>
           <div class="form-group row">
             <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>Fecha de nacimiento</h2></label>
             <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>'.$policia->{'nacimiento'}.'</h2></label>
           </div>
           <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>Número de control</h2></label>
            <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>'.$policia->{'no_control'}.'</h2></label>
           </div>
           <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>Tipo de empleado</h2></label>
            <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>'.$policia->{'tipo_empleado'}.'</h2></label>
           </div>
           <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>Tipo de servicio</h2></label>
            <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>'.$policia->{'Tipo_Servicio'}.'</h2></label>
           </div>
           <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>CURP</h2></label>
            <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>'.$policia->{'curp'}.'</h2></label>
           </div>
           <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>CUIP</h2></label>
            <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>'.$policia->{'cuip'}.'</h2></label>
           </div>
           <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3"<h2>>Puesto RNPSP</h2></label>
            <label class="control-label col-md-3 col-sm-3 col-xs-3"><h2>'.$policia->{'PuestoRNPSP'}.'</h2></label>
           </div>
        <div class="ln_solid"></div>
       <div class="form-group row">
      <div class="col-md-9 offset-md-3">
      </div>
      </div>
    </div>
  </div>
</div>

      ';
echo '
<div class="col-md-6 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h1>Historico de documentos</h1>
      <div class="clearfix"></div>
      </div>
    <div class="x_content">
    <table class="table ttable-hover table-condensed table-bordered">
      <thead>
        <th>Nombre del documento</th>
        <th>Liga</th>
      </thead>
      <tbody>
';
while ($docs=mysqli_fetch_array($resultadocs)) {
  echo "
  <tr>
    <td><h2>$docs[1]</h2></td>
    <td><h2><a href='$docs[2]/$docs[1]' target='_blank'>$docs[2]/$docs[1]</a></h2></td>
  </tr>
  ";
}
echo '
</tbody>
</table>
<div class="ln_solid"></div>
  <div class="form-group row">
  <div class="col-md-9 offset-md-3">
  </div>
  </div>
</div>
</div>
</div>
';

  }
}

$seguimiento = new Seguimiento();//instancia class seguimiento



    // code...
    if ( isset($_POST["cuip"]) && $_POST["cuip"] != "") {
      // code...
      $seguimiento->buscarElemento($_POST["cuip"]);
    }

?>
