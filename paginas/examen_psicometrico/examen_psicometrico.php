<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
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
                              Examen Psicométrico
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
                                <div class="row">
                                  <div class="col-md-4">
                                     <input type="text" id="busqueda" placeholder="Buscar aspirantes" class="form-control" name="busqueda" value="<?php if (isset($_GET['folio'])) { echo $_GET['folio'];}   ?>">
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <table class="table ttable-hover table-condensed table-bordered">
                                      <thead>
                                        <th>Nombre completo del aspirante</th>
                                        <th>CURP</th>
                                        <th>Teléfono</th>
                                        <th>folio</th>
                                        <th colspan="2">Resultado de la evaluación psicométrica</th>
                                      </thead>
                                      <tbody id="datos_aspirante">
                                        <?php
                                        if (isset($_GET['folio'])) {
                                          require 'psicometrico_back.php';
                                          $psicometrico->buscarElemento($_GET['folio']);
                                        }
                                         ?>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <!-- content ends here////////////////////// -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--<select class="form-control" name="">
  <option value="">apto</option>
  <option value="">no apto</option>
</select>-->
        <!-- /page content -->
      </div>
    </div>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript" src="psicometrico.js">

</script>
