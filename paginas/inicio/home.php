<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  include 'home_back.php';
  $materia = new Materias();
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
                        Panel de Inicio
                        <?php
                            $fecha_actual = date("d-m-Y");
                            echo "<br>";
                            //sumo 1 año
                            //echo date("d-m-Y",strtotime($fecha_actual."+ 1 year"));
                            //echo "<br>";
                            //resto 1 año
                            //echo date("d-m-Y",strtotime($fecha_actual."- 1 year"));
                         ?>
                    </h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row" >
                <div class="col-md-12">
                    <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                        <div class="x_content ">
                            <!-- content starts here ////////////////////-->
                            <?php
                            if (isset($_SESSION['rol']) && $_SESSION['rol']=="6") {
                              // code...

                              $materia->obtenerMateriasAlumno($_SESSION['id']);
                            }else {
                              // code...
                              $materia->obtenerMaterias();
                            }

                            ?>
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
