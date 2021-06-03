<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'reporte_cursos_back.php';
  $reporte->excelCursos();
  //$formacion = new Formacion();
  //$formacion->BuscarCursos();
  ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>Formación Inicial</span></a>
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
                           Generar Repostes de los Cursos
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <!--primero botón-->
                                <form class="" action="reporte.php" method="post">
                                    <button type="submit" class="btn btn-primary" onclick="" name="button">Reporte general</button>
                                </form>

                                <table class="table">
                                  <thead>
                                    <th>Nombre</th>
                                    <th>Generación</th>
                                    <th>Grupo</th>
                                    <th>Periodo</th>
                                    <th>Lugar de capacitación</th>
                                    <th>Entidad que dará la capacitación</th>
                                    <th>Observaciones</th>
                                    <th></th>
                                  </thead>
                                  <tbody>
                                    <?php  $reporte->BuscarCursos(); ?>
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
<script type="text/javascript" src="reporte.js"></script>
