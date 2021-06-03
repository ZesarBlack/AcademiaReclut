  <?php 
  require 'BD.php'; 
  $BD = new BD();
  $id=12345;
  $perfil = $BD -> PerfilPersona($id);
  $perfil = $perfil->fetch();
  $id = $perfil[0];
  $nombre = $perfil[1];
  $apaterno = $perfil[2];
  $amaterno = $perfil[3];
  $genero = $perfil[4];
  $fechanac = $perfil[5];
  $curp = $perfil[6];
  $rfc = $perfil[7];
  $imss = $perfil[8];
  $smn = $perfil[9];
  $direccion = $perfil[10];
  $telcasa = $perfil[11];
  $telmovil = $perfil[12];
  $correo = $perfil[13];
  ?>
<div id="central-content">
    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
  </div>
  <form id="fupForm" name="form1" method="post">
    <div class="form-group row mt-4">
     <label for="idperfil" class="col-sm-10 col-form-label text-right">No.Control</label>
     <div class="col-sm-2">
       <input type="text" class="form-control" id="idperfil"  value=<?php echo '"'.$id.'"'?>  disabled>
     </div>
    </div>
    <div class="form-group row mt-4">
           <div class=" col-md-4">
             <input type="text" class="form-control" id="nombres" value=<?php echo '"'.$nombre.'"'?> >
           </div>
           <div class=" col-md-4">
             <input type="text" class="form-control" id="apaterno" value=<?php echo '"'.$apaterno.'"'?> >
           </div>
           <div class=" col-md-4">
             <input type="text" class="form-control" id="amaterno" value=<?php echo '"'.$amaterno.'"'?> >
           </div>
    </div>
<div class="form-group row mt-4">
  <label for="fechanac" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="fechanac" value=<?php echo '"'.$fechanac.'"'?>>
    </div>
    <label for="genero" class="col-sm-2 col-form-label">Género</label>
    <div class="col-sm-4">
      <select id="genero" class="form-control">
        <?php 
        if ($genero == 'M') {
          echo '<option value="M" selected>Masculino</option>
        <option value="F">Femenino</option>';
        }else{
          echo '<option value="M">Masculino</option>
        <option value="F" selected>Femenino</option>';
        }
        ?>
      </select>
    </div>
</div>
</div>
<div class="form-group row mt-4">
    <label for="telcasa" class="col-sm-2 col-form-label">Teléfono Casa</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="telcasa" value=<?php echo '"'.$telcasa.'"'?>>
    </div>
    <label for="telmovil" class="col-sm-2 col-form-label">Teléfono Movil</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="telmovil" value=<?php echo '"'.$telmovil.'"'?>>
    </div>
  </div>
  <div class="form-group row mt-4">
      <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="direccion" value=<?php echo '"'.$direccion.'"'?>>
        </div>
      <label for="correo" class="col-sm-2 col-form-label">Correo Electronico</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="correo" value=<?php echo '"'.$correo.'"'?>>
      </div>
  </div>
  <div class="form-group row mt-4">
      <label for="curp" class="col-sm-2 col-form-label">CURP</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="curp" value=<?php echo '"'.$curp.'"'?>>
      </div>
      <label for="rfc" class="col-sm-2 col-form-label" >RFC</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="rfc" value=<?php echo '"'.$rfc.'"'?>>
      </div>
  </div>
  <div class="form-group row mt-4">
      <label for="smn" class="col-sm-2 col-form-label">Cartilla S.M.N.</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="smn" value=<?php echo '"'.$smn.'"'?>>
      </div>
      <label for="imss" class="col-sm-2 col-form-label">IMSS</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="imss" value=<?php echo '"'.$imss.'"'?>>
      </div>
  </div>
<div class="text-right mt-4">
  <input type="button" name="save" class="btn btn-primary" value="Actualizar" id="butsave">
</div>
</form>
</div>
