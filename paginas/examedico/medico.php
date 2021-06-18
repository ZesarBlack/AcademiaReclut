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
                        <h3>
                        Evaluación Médica para aspirante a policia preventivo municipal
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>


                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                              <button type="button" class="btn btn-primary" onclick="recargar()" name="button">
                                <i class="fa fa-user" ></i>
                                  Nuevo registro
                              </button>
                                <!-- content starts here ////////////////////-->
              <form name="form1" method="POST" action="PDF.php">
                <div class="row tile_count">
                    <div class="col-md-2 form-group has-feedback">
                          <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                id="folio" placeholder="Folio de registro" name="folio" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' required>
                                Folio
                                <div class="help-info"></div>
                          <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                          </span>
                          <input type="text" onkeyup="sanitizar(this)"  id="id" name="id" value=""  readonly hidden>
                          <input type="text" onkeyup="sanitizar(this)" name="tmedico" id="tmedico" value="medico" readonly hidden>
                    </div>
                  </div>
                  <br>

                      <div class="row tile_count">
                        <div class="col-md-4 col-sm-4 form-group has-feedback">

                                <input type="date" class="form-control has-feedback-left"
                                    id="fechaeval" placeholder="Fecha de evaluación " value="" name="fechaeval" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Fecha de evaluación
                                <div class="help-info"></div>
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>
                      </div>
                      <br>
                       <h3>
                          Datos Generales
                        </h3>
                        <br>

                      <div class="row tile_count">
                        <div class="col-md-4 form-group has-feedback">
                          <input type="text" onkeyup="sanitizar(this)"  maxlength="30"  class="form-control has-feedback-left"
                                id="aspirante" placeholder="Nombre(s)" name="aspirante" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' required>
                                Nombre(s)
                                <div class="help-info"></div>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                </span>
                        </div>

                       <div class="col-md-4 form-group has-feedback">
                          <input type="text" onkeyup="sanitizar(this)"  maxlength="20" class="form-control has-feedback-left"
                                id="paterno" placeholder="Apellido Paterno" name="paterno" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' required>
                                Apellido Paterno
                                <div class="help-info"></div>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                </span>
                       </div>

                    <div class="col-md-4 form-group has-feedback">
                          <input type="text" onkeyup="sanitizar(this)"  maxlength="20"  class="form-control has-feedback-left"
                                id="materno" placeholder="Apellido Materno" name="materno" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' required>
                                Apellido Materno
                                <div class="help-info"></div>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                </span>
                    </div>
                  </div>


                    <div class="row tile_count">
                       <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)" maxlength="20"  class="form-control has-feedback-left"
                                    id="sexo" placeholder="Sexo" name="sexo" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Sexo
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="20" class="form-control has-feedback-left"
                                    id="edad" placeholder="Edad" name="edad" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Edad
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>

                        <div class="col-md-4 col-sm-4 form-group has-feedback">
                                <input type="date"  maxlength="45"  class="form-control has-feedback-left"
                                    id="fechaNac" placeholder="Fecha de nacimiento " name="fechaNac" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Fecha de nacimiento
                                <div class="help-info"></div>
                                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>
                      </div>


                  <div class="row tile_count">
                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45" class="form-control has-feedback-left"
                                    id="escolaridad" placeholder="Escolaridad" name="escolaridad" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Escolaridad
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45" class="form-control has-feedback-left"
                                    id="estadoc" placeholder="Estado Civil" name="estadoc" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Estado Civil
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>
                      </div>

                    <div class="row tile_count">
                        <div class="col-md-6 col-sm-6 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="60"  class="form-control has-feedback-left"
                                    id="domicilio" placeholder="Domicilio Particular" name="domicilio" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Domicilio Particular
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="10"  class="form-control has-feedback-left"
                                    id="numerotel" placeholder="Número de teléfono" name="numerotel" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Número de teléfono
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>
                      </div>
                      <br>


                        <h3>Antecedentes personales no patológicos</h3> <br>

                    <div class="row tile_count">
                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"   maxlength="45" class="form-control has-feedback-left"
                                    id="gruposan" placeholder="Grupo sanguíneo y RH" name="gruposan" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Grupo sanguíneo y RH
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>
                      </div>


                    <div class="row tile_count">
                        <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                          <label>Tatuajes</label>
                              <div class="">
                              </div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                            <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="tatuajes" id="tatuajes" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                            <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="tatuajes" id="tatuajes" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>


                        <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                            <label>Visibles</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                            <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="tatVisibles" id="tatVisibles" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                        <div class="col-md-1 col-sm- col-xs- form-group has-feedback">
                            <label for="No">No</label>
                                <input type="radio"  maxlength="45" name="tatVisibles" id="tatVisibles" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <input type="text" onkeyup="sanitizar(this)" placeholder="Especificar"  maxlength="45" name="lugarTat" class="form-control has-feedback-left" id="lugarTat" value="" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;'> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                      </div>


                      <div class="row tile_count">
                            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                <label>Perforaciones</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                        <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                            <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="perforaciones" id="perforaciones" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                            <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="perforaciones" id="perforaciones" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>


                        <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                <label>Visibles</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                            <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="perVisibles" id="perVisibles" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                            <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="perVisibles" id="perVisibles" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <input type="text" onkeyup="sanitizar(this)" placeholder="Especificar"  maxlength="45" name="lugarPerf" class="form-control has-feedback-left" id="lugarPerf" value="" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;'> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                      </div>


                     <div class="row tile_count">
                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="30"  class="form-control has-feedback-left"
                                    id="alimentacion" placeholder="Calidad alimentación" name="alimentacion" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Calidad de alimentacion
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="30"  class="form-control has-feedback-left"
                                    id="vivienda" placeholder="Calidad vivienda" name="vivienda" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Calidad vivienda
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"   maxlength="30"  class="form-control has-feedback-left"
                                    id="higiene" placeholder="Higiene Personal" name="higiene" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    Higiene Personal
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>
                      </div>
                      <br>
                      <div class="" id="femenino">

                      </div>
                <h3>Antecedentes personales Patológicos</h3><br>

                    <div class="row tile_count">
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Alergias</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                            <label for="Si">Si</label>
                                <input type="radio"  maxlength="45" name="alergias" id="alergias" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                            <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="alergias" id="alergias" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                          </div>
                          <div class="col-md-6 form-group has-feedback">
                            <input type="text" onkeyup="sanitizar(this)"  maxlength="45"  class="form-control has-feedback-left"
                                id="esp_alerg" placeholder="Especificar" name="esp_alerg" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                          </div>
                    </div>

                    <div class="row tile_count">
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Hospitalizaciónes</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="hospital" id="hospital" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"   maxlength="45" name="hospital" id="hospital" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                          </div>
                          <div class="col-md-6 form-group has-feedback">
                            <input type="text" onkeyup="sanitizar(this)"  maxlength="45"  class="form-control has-feedback-left"
                                id="esp_hospi" placeholder="Especificar" name="esp_hospi" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                          </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Cirugías</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="cirugias" id="cirugias" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                            <label for="No">No</label>
                                <input type="radio" maxlength="45"  name="cirugias" id="cirugias" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                           <div class="col-md-6 form-group has-feedback">
                            <input type="text" onkeyup="sanitizar(this)"  maxlength="45" class="form-control has-feedback-left"
                                id="esp_cir" placeholder="Especificar" name="esp_cir" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                           </div>
                      </div>

                      <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Transfusiones</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="transfusiones" id="transfusiones" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="transfusiones" id="transfusiones" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45" class="form-control has-feedback-left"
                                id="esp_tran" placeholder="Especificar" name="esp_tran" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                           </div>
                      </div>

                      <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Fracturas o Luxaciones</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"   maxlength="45" name="fracturas" id="fracturas" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45" name="fracturas" id="fracturas" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45"  class="form-control has-feedback-left"
                                id="esp_frac" placeholder="Especificar" name="esp_frac" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                      </div>

                      <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Limitaciones</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45" name="limitaciones" id="limitaciones" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="limitaciones" id="limitaciones" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                            <input type="text" onkeyup="sanitizar(this)"  maxlength="45"  class="form-control has-feedback-left"
                                id="esp_limi" placeholder="Especificar" name="esp_limi" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Coagulopatias</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="coagulopatias" id="coagulopatias" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="coagulopatias" id="coagulopatias" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45"  class="form-control has-feedback-left"
                                id="esp_coa" placeholder="Especificar" name="esp_coa" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Trastornos de la Cicatrización</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="cicatrizacion" id="cicatrizacion" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="cicatrizacion" id="cicatrizacion" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45"  class="form-control has-feedback-left"
                                id="esp_cica" placeholder="Especificar" name="esp_cica" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Resistencia a la insulina</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45" name="insulina" id="insulina" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45" name="insulina" id="insulina" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)" maxlength="45"  class="form-control has-feedback-left"
                                id="esp_ins" placeholder="Especificar" name="esp_ins" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Diabetes</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="diabetes" id="diabetes" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                           <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                             <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="diabetes" id="diabetes" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                           </div>
                           <div class="col-md-6 form-group has-feedback">
                             <input type="text" onkeyup="sanitizar(this)"  maxlength="45"  class="form-control has-feedback-left"
                                id="esp_dia" placeholder="Especificar" name="esp_dia" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                           </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Hipertensión arterial sistémica</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="hipertension" id="hipertension" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="hipertension" id="hipertension" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45"  class="form-control has-feedback-left"
                                id="esp_hip" placeholder="Especificar" name="esp_hip" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Asma</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45" name="asma" id="asma" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45" name="asma" id="asma" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45" class="form-control has-feedback-left"
                                id="esp_asma" placeholder="Especificar" name="esp_asma" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Epilepsia</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45"  name="epilepsia" id="epilepsia" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="epilepsia" id="epilepsia" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45"  class="form-control has-feedback-left"
                                id="esp_epi" placeholder="Especificar" name="esp_epi" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Cáncer</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45" name="cancer" id="cancer" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="cancer" id="cancer" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45"  class="form-control has-feedback-left"
                                id="esp_cancer" placeholder="Especificar" name="esp_cancer" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Cardiopatías</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45" name="cardiopatias" id="cardiopatias" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"   maxlength="45" name="cardiopatias" id="cardiopatias" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45" class="form-control has-feedback-left"
                                id="esp_cardio" placeholder="Especificar" name="esp_cardio" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Trastornos Autoinmunes</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45" name="autoinmunes" id="autoinmunes" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"    maxlength="45" name="autoinmunes" id="autoinmunes" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45" class="form-control has-feedback-left"
                                id="esp_auto" placeholder="Especificar" name="esp_auto" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Ets</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45" name="ets" id="ets" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45"  name="ets" id="ets" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45" class="form-control has-feedback-left"
                                id="esp_ets" placeholder="Especificar" name="esp_ets" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Hepatitis</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45" name="hepatitis" id="hepatitis" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45" name="hepatitis" id="hepatitis" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45" class="form-control has-feedback-left"
                                id="esp_hepa" placeholder="Especificar" name="esp_hepa" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Otros</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45" name="otrosE" id="otrosE" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45" name="otrosE" id="otrosE" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45" class="form-control has-feedback-left"
                                id="esp_otros" placeholder="Especificar" name="esp_otros" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Consumo de medicamentos</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio"  maxlength="45" name="medicamentos" id="medicamentos" value="Si" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="No">No</label>
                                <input type="radio"  maxlength="45" name="medicamentos" id="medicamentos" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                            <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)"  maxlength="45" class="form-control has-feedback-left"
                                id="esp_medi" placeholder="Especificar" name="esp_medi" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificar
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                            </div>
                    </div>
                <br>

                        <h3>
                          Toxicomanías
                        </h3> <br>

                        <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Tabaquismo</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                            <label for="Si">Si</label>
                                <input type="radio" name="taba" id="taba" value="Si" > &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                            <label for="No">No</label>
                                <input type="radio" name="taba" id="taba" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                        <div class="col-md-6 form-group has-feedback">
                            <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                id="cantidad1" placeholder="Cantidad y Frecuencia" name="cantidad1" style='font-size: 10pt;
                                font-weight: bold; color: red; text-align: center;' >
                                Especificaciones
                                <div class="help-info"></div>
                                <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                </span>
                        </div>
                        </div>


                        <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Alcoholismo</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                            </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                              <label for="Si">Si</label>
                                <input type="radio" name="alcohol" id="alcohol" value="Si" > &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label for="No">No</label>
                                <input type="radio" name="alcohol" id="alcohol" value="No" checked> &nbsp; &nbsp;
                                <div class="">
                                </div>
                        </div>
                            <div class="col-md-6 form-group has-feedback">
                                <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                  id="cantidad2" placeholder="Cantidad y Frecuencia" name="cantidad2" style='font-size: 10pt;
                                  font-weight: bold; color: red; text-align: center;' >
                                  Cantidad y frecuencia
                                  <div class="help-info"></div>
                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                  </span>
                            </div>
                        </div>


                        <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Drogas</label> &nbsp; &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Si">Si</label>
                                  <input type="radio" name="drogas" id="drogas" value="Si" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="No">No</label>
                                  <input type="radio" name="drogas" id="drogas" value="No" checked> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                        </div>
                            <div class="col-md-6 form-group has-feedback">
                                  <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                    id="cantidad3" placeholder="Cantidad y Frecuencia" name="cantidad3" style='font-size: 10pt;
                                    font-weight: bold; color: red; text-align: center;' >
                                    Cantidad y frecuencia
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                            </div>
                         </div>
                         <br>






                                <h3>
                          Exploración Física
                                </h3>
                                <br>
                        <div class="row tile_count">
                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                     id="fc" placeholder="FC" name="fc" style='font-size: 12pt;
                                     font-weight: bold; color: red; text-align: center;' required>
                                     FC
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                          </div>

                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                    id="fr" placeholder="FR" name="fr" style='font-size: 12pt;
                                    font-weight: bold; color: red; text-align: center;' required>
                                    FR
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                   <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                   id="ta" placeholder="TA" name="ta" style='font-size: 12pt;
                                   font-weight: bold; color: red; text-align: center;' required>
                                   TA
                                   <div class="help-info"></div>
                                   <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                   </span>
                        </div>
                        </div>

                        <div class="row tile_count">
                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                        id="temperatura" placeholder="Temperatura" name="temperatura" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' required>
                                        Temperatura
                                        <div class="help-info"></div>
                                        <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                        </span>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                        <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                            id="peso" placeholder="Peso" name="peso" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required>
                                            Peso en kg
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                        <input type="text"  class="form-control has-feedback-left"
                                            id="estatura" placeholder="Estatura" name="estatura" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required>
                                            Estatura Metros
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                          </div>
                        </div>
                        <div class="row tile_count">
                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                        id="imc" placeholder="IMC" name="imc" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' required>
                                        IMC
                                        <div class="help-info"></div>
                                        <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                        </span>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                        id="nivel" placeholder="Nivel de peso" name="nivel" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' required>
                                        Nivel de peso
                                        <div class="help-info"></div>
                                        <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                        </span>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                        id="saturacion" placeholder="Saturación de oxígeno" name="saturacion" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center;' required>
                                        Saturación de oxígeno
                                        <div class="help-info"></div>
                                        <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                        </span>
                            </div>
                        </div>
                        <br>
                        <h3>Alteraciones</h3>
                        <br>
                         <div class="row tile_count">
                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Cabeza</label> &nbsp; &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                              </div>
                         <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Si">Si</label>
                                  <input type="radio" name="cabeza" id="cabeza" value="Si" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                         </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="No">No</label>
                                  <input type="radio" name="cabeza" id="cabeza" value="No" checked> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                        </div>
                                <div class="col-md-6 form-group has-feedback">
                                      <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                          id="espec1" placeholder="Especificar" name="espec1" style='font-size: 10pt;
                                          font-weight: bold; color: red; text-align: center;' >
                                          Especificar
                                          <div class="help-info"></div>
                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                          </span>
                                </div>
                        </div>


                        <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Visión</label> &nbsp; &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Si">Si</label>
                                  <input type="radio" name="vision" id="vision" value="Si" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="No">No</label>
                                  <input type="radio" name="vision" id="vision" value="No" checked> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                                <div class="col-md-6 form-group has-feedback">
                                      <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                            id="espec2" placeholder="Especificar" name="espec2" style='font-size: 10pt;
                                            font-weight: bold; color: red; text-align: center;' >
                                            Especificar
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                 </div>
                            </div>

                          <div class="row tile_count">
                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Discromatopsia</label> &nbsp; &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                                </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Si">Si</label>
                                  <input type="radio" name="disco" id="disco" value="Si" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="No">No</label>
                                  <input type="radio" name="disco" id="disco" value="No" checked> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                                <div class="col-md-6 form-group has-feedback">
                                  <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                    id="espec3" placeholder="Especificar" name="espec3" style='font-size: 10pt;
                                    font-weight: bold; color: red; text-align: center;' >
                                    Especificar
                                    <div class="help-info"></div>
                                    <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                    </span>
                                </div>
                          </div>

                    <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                 <label>Audición</label> &nbsp; &nbsp; &nbsp;
                                 <div class="">
                                 </div>
                            </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Si">Si</label>
                                  <input type="radio" name="audi" id="audi" value="Si" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="No">No</label>
                                  <input type="radio" name="audi" id="audi" value="No" checked> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                        </div>
                                  <div class="col-md-6 form-group has-feedback">
                                      <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                          id="espec4" placeholder="Especificar" name="espec4" style='font-size: 10pt;
                                          font-weight: bold; color: red; text-align: center;' >
                                          Especificar
                                          <div class="help-info"></div>
                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                          </span>
                                  </div>
                      </div>

                      <div class="row tile_count">
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Cuello</label> &nbsp; &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Si">Si</label>
                                  <input type="radio" name="cuello" id="cuello" value="Si" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="No">No</label>
                                  <input type="radio" name="cuello" id="cuello" value="No" checked> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                          </div>
                                  <div class="col-md-6 form-group has-feedback">
                                      <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                          id="espec5" placeholder="Especificar" name="espec5" style='font-size: 10pt;
                                          font-weight: bold; color: red; text-align: center;' >
                                          Especificar
                                          <div class="help-info"></div>
                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                          </span>
                                  </div>
                      </div>

                      <div class="row tile_count">
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Tórax</label> &nbsp; &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Si">Si</label>
                                  <input type="radio" name="torax" id="torax" value="Si" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="No">No</label>
                                  <input type="radio" name="torax" id="torax" value="No" checked> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                          </div>
                                  <div class="col-md-6 form-group has-feedback">
                                      <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                          id="espec6" placeholder="Especificar" name="espec6" style='font-size: 10pt;
                                          font-weight: bold; color: red; text-align: center;' >
                                          Especificar
                                          <div class="help-info"></div>
                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                          </span>
                                  </div>
                        </div>

                        <div class="row tile_count">
                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Abdomen</label> &nbsp; &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                              </div>
                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Si">Si</label>
                                  <input type="radio" name="abdo" id="abdo" value="Si" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                              </div>
                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="No">No</label>
                                  <input type="radio" name="abdo" id="abdo" value="No" checked> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                              </div>
                                  <div class="col-md-6 form-group has-feedback">
                                      <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                          id="espec7" placeholder="Especificar" name="espec7" style='font-size: 10pt;
                                          font-weight: bold; color: red; text-align: center;' >
                                          Especificar
                                          <div class="help-info"></div>
                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                          </span>
                                  </div>
                          </div>

                          <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Extremidades</label> &nbsp; &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Si">Si</label>
                                  <input type="radio" name="extre" id="extre" value="Si" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="No">No</label>
                                  <input type="radio" name="extre" id="extre" value="No" checked> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                                <div class="col-md-6 form-group has-feedback">
                                      <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                          id="espec8" placeholder="Especificar" name="espec8" style='font-size: 10pt;
                                          font-weight: bold; color: red; text-align: center;' >
                                          Especificar
                                          <div class="help-info"></div>
                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                          </span>
                                </div>
                        </div>

                        <div class="row tile_count">
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Columna</label> &nbsp; &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Si">Si</label>
                                  <input type="radio" name="colu" id="colu" value="Si" required> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="No">No</label>
                                  <input type="radio" name="colu" id="colu" value="No" checked> &nbsp; &nbsp;
                                  <div class="">
                                  </div>
                            </div>
                                <div class="col-md-6 form-group has-feedback">
                                      <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                          id="espec9" placeholder="Especificar" name="espec9" style='font-size: 10pt;
                                          font-weight: bold; color: red; text-align: center;' >
                                          Especificar
                                          <div class="help-info"></div>
                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                          </span>
                                </div>
                      </div>
                      <!--
                      <div class="row tile_count">
                        <div class="col-md-6 form-group has-feedback">
                              <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                  id="obser" placeholder="Observaciones" name="obser" style='font-size: 10pt;
                                  font-weight: bold; color: red; text-align: center;' >
                                  Observaciones
                                  <div class="help-info"></div>
                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                  </span>
                        </div>
                      </div>
                    -->
                      <textarea  onkeyup="sanitizar(this)" class="form-control" id="obser" placeholder="Observaciones" name="obser" rows="8" cols="80"></textarea>

                </div>


               <div class="row tile_count">
                    <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label>Conclusión</label> &nbsp; &nbsp; &nbsp;
                                <div class="">
                                </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label for="Apto">Apto</label>
                                <input type="radio" name="apto" id="apto" value="Apto" required> &nbsp; &nbsp;
                                <div class="">
                                </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                <label for="No Apto">No Apto</label>
                                <input type="radio" name="apto" id="apto" value="No Apto" > &nbsp; &nbsp;
                                <div class="">
                                </div>
                    </div>
                </div>


                <br>


              <div class="row tile_count">
                <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                          <input type="text" onkeyup="sanitizar(this)" class="form-control has-feedback-left"
                                  id="medico" placeholder="Nombre del Medico Evaluador" value="<?php echo $_SESSION['usuario']." ".$_SESSION['apellidoP']." ".$_SESSION['apellidoM'];?>" name="medico" style='font-size: 12pt;
                                  font-weight: bold; color: red; text-align: center;' required readonly>
                                  Nombre del Medico Evaluador
                                  <div class="help-info"></div>
                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                  </span>
                </div>
            </div>
            <div class="row tile_count">
                  <div class="col-xs-10 tile_stats_count">
                        <div style="text-align:center;">
                              <button type="submit" name="guardar" id="guardar" class="btn btn-primary" style="background-color:green; width:20%;  ">Guardar</button>
                        </div>
                  </div>
            </div>
        </div>
    </form>
                                <!-- content ends here////////////////////// -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- /page content -->
      </div>
    </div>
    <?php require '../../requires/script_pag.php';   ?>
  </body>
</html>
<script type="text/javascript" src="exa_medico.js"></script>
