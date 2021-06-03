<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  $busqueda= "";
  /* include("conexion.php"); */

  include '../../requires/conexion.php';

     if(isset($_POST["buscar"])){
          $busqueda= $_POST["buscar"];
       }
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
                        <div class="animated flipInY ">
                          <div class="tile-stats" style="border: 2px solid #000000;">
                            <h3>
                                Reporte
                            </h3>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <br><br>
                                <!--
                                <form action="" method="post">

                                  <div class="row tile_count">
                                       <div class="col-md-4 col-sm-4 col-sm-4 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                              id="buscar" placeholder="Generación" name="buscar" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;'>
                                              Generación:
                                              <div class="help-info"></div>
                                              <span class="fa fa-object-group form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                         <div class="col-md-4 col-sm-4 col-sm-4 form-group has-feedback">
                                                <input type="submit"  name="enviando" id="buscar" value="Buscar" style='font-size: 12pt;
                                                font-weight: bold; color: black; text-align: center;'>
                                         </div>
                                  </div>
                                </form>
                              -->
                                      <div class="modal fade" id="myModal">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <!-- Modal body -->
                                                <div class="modal-body">

                                                    <form action="control_conf_back.php" method="POST">
                                                        <div class="row" style="margin-top:2em;">
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">Número de control del Elemento:</div>
                                                            <div class="col-sm-7"><input id="control" name="control" type="text" style='font-size: 12pt;
                                                            font-weight: bold; color: red; text-align: center;' maxlength="18" required></div>
                                                        </div>
                                                        <div class="row" style="margin-top:2em;">
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">Estatus CUP:</div>
                                                            <div class="col-sm-7"><input id="estatus" name="estatus" type="text" style='font-size: 12pt;
                                                            font-weight: bold; color: red; text-align: center;' required></div>
                                                        </div>
                                                        <div class="row" style="margin-top:2em;">
                                                            <div class="col-sm-1"></div>
                                                            <div class="col-sm-3">Observación Academia:</div>
                                                            <div class="col-sm-7"><input id="observacion" name="observacion" type="text" style='font-size: 12pt;
                                                            font-weight: bold; color: red; text-align: center;' required></div>
                                                        </div>
                                                        <div class="row" style="margin-top:2em;">
                                                          <table class="table">
                                                            <tbody id="datos">
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                      </div>

                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"  name="button">Agregar</button>
                                        <table class="table ttable-hover table-condensed table-bordered">
                                          <thead>
                                            <th>Número de control</th>
                                            <th>Nombre</th>
                                            <th>CUIP</th>
                                            <th>PuestoRNPSPS</th>
                                            <th>Estatus de CUP</th>
                                            <th>Observaciones</th>
                                          </thead>
                                          <tbody id="lista">
                                          </tbody>
                                        </table>
                                <!-- content ends here////////////////////// -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
<?php require '../../requires/script_pag.php';   ?>
</body>
</html>
<script type="text/javascript" src="control.js"></script>
