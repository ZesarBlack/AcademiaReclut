<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'fisico_back.php';
  $examen->axcelAspirantes();
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
                        <h4>
                            Lista de evaluados en el exámen físico
                        </h4>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content" style="overflow : auto;">
                                <!-- content starts here ////////////////////-->
                                <form class="" action="reporte.php" method="post">
                                  <button type="submit" class="btn btn-primary" name="button"> descargar reporte</button>
                                </form>
                                <table class="table table-bordered">
                                  <thead>
                                    <th colspan="3"><h4>Datos Generales del aspirante<h4></th>
                                    <th colspan="2"><h4>resistencia</h4></th>
                                    <th colspan="2"><h4>Flexiones</h4></th>
                                    <th  colspan="2"><h4>Abdominales</h4></th>
                                    <th  colspan="2"><h4>Lagartijas</h4></th>
                                    <th  colspan="2"><h4>Sentadillas</h4></th>
                                    <th  colspan="2"><h4>Velocidad</h4></th>
                                    <th><h4>Maneja</th>
                                    <th><h4>Total de calorias</h4></th>
                                    <th><h4>Resultado</h4></th>
                                    <th><h4>Evaluador</h4></th>
                                  </thead>
                                  <tbody>
                                    <th><h4>Tipo de convocatoria<h4></th>
                                    <th><h4>Folio de registro<h4></hd>
                                    <th><h4>Nombre del aspirante<h4></th>
                                    <td><h4>Metros</h4></td>
                                    <td><h4>Calificación</h4></td>
                                    <td><h4>Cantidad</h4></td>
                                    <td><h4>Calificación</h4></td>
                                    <td><h4>Cantidad</h4></td>
                                    <td><h4>Calificación</h4></td>
                                    <td><h4>Cantidad</h4></td>
                                    <td><h4>Calificación</h4></td>
                                    <td><h4>Cantidad</h4></td>
                                    <td><h4>Calificación</h4></td>
                                    <td><h4>Tiemp</h4>o</td>
                                    <td><h4>Velocidad</h4></td>
                                    <td><h4>Sí/No</h4></td>
                                    <td><h4>Número</h4></td>
                                    <td><h4>Apto/No apto</h4></td>
                                    <td><h4>Nombre</h4></td>
                                    <?php $examen->obtenerLista(); ?>
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
