<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  include 'medico_back.php';
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
                        <h3>Busqueda de registro del examen médico</h3>
                    </div>
                    <td> <h2>
                    </h2>
                    </td>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                              <!-- content ends here////////////////////// -->

                                <form class="" action="" method="">

                                  <div class="col-md-3">
                                    <select class="form-control has-feedback-left" name="tipo" id="tipo" style='font-size: 10pt;
                                    font-weight: bold; color: black; text-align: center;'>
                                      <option>Seleccione una opción</option>
                                      <option value="nombre">Nombre</option>
                                      <option value="folio">Folio</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" name="busqueda" value="" id="busqueda" placeholder="Ingrese su busqueda" class="form-control has-feedback-left" style='font-size: 10pt;
                                    font-weight: bold; color: red; text-align: center;'>
                                  </div>
                                </form>
                                <br>
                                <br>
                                <div class="row">
                                  <table class="table ttable-hover table-condensed table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Folio</th>
                                        <th>Nombre</th>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>Fechas de nacimiento</th>
                                        <th>Dirección</th>
                                        <th>Fecha de evaluacio o Revaloración</th>
                                        <th>Tipo de evaluación</th>
                                        <th>Conclusión</th>
                                      </tr>
                                    </thead>
                                    <tbody id="datos">
                                    </tbody>
                                  </table>
                                </div>
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
<script type="text/javascript" src="exa_medico.js"></script>
