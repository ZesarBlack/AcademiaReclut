<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'formacion_back.php';
  $formacion = new Formacion();
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
                           Formación inicial para Policía Preventivo Municipal
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
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
                                    <?php  $formacion->BuscarCursos(); ?>
                                  </tbody>
                                </table>

                                  <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form action="control_conf_back.php" method="POST">
                                                  <!--formulario de registro-->
                                                  <div class="row">
                                                    <div class="col-md-9 col-sm-9 col-xs-9 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="nombre" placeholder="Nombre completo" name="nombre" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Nombre completo
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="generacion" placeholder="Generación" name="generacion" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Generación
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="grupo" placeholder="Grupo" name="grupo" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Grupo
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-users form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="periodo" placeholder="Periodo de capacitación" name="periodo" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Periodo de capacitación
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-9 col-sm-9 col-xs-9 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="nombrec" placeholder="Nombre del cadete" name="nombrec" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Nombre del cadete
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="asignatura" placeholder="Asignatura" name="asignatura" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Asignatura
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="horasa" placeholder="Horas de asignatura" name="horasa" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Horas de asignatura
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="calif" placeholder="Calificación" name="calif" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Calificación
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-pencil-square-o form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="horast" placeholder="Horas total del curso" name="horast" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Horas total del curso
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-circle-o-notch form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="promedio" placeholder="Promedio Final" name="promedio" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Promedio Final
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-tasks form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="text" class="form-control has-feedback-left"
                                                             id="instancia" placeholder="Instancia capacitadora" name="instancia" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Instancia capacitadora
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-puzzle-piece form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <i><h2>Evaluación de Desempeño Académico</h2></i>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="date" class="form-control has-feedback-left"
                                                             id="fechaeva" placeholder="Fecha" name="fechaeva" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Fecha
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                       <input type="number" class="form-control has-feedback-left"
                                                             id="calificacion" placeholder="Calificación final" name="calificacion" maxlength="45" style='font-size: 12pt;
                                                              font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onkeyup="mayus(this);" required>
                                                              Calificación Final
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                              </span>
                                                    </div>
                                                  </div>
                                                  <!--/formulario de registro-->
                                                  <!--Datos del Aspirante-->
                                                    <div class="row" style="margin-top:2em;">
                                                      <table class="table">
                                                        <thead>
                                                          <th>NOMBRE</th>
                                                          <th>APELLIDO PATERNO</th>
                                                          <th>APELLIDO MATERNO</th>
                                                          <th>NÚMERO TEL.</th>
                                                          <th>FOLIO DE REGISTRO</th>
                                                        </thead>
                                                        <tbody id="datos">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  <!--/Datos del Aspirante-->

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                            </div>
                                            </form>
                                          </div>
                                        </div>
                                    </div>
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
<script type="text/javascript" src="formacion.js"></script>
