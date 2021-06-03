<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'control_reingreso_back.php';
  $reingreso->excelReingresos();
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
                            Reingresos
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <form class="" action="apto.php" method="post">
                                  <button type="submit" class="btn btn-primary" name="button">Crear reporte</button>
                                </form>
                                <table class="table table-bordered">
                                  <thead>
                                    <thead>
                                      <th>ID</th>
                                      <th>FECHA DE REGISTRO</th>
                                      <th>TIPO DE INGREO</th>
                                      <th>FOLIO DE REGISTRO</th>
                                      <th>APELLIDO PATERNO</th>
                                      <th>APELLIDO MATERNO</th>
                                      <th>NOMBRE</th>
                                      <th>FECHA DE NACIMIENTO</th>
                                      <th>EDAD</th>
                                    </thead>
                                  </thead>
                                  <tbody>
                                     <?php $reingreso->obtenerReingresos();?>
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
      </div>
    </div>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
