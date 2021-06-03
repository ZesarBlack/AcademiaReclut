<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  include 'cad_interesado_back.php';
  $apto->axcelAspirantes();
  ?>
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
                            Aspirantes Interesados C3
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->

                                <table class="table ttable-hover table-condensed table-bordered">
                                  <thead>
                                    <tr>
                                      <th>FOLIO DE REGISTRO</th>
                                      <th>FECHA DE RECEPCIÓN DE DOCUMENTOS</th>
                                      <th>CURP</th>
                                      <th>APELLIDO PATERNO</th>
                                      <th>APELLIDO MATERNO</th>
                                      <th>NOMBRE(S)</th>
                                      <th>NOMBRE COMPLETO</th>
                                      <th>GÉNERO</th>
                                      <th>FECHA DE NACIMIENTO</th>
                                      <th>NÚMERO DE OFICIO DE COMISIÓN A C3</th>
                                      <th>FECHA DE PRIMER DÍA</th>
                                      <th>ASISTEMCIA PRIMER DÍA</th>
                                      <th>RESULTADO (APROBADO/ NO APROBADO)</th>
                                      <th>NÍMERO DE OFICIO</th>
                                      <th>FECHA DE EMISIÓN DE RESULTADOS</th>
                                      <th>OBSERVACIONES</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php  $id = $apto->obtenerCadetes();
                                    ?>
                                  </tbody>
                                </table>
                                <div class="col-md-2">
                                  <form class="" action="apto.php" method="post">
                                    <button type="submit" name="button">Descargar reporte de aspirantes</button>
                                  </form>
                                </div>
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
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title col-11 text-center">INFORMACIÓN DE LA EVALUACIÓN</h2>
            <button type="button" class="close col-1" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <!-- Modal body -->
            <div class="modal-body">

                <form action="#">
                    <input type="text" id="id_ll" name="id_ll" value="" readonly hidden>

                    <div id="datos">
                    </div>
                    <div class="row" style="margin-top:2em;">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">Número de oficio  de comisión:</div>
                        <div class="col-sm-7"><input id="oficio" name="oficio" type="text" style='font-size: 12pt;
                        font-weight: bold; color: red; text-align: center;' maxlength="18" required></div>
                    </div>
                    <div class="row" style="margin-top:2em;">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">Fecha de primer día :</div>
                        <div class="col-sm-7"><input id="fecha" name="fecha" type="date" style='font-size: 12pt;
                        font-weight: bold; color: red; text-align: center;' required></div>
                    </div>
                    <div class="row" style="margin-top:2em;">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">Asistencia primer día :</div>
                        <div class="col-sm-7">
                          <select class="form form-control" name="adia" id="adia">
                            <option value="SÍ">SÍ</option>
                            <option value="NO">NO</option>
                          </select>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2em;">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">Número de oficio  de C3:</div>
                        <div class="col-sm-7">
                          <input type="text" style='font-size: 12pt; font-weight: bold; color: red; text-align: center;' name="noficio" id="noficio" value="">
                        </div>
                    </div>
                    <div class="row" style="margin-top:2em;">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                          Resultado de evaluación:
                        </div>
                        <div class="col-sm-7">
                          <select class="form form-control" name="resultado" id="resultado">
                            <option value="APROBADO">Aprobado</option>
                            <option value="NO APROBADO">No Aprobado</option>
                            <option value="CANCELADO">Cancelado</option>
                          </select>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2em;">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">Fecha de emisión de hoja de resultado :</div>
                        <div class="col-sm-7"><input id="fecha_resultado" name="fecha_resultado" type="date" style='font-size: 12pt;
                        font-weight: bold; color: red; text-align: center;' required></div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-3">observaciones :</div>
                      <div class="col-sm-7">
                        <textarea name="observ" id="observ" style="width: 100%;" rows="8" cols="80"></textarea>
                      </div>
                    </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" onclick="actualizarLlamado()" class="btn btn-primary">Guardar cambios</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</html>
<script type="text/javascript" src="cad_interesado.js">
</script>
