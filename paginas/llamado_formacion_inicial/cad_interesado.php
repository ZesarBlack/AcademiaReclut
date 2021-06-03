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
                            Aspirantes Aptos para la Formación Inicial
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                          <div class="row tile_count">
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                              <span class="count_top"><i class="fa fa-user"></i> Total Aptos para Formación Inicial</span>
                              <div class="count"><?php $apto->numeroCadetes(); ?></div>
                              <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>-->
                            </div>
                          </div>
                            <div class="col-md-2">
                              <form class="" action="apto.php" method="post">
                                <button type="submit" class="btn btn-primary" name="button">Descargar reporte de aspirantes</button>
                              </form>
                            </div>
                            <div class="x_content"  style="overflow : auto; overflow: scroll;">
                                <!-- content starts here ////////////////////-->
                                <table class="table table-striped jambo_table table-bordered">
                                  <thead>
                                    <tr>
                                      <th>FOLIO DE REGISTRO</th>
                                      <th>FECHA DE RECEPCIÓN DE DOCUMENTOS</th>
                                      <th>NOMBRE COMPLETO</th>
                                      <th>FECHA DE NACIMIENTO</th>
                                      <th>EDAD</th>
                                      <th>CELULAR</th>
                                      <th>TELÉFONO 1</th>
                                      <th>TELÉFONO 2</th>
                                      <th>EMAIL</th>
                                      <th>LLAMADO A FORMACIÓN INICIAL</th>
                                      <th>OBSERVACIONES</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      $id = $apto->obtenerCadetes();
                                    ?>
                                  </tbody>
                                </table>
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
                  <div class="row" style="margin-top:2em;">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-3">Estado del llamado :</div>
                      <div class="col-sm-7">
                        <select class="form form-control" id="llamado" name="llamado">
                          <option value="INTERESADO">Interesado</option>
                          <option value="NO INTERESADO">No interesado</option>
                          <option value="NO LOCALIZADO">No localizado</option>
                        </select>
                      </div>
                  </div>
                  <div class="row" style="margin-top:2em;">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-3">Observación :</div>
                      <div class="col-sm-7">
                        <textarea name="observaciones" id="observaciones" value="" style="width:100%;" rows="8" cols="80"></textarea>
                      </div>
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
