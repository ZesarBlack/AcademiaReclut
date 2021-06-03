<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php'; ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>Academia</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <?php require '../../requires/inf_usr.php'  ?>
            <!-- /menu profile quick info -->
            <br>
            <!-- sidebar menu -->
            <?php include '../../requires/sidebar.php'; ?>
            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <?php require '../../requires/top_nav.php'; ?>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col border border-primary" role="main" style="background-color: #E9E9E9;">

            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>
                            Registro de personal
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <form name="Alta PERSONAL" action="altapersonal_back.php" method="POST">


                   <div class="row tile_count">
                                         <div class="form-group col-xs-4">
                                          <label for="Nocontrol">No. de Control:</label>
                                          <input type="text"  class="form-control" name="idpersona" id="idpersona"  placeholder="No. de control"  onBlur="comprobarUsuario()" required minlength="6" maxlength="6">

                                          </div>


                  <div class="form-group col-xs-4">
                    <label for="ComprobarNocontrol">Estatus:</label>
                                          <span  id="resultado" ></span>
                                          <p><img src="LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>

                                        </div>



                                      </div>






                                      <div class="row tile_count">
                                         <div class="form-group col-xs-4">
                                          <p>Apellido Paterno:
                                          <input type="text" class="form-control" name="apepat" id="apellidopat"  placeholder="Apellido Paterno" required=""></p>
                                          </div>


                                        <div class="form-group col-xs-4">
                                          <p>Apellido Materno:
                                           <input type="text" class="form-control" name="apemat" placeholder="Apellido Materno" required=""></p>
                                        </div>
                                        <div class="form-group col-xs-4">
                                            <p>Nombre:
                                           <input type="text" class="form-control" name="nombre" placeholder="Nombre(s)" required=""></p>
                                        </div>
                                      </div>


                                      <div class="row tile_count">
                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="date" class="form-control has-feedback-left" id="fecha" placeholder="fecha" name="FechaNacimiento"  style='font-size: 12pt; font-weight: bold; color: red; text-align: center;' required="">
                                                    Fecha Nacimiento
                                              <div class="help-info"></div>
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                        </div>


                                           <div class="form-group col-xs-4">
                                            <p>Genero:
                                              <select name="genero" id="genero" class="select" class=" form-control-feedback" required="">
                                                    <option value="">Seleccione una opción</option>
                                                      <option value="M">Masculino</option>
                                                      <option value="F">Femenino</option>
                                                      </select></p>
                                           </div>
                                           <div class="form-group col-md-4">

                                                <p>Estado Civil:
                                                  <select name="EdoCivil" id="EdoCivil" class="custom-select" required="">
                                                    <option value="">Seleccione una opción</option>
                                                      <option value="Soltero">Soltero</option>
                                                      <option value="Casado">Casado</option>
                                                      <option value="Divorciado">Divorciado</option>
                                                      <option value="Viudo">Viudo</option>
                                                      </select></p>
                                                    </div>

                                            </div>




                                            <div class="row tile_count">
                                          <div class="form-group col-xs-6">
                                            <p>Dirección
                                        <input type="text" class="form-control" name="Direccion" placeholder="Dirección" required=""></p>
                                           </div>
                                                  <div class="form-group col-md-6">
                                                      <p>Correo:
                                                    <input type="text" class="form-control" name="Correo" id="Corr" placeholder="Correo" required=""></p>
                                                    </div>

                                         </div>
                                         <div class="row tile_count">
                                             <div class="form-group col-md-6">
                                               <p>Telefono Casa:
                                              <input type="text"  maxlength="10" size="10" class="form-control" name="Telefono1" id="Tel1" placeholder="Telefono 01" required minlength="10" maxlength="10"></p>
                                             </div>
                                             <div class="form-group col-md-6">
                                              <p>Telefono movil:
                                              <input type="text"  maxlength="10" size="10" class="form-control" name="Telefono2" id="Tel2" placeholder="Telefono 02" required minlength="10" maxlength="10"></p>
                                             </div>
                                          </div>
                                              <div class="row tile_count">
                                              <div class="form-group col-md-3">
                                                 <p>Curp:
                                              <input type="text" class="form-control" name="CURP" id="CURP" placeholder="CURP" required minlength="18" maxlength="18"></p>
                                             </div>
                                             <div class="form-group col-md-3">
                                               <p>Rfc:
                                              <input type="text" class="form-control" name="RFC" id="RFC" placeholder="RFC" required minlength="13" maxlength="13"></p>
                                             </div>
                                             <div class="form-group col-md-3">
                                               <p>Cartilla Militar:
                                              <input type="text" class="form-control" name="Cartilla" id="SMN"   placeholder="Cartilla S.M.N" required minlength="9" maxlength="9"></p>
                                             </div>
                                              <div class="form-group col-md-3">
                                                <p>No.Seguro Social:
                                              <input type="text" class="form-control" name="Nosegur" id="noss"  placeholder="No. IMSS" required minlength="11" maxlength="11"></p>
                                             </div>

                                              </div>

                                             <div class="row tile_count">
                                              <div class="form-group col-md-3">
                                                    <div class="custom-file">
                                                      <label class="custom-file-label" for="customFileLang">Fotografia:</label>
                                                       <input type="file" class="custom-file-input" id="customFileLang" lang="es">


                                                       </div>
                                                     </div>
                                                   </div>

                                       <div class="form-group-row">

                                       <button type="submit" class="btn btn-primary">Continuar con el Registro</button>

                                        </div>


                                </form>

                                <!-- content ends here////////////////////// -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /page content -->
      </div>
    </div>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript">
   function comprobarUsuario() {
  $("#loaderIcon").show();
  jQuery.ajax({
  url: "buscarnocontrol.php",
  data:'idpersona='+$("#idpersona").val(),
  type: "POST",
  success:function(data){
    $("#resultado").html(data);
    $("#loaderIcon").hide();
  },
  error:function (){}
  });
}

</script>

<script>
    $(document).ready(function(){
        $('#datos').load('verifica.php');
    });
</script>
