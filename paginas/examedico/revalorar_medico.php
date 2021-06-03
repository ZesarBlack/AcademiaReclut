<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  include 'medico_back.php';
  $examen = $nuevo->obtenerEmedico($_POST["idCad"]);
  if ( $examen =="El aspirante no tiene examen previo") {
    echo '<script type="text/javascript">
    alert("sin regitros");
    window.location.href = "busqueda_medico.php";
    </script>';
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
                        <h3>
                            Revaloración médica del aspirante
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <form name="form1" method="POST" action="PDF.php">

                                  <div class="row tile_count">
                                      <div class="col-md-2 form-group has-feedback">
                                            <input type="text" id="id" name="id" value="<?php echo $examen[117]; ?>" hidden>
                                            <input type="text" id="id_exa" name="id_exa" value="<?php echo $examen[0] ?>"  hidden>
                                      </div>
                                    </div>
                                    <br>
                                        <div class="row tile_count">
                                          <div class="col-md-4 col-sm-4 form-group has-feedback">
                                                  <input type="date" class="form-control has-feedback-left"
                                                      id="fechaeval" placeholder="Fecha de evaluación " value="" name="fechaeval" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' required>
                                                      Fecha de Revaloración
                                                  <div class="help-info"></div>
                                                      <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>
                                        </div>
                                         <h3>
                                            Datos Generales
                                          </h3>
                                          <br>

                                        <div class="row tile_count">
                                          <div class="col-md-4 form-group has-feedback">
                                            <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                                                  id="aspirante" placeholder="Nombre(s)"  value="<?php echo $examen[3]; ?>" name="aspirante" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;' onkeyup="mayus(this);">
                                                  Nombre(s)
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                  </span>
                                          </div>

                                         <div class="col-md-4 form-group has-feedback">
                                            <input type="text"  maxlength="20" class="form-control has-feedback-left"
                                                  id="paterno" placeholder="Apellido Paterno" value="<?php echo $examen[4]; ?>" name="paterno" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;' onkeyup="mayus(this);">
                                                  Apellido Paterno
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                  </span>
                                         </div>

                                      <div class="col-md-4 form-group has-feedback">
                                            <input type="text"  maxlength="20"  class="form-control has-feedback-left"
                                                  id="materno" placeholder="Apellido Materno" value="<?php echo $examen[5]; ?>" name="materno" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;' onkeyup="mayus(this);">
                                                  Apellido Materno
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                  </span>
                                      </div>
                                    </div>


                                      <div class="row tile_count">
                                         <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text" maxlength="20"  class="form-control has-feedback-left"
                                                      id="sexo" placeholder="Sexo" name="sexo" value="<?php echo $examen[6]; ?>" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' onkeyup="mayus(this);">
                                                      Sexo
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>

                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="20" class="form-control has-feedback-left"
                                                      id="edad" placeholder="Edad" name="edad" value="<?php echo $examen[7]; ?>" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Edad
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>

                                          <div class="col-md-4 col-sm-4 form-group has-feedback">
                                                  <input type="date"  maxlength="45"  class="form-control has-feedback-left"
                                                      id="fechaNac" placeholder="Fecha de nacimiento " value="<?php echo $examen[8]; ?>" name="fechaNac" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Fecha de nacimiento
                                                  <div class="help-info"></div>
                                                      <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>
                                        </div>


                                    <div class="row tile_count">
                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="45" class="form-control has-feedback-left"
                                                      id="escolaridad" placeholder="Escolaridad" value="<?php echo $examen[10]; ?>"  name="escolaridad" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' onkeyup="mayus(this);">
                                                      Escolaridad
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>
                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="45" class="form-control has-feedback-left"
                                                      id="estadoc" placeholder="Estado Civíl" value="<?php echo $examen[12]; ?>" name="estadoc" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' onkeyup="mayus(this);">
                                                      Estado Civíl
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>
                                      </div>


                                      <div class="row tile_count">
                                          <div class="col-md-6 col-sm-6 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="60"  class="form-control has-feedback-left"
                                                      id="domicilio" placeholder="Domicilio Particular" value="<?php echo $examen[15]; ?>" name="domicilio" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' onkeyup="mayus(this);">
                                                      Domicilio Particular
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>

                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="10"  class="form-control has-feedback-left"
                                                      id="numerotel" placeholder="Número de teléfono" value="<?php echo $examen[16]; ?>" name="numerotel" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
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
                                                <input type="text"   maxlength="45" class="form-control has-feedback-left"
                                                      id="gruposan" placeholder="Grupo sanguíneo y RH" value="<?php echo $examen[17]; ?>" name="gruposan" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Grupo sanguíneo y RH
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>
                                        </div>


                                      <div class="row tile_count">
                                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                            <label>Tatuajes</label>
                                                <div class="">
                                                </div>
                                          </div>
                                          <?php
                                          if ($examen[18]=="No") {
                                            echo '
                                            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="tatuajes" id="tatuajes" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="tatuajes" id="tatuajes" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            ';
                                          }else {
                                            // code...
                                            echo '
                                            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="tatuajes" id="tatuajes" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="tatuajes" id="tatuajes" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            ';
                                          }

                                           ?>
                                          <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                              <label>Visibles</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                          </div>
                                          <?php
                                          if ($examen[19]=="No") {
                                            echo '
                                            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="tatVisibles" id="tatVisibles" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="tatVisibles" id="tatVisibles" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            ';
                                          }else {
                                            echo '
                                            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="tatVisibles" id="tatVisibles" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="tatVisibles" id="tatVisibles" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            ';
                                          }
                                           ?>

                                          <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <input type="text" placeholder="Especificar"  maxlength="45" name="lugarTat" class="form-control has-feedback-left" id="lugarTat" value="<?php echo $examen[20]; ?>" style='font-size: 12pt;
                                                  font-weight: bold; color: red; text-align: center;'> &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                          </div>
                                        </div>


                                        <div class="row tile_count">
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label>Perforaciones</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                              </div>

                                              <?php
                                              if ($examen[21]=="No") {
                                                echo '
                                                <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                    <label for="Si">Si</label>
                                                        <input type="radio"  maxlength="45"  name="perforaciones" id="perforaciones" value="Si" > &nbsp; &nbsp;
                                                        <div class="">
                                                        </div>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                    <label for="No">No</label>
                                                        <input type="radio"  maxlength="45"  name="perforaciones" id="perforaciones" value="No" checked> &nbsp; &nbsp;
                                                        <div class="">
                                                        </div>
                                                </div>
                                                ';
                                              }else {
                                                echo '
                                                <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                    <label for="Si">Si</label>
                                                        <input type="radio"  maxlength="45"  name="perforaciones" id="perforaciones" value="Si" checked> &nbsp; &nbsp;
                                                        <div class="">
                                                        </div>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                    <label for="No">No</label>
                                                        <input type="radio"  maxlength="45"  name="perforaciones" id="perforaciones" value="No" > &nbsp; &nbsp;
                                                        <div class="">
                                                        </div>
                                                </div>
                                                ';
                                              }

                                               ?>


                                          <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                  <label>Visibles</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                          </div>

                                          <?php
                                          if ($examen[22]=="No") {
                                            echo '
                                            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="perVisibles" id="perVisibles" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="perVisibles" id="perVisibles" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            ';
                                          }else {
                                            echo '
                                            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="perVisibles" id="perVisibles" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="perVisibles" id="perVisibles" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                            </div>
                                            ';
                                          }

                                           ?>

                                           <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                   <input type="text" placeholder="Especificar"  maxlength="45" name="lugarPerf" class="form-control has-feedback-left" id="lugarPerf" value="<?php echo $examen[23]; ?>" style='font-size: 12pt;
                                                   font-weight: bold; color: red; text-align: center;'> &nbsp; &nbsp;
                                                   <div class="">
                                                   </div>
                                           </div>
                                        </div>


                                       <div class="row tile_count">
                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                                                      id="alimentacion" placeholder="Calidad alimentación" value="<?php echo $examen[24]; ?>" name="alimentacion" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Calidad de alimentación
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>

                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                                                      id="vivienda" placeholder="Calidad vivienda" value="<?php echo $examen[25]; ?>" name="vivienda" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Calidad vivienda
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>

                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"   maxlength="30"  class="form-control has-feedback-left"
                                                      id="higiene" placeholder="Higiene Personal" value="<?php echo $examen[26]; ?>" name="higiene" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Higiene Personal
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>
                                        </div>
                                        <br>

                                      <div id="genecobstetricos" hidden>
                                        <h3>Antecedentes Ginecoobstetricos</h3> <br>
                                        <div class="row tile_count">
                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                                                      id="menarca" placeholder="Menarca" value="<?php echo $examen[27]; ?>" name="menarca" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Menarca
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="date"  maxlength="30" class="form-control has-feedback-left"
                                                      id="fum" placeholder="Fum" name="fum" value="<?php echo $examen[28]; ?>" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Fum
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="30" class="form-control has-feedback-left"
                                                      id="ritmo" placeholder="Ritmo" name="ritmo" value="<?php echo $examen[29]; ?>" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Ritmo
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                            </div>
                                        </div>
                                        <div class="row tile_count">
                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                                                      id="cantidad" placeholder="Cantidad" name="cantidad" value="<?php echo $examen[30]; ?>"style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Cantidad
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="30" class="form-control has-feedback-left"
                                                      id="dolor" placeholder="Dolor" name="dolor" value="<?php echo $examen[31]; ?>" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Dolor
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                                                      id="gestas" placeholder="Gestas" name="gestas" value="<?php echo $examen[32]; ?>" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Gestas
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                            </div>
                                          </div>

                                          <div class="row tile_count">
                                               <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                                                      id="partos" placeholder="Partos" name="partos" value="<?php echo $examen[33]; ?>" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Partos
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                                                      id="abortos" placeholder="Abortos" name="abortos"value="<?php echo $examen[34]; ?>" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Abortos
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text"  maxlength="30"  class="form-control has-feedback-left"
                                                      id="cesareas" placeholder="Cesareas" name="cesareas"value="<?php echo $examen[35]; ?>" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      Cesáreas
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                                </div>
                                            </div>


                                        <div class="row tile_count">
                                              <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                  <label>Embarazo</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                              </div>
                                              <?php
                                              if ($examen[37]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                    <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="embarazo" id="embarazo" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                    <label for="No">No</label>
                                                    <input type="radio"   maxlength="45" name="embarazo" id="embarazo" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                    <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="embarazo" id="embarazo" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                    <label for="No">No</label>
                                                    <input type="radio"   maxlength="45" name="embarazo" id="embarazo" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>


                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label>Lactancia</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                              </div>

                                              <?php
                                              if ($examen[38]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                    <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="lactancia" id="lactancia" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                    <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="lactancia" id="lactancia" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                echo '
                                                <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                                    <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="lactancia" id="lactancia" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                    <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="lactancia" id="lactancia" value="No"> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                          </div>
                                          <br>
                                      </div>

                                  <h3>Antecedentes personales Patológicos</h3><br>

                                      <div class="row tile_count">
                                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label>Alergias</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                            </div>
                                            <?php
                                            if ($examen[39]=="No") {
                                              echo '
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="alergias" id="alergias" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                              </div>
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="alergias" id="alergias" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                              </div>
                                              ';
                                            }else {
                                              echo '
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="alergias" id="alergias" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                              </div>
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="alergias" id="alergias" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                              </div>
                                              ';
                                            }
                                             ?>
                                            <div class="col-md-6 form-group has-feedback">
                                              <input type="text"  maxlength="45"  class="form-control has-feedback-left"
                                                  id="esp_alerg" placeholder="Especificar" value="<?php echo $examen[40]; ?>"name="esp_alerg" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;' >
                                                  Especificar
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                            </div>
                                      </div>

                                      <div class="row tile_count">
                                            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label>Hospitalizaciones</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                            </div>

                                            <?php
                                            if ($examen[41]=="No") {
                                              // code...
                                              echo '
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                    <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="hospital" id="hospital" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                              </div>
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"   maxlength="45" name="hospital" id="hospital" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                              </div>

                                              ';
                                            }else {
                                              // code...
                                              echo '
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                    <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="hospital" id="hospital" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                              </div>
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"   maxlength="45" name="hospital" id="hospital" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                              </div>
                                              ';
                                            }
                                             ?>
                                            <div class="col-md-6 form-group has-feedback">
                                              <input type="text"  maxlength="45"  class="form-control has-feedback-left"
                                                  id="esp_hospi" placeholder="Especificar" value="<?php echo $examen[42]; ?>"name="esp_hospi" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[43]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="cirugias" id="cirugias" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="No">No</label>
                                                    <input type="radio" maxlength="45"  name="cirugias" id="cirugias" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {

                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="cirugias" id="cirugias" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                <label for="No">No</label>
                                                    <input type="radio" maxlength="45"  name="cirugias" id="cirugias" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                              ?>
                                             <div class="col-md-6 form-group has-feedback">
                                              <input type="text"  maxlength="45" class="form-control has-feedback-left"
                                                  id="esp_cir" placeholder="Especificar" value="<?php echo $examen[44]; ?>" name="esp_cir" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;' >
                                                  Especificar
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                             </div>
                                        </div>

                                        <div class="row tile_count">
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label>Trasfusiones</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                              </div>
                                              <?php
                                              if ($examen[45]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="transfusiones" id="transfusiones" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="transfusiones" id="transfusiones" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="transfusiones" id="transfusiones" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="transfusiones" id="transfusiones" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                              ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45" class="form-control has-feedback-left"
                                                  id="esp_tran" placeholder="Especificar" value="<?php echo $examen[46]; ?>" name="esp_tran" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[47]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"   maxlength="45" name="fracturas" id="fracturas" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="fracturas" id="fracturas" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"   maxlength="45" name="fracturas" id="fracturas" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="fracturas" id="fracturas" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45"  class="form-control has-feedback-left"
                                                  id="esp_frac" placeholder="Especificar" value="<?php echo $examen[48]; ?>" name="esp_frac" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[49]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="limitaciones" id="limitaciones" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="limitaciones" id="limitaciones" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="limitaciones" id="limitaciones" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="limitaciones" id="limitaciones" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                              <input type="text"  maxlength="45"  class="form-control has-feedback-left"
                                                  id="esp_limi" placeholder="Especificar" value="<?php echo $examen[50]; ?>" name="esp_limi" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[51] == "No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="coagulopatias" id="coagulopatias" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="coagulopatias" id="coagulopatias" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="coagulopatias" id="coagulopatias" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="coagulopatias" id="coagulopatias" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45"  class="form-control has-feedback-left"
                                                  id="esp_coa" placeholder="Especificar" value="<?php echo $examen[52]; ?>" name="esp_coa" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;' >
                                                  Especificar
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                              </div>
                                      </div>

                                      <div class="row tile_count">
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label>Transtornos de la Cicatrización</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                              </div>
                                              <?php
                                              if ($examen[53]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="cicatrizacion" id="cicatrizacion" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="cicatrizacion" id="cicatrizacion" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                              else {
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="cicatrizacion" id="cicatrizacion" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="cicatrizacion" id="cicatrizacion" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                                  // code...
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45"  class="form-control has-feedback-left"
                                                  id="esp_cica" placeholder="Especificar" value="<?php echo $examen[54]; ?>" name="esp_cica" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[55]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="insulina" id="insulina" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="insulina" id="insulina" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="insulina" id="insulina" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="insulina" id="insulina" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text" maxlength="45"  class="form-control has-feedback-left"
                                                  id="esp_ins" placeholder="Especificar" name="esp_ins" value="<?php echo $examen[56]; ?>" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[57]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="diabetes" id="diabetes" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                               <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                 <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="diabetes" id="diabetes" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                               </div>
                                                ';
                                              } else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="diabetes" id="diabetes" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                               <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                 <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="diabetes" id="diabetes" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                               </div>
                                                ';
                                              }
                                              ?>
                                             <div class="col-md-6 form-group has-feedback">
                                               <input type="text"  maxlength="45"  class="form-control has-feedback-left"
                                                  id="esp_dia" placeholder="Especificar" value="<?php echo $examen[58]; ?>" name="esp_dia" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[59]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="hipertension" id="hipertension" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="hipertension" id="hipertension" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="hipertension" id="hipertension" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="hipertension" id="hipertension" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45"  class="form-control has-feedback-left"
                                                  id="esp_hip" placeholder="Especificar" value="<?php echo $examen[60]; ?>" name="esp_hip" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[61]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="asma" id="asma" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="asma" id="asma" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="asma" id="asma" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="asma" id="asma" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45" class="form-control has-feedback-left"
                                                  id="esp_asma" placeholder="Especificar" value="<?php echo $examen[62]; ?>" name="esp_asma" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[63]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="epilepsia" id="epilepsia" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="epilepsia" id="epilepsia" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45"  name="epilepsia" id="epilepsia" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="epilepsia" id="epilepsia" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>

                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45"  class="form-control has-feedback-left"
                                                  id="esp_epi" placeholder="Especificar" value="<?php echo $examen[64]; ?>" name="esp_epi" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[65]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="cancer" id="cancer" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="cancer" id="cancer" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="cancer" id="cancer" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="cancer" id="cancer" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45"  class="form-control has-feedback-left"
                                                  id="esp_cancer" placeholder="Especificar" value="<?php echo $examen[66]; ?>" name="esp_cancer" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;' >
                                                  Especificar
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                              </div>
                                      </div>

                                      <div class="row tile_count">
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label>Cardiopatias</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                              </div>
                                              <?php
                                              if ($examen[67]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="cardiopatias" id="cardiopatias" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"   maxlength="45" name="cardiopatias" id="cardiopatias" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="cardiopatias" id="cardiopatias" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"   maxlength="45" name="cardiopatias" id="cardiopatias" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45" class="form-control has-feedback-left"
                                                  id="esp_cardio" placeholder="Especificar" value="<?php echo $examen[68]; ?>" name="esp_cardio" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[69]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="autoinmunes" id="autoinmunes" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"    maxlength="45" name="autoinmunes" id="autoinmunes" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="autoinmunes" id="autoinmunes" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"    maxlength="45" name="autoinmunes" id="autoinmunes" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45" class="form-control has-feedback-left"
                                                  id="esp_auto" placeholder="Especificar" value="<?php echo $examen[70]; ?>" name="esp_auto" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[71]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="ets" id="ets" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="ets" id="ets" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="ets" id="ets" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45"  name="ets" id="ets" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45" class="form-control has-feedback-left"
                                                  id="esp_ets" placeholder="Especificar" value="<?php echo $examen[72]; ?>" name="esp_ets" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[73]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="hepatitis" id="hepatitis" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="hepatitis" id="hepatitis" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="hepatitis" id="hepatitis" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="hepatitis" id="hepatitis" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45" class="form-control has-feedback-left"
                                                  id="esp_hepa" placeholder="Especificar" value="<?php echo $examen[74]; ?>"name="esp_hepa" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[75]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="otrosE" id="otrosE" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="otrosE" id="otrosE" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="otrosE" id="otrosE" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="otrosE" id="otrosE" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45" class="form-control has-feedback-left"
                                                  id="esp_otros" placeholder="Especificar" value="<?php echo $examen[76]; ?>"name="esp_otros" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[77]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="medicamentos" id="medicamentos" value="Si" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="medicamentos" id="medicamentos" value="No" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="Si">Si</label>
                                                    <input type="radio"  maxlength="45" name="medicamentos" id="medicamentos" value="Si" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label for="No">No</label>
                                                    <input type="radio"  maxlength="45" name="medicamentos" id="medicamentos" value="No" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                <input type="text"  maxlength="45" class="form-control has-feedback-left"
                                                  id="esp_medi" placeholder="Especificar" value="<?php echo $examen[78]; ?>"name="esp_medi" style='font-size: 10pt;
                                                  font-weight: bold; color: red; text-align: center;' >
                                                  Especificar
                                                  <div class="help-info"></div>
                                                  <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                  </span>
                                              </div>
                                      </div>
                                  <br>

                                          <h3>
                                            Toxicomanias
                                          </h3> <br>

                                          <div class="row tile_count">
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label>Tabaquismo</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                              </div>
                                              <?php
                                              if ($examen[79]=="No") {
                                                // code...
                                                echo '
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
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                    <label for="Si">Si</label>
                                                        <input type="radio" name="taba" id="taba" value="Si" checked> &nbsp; &nbsp;
                                                        <div class="">
                                                        </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                    <label for="No">No</label>
                                                        <input type="radio" name="taba" id="taba" value="No" > &nbsp; &nbsp;
                                                        <div class="">
                                                        </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                          <div class="col-md-6 form-group has-feedback">
                                              <input type="text" class="form-control has-feedback-left"
                                                  id="cantidad1" placeholder="Cantidad y Frecuencia" value="<?php echo $examen[80]; ?>" name="cantidad1" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[81]=="No") {
                                                // code...
                                                echo '
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
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                        <input type="radio" name="alcohol" id="alcohol" value="Si" checked> &nbsp; &nbsp;
                                                        <div class="">
                                                        </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                        <label for="No">No</label>
                                                        <input type="radio" name="alcohol" id="alcohol" value="No" > &nbsp; &nbsp;
                                                        <div class="">
                                                        </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                  <input type="text" class="form-control has-feedback-left"
                                                    id="cantidad2" placeholder="Cantidad y Frecuencia" name="cantidad2" value="<?php echo $examen[82]; ?>" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[83]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="Si">Si</label>
                                                          <input type="radio" name="drogas" id="drogas" value="Si" > &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="No">No</label>
                                                          <input type="radio" name="drogas" id="drogas" value="No" checked> &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="Si">Si</label>
                                                          <input type="radio" name="drogas" id="drogas" value="Si" checked> &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="No">No</label>
                                                          <input type="radio" name="drogas" id="drogas" value="No" > &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                              <div class="col-md-6 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                      id="cantidad3" placeholder="Cantidad y Frecuencia" value="<?php echo $examen[84]; ?>" name="cantidad3" style='font-size: 10pt;
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
                                                <input type="text" class="form-control has-feedback-left"
                                                       id="fc" placeholder="FC" name="fc" value="<?php echo $examen[85]; ?>" style='font-size: 12pt;
                                                       font-weight: bold; color: red; text-align: center;' >
                                                       FC
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                            </div>

                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                      id="fr" placeholder="FR" name="fr" value="<?php echo $examen[86]; ?>" style='font-size: 12pt;
                                                      font-weight: bold; color: red; text-align: center;' >
                                                      FR
                                                      <div class="help-info"></div>
                                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                      </span>
                                          </div>

                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                     <input type="text" class="form-control has-feedback-left"
                                                     id="ta" placeholder="TA" name="ta"  value="<?php echo $examen[87]; ?>"style='font-size: 12pt;
                                                     font-weight: bold; color: red; text-align: center;' >
                                                     TA
                                                     <div class="help-info"></div>
                                                     <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                     </span>
                                          </div>
                                          </div>

                                          <div class="row tile_count">
                                              <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                      <input type="text" class="form-control has-feedback-left"
                                                          id="temperatura" placeholder="Temperatura" value="<?php echo $examen[88]; ?>" name="temperatura" style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' >
                                                          Temperatura
                                                          <div class="help-info"></div>
                                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                          </span>
                                              </div>


                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                      <input type="text" class="form-control has-feedback-left"
                                                          id="peso" placeholder="Peso" name="peso" value="<?php echo $examen[89]; ?>" style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' >
                                                          Peso
                                                          <div class="help-info"></div>
                                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                          </span>
                                          </div>

                                          <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                      <input type="text" class="form-control has-feedback-left"
                                                          id="estatura" placeholder="Estatura" name="estatura" value="<?php echo $examen[90]; ?>"style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' >
                                                          Estatura
                                                          <div class="help-info"></div>
                                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                          </span>
                                          </div>
                                          </div>

                                          <div class="row tile_count">
                                              <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                      <input type="text"  class="form-control has-feedback-left"
                                                          id="imc" placeholder="IMC" name="imc" value="<?php echo $examen[91]; ?>" style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' >
                                                          IMC
                                                          <div class="help-info"></div>
                                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                          </span>
                                              </div>
                                              <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                      <input type="text" class="form-control has-feedback-left"
                                                          id="nivel" placeholder="Nivel de peso" name="nivel" style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' required>
                                                          Nivel de peso
                                                          <div class="help-info"></div>
                                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                          </span>
                                              </div>
                                              <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                                      <input type="text" class="form-control has-feedback-left"
                                                          id="saturacion" placeholder="Saturación de oxigeno" name="saturacion" value="<?php echo $examen[118] ?>" style='font-size: 12pt;
                                                          font-weight: bold; color: red; text-align: center;' required>
                                                          Saturación de oxígeno  %
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
                                                <?php
                                                if ($examen[92]=="No") {
                                                  // code...
                                                  echo '
                                                  <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                           <label for="Si">Si</label>
                                                           <input type="radio" name="cabeza" id="cabeza" value="Si" > &nbsp; &nbsp;
                                                           <div class="">
                                                           </div>
                                                  </div>
                                                 <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                           <label for="No">No</label>
                                                           <input type="radio" name="cabeza" id="cabeza" value="No" checked> &nbsp; &nbsp;
                                                           <div class="">
                                                           </div>
                                                 </div>

                                                  ';
                                                }else {
                                                  // code...
                                                  echo '
                                                  <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                           <label for="Si">Si</label>
                                                           <input type="radio" name="cabeza" id="cabeza" value="Si" checked> &nbsp; &nbsp;
                                                           <div class="">
                                                           </div>
                                                  </div>
                                                 <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                           <label for="No">No</label>
                                                           <input type="radio" name="cabeza" id="cabeza" value="No" > &nbsp; &nbsp;
                                                           <div class="">
                                                           </div>
                                                 </div>

                                                  ';
                                                }
                                                 ?>
                                                  <div class="col-md-6 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            id="espec1" placeholder="Especificar" value="<?php echo $examen[93]; ?>" name="espec1" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[94]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="vision" id="vision" value="Si" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="vision" id="vision" value="No" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="vision" id="vision" value="Si" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="vision" id="vision" value="No" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                ';
                                              }
                                               ?>
                                                  <div class="col-md-6 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                              id="espec2" placeholder="Especificar" value="<?php echo $examen[95]; ?>" name="espec2" style='font-size: 10pt;
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
                                                  <?php
                                                  if ($examen[96]=="No") {
                                                    // code...
                                                    echo '
                                                    <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="Si">Si</label>
                                                          <input type="radio" name="disco" id="disco" value="Si" > &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="No">No</label>
                                                          <input type="radio" name="disco" id="disco" value="No" checked> &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                    </div>
                                                    ';
                                                  }else {
                                                    // code...
                                                    echo '
                                                    <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="Si">Si</label>
                                                          <input type="radio" name="disco" id="disco" value="Si" checked> &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="No">No</label>
                                                          <input type="radio" name="disco" id="disco" value="No" > &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                    </div>
                                                    ';
                                                  }
                                                  ?>
                                                  <div class="col-md-6 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left"
                                                      id="espec3" placeholder="Especificar" value="<?php echo $examen[97]; ?>" name="espec3" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[98]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="Si">Si</label>
                                                          <input type="radio" name="audi" id="audi" value="Si" > &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="No">No</label>
                                                          <input type="radio" name="audi" id="audi" value="No" checked> &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="Si">Si</label>
                                                          <input type="radio" name="audi" id="audi" value="Si" checked> &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                          <label for="No">No</label>
                                                          <input type="radio" name="audi" id="audi" value="No" > &nbsp; &nbsp;
                                                          <div class="">
                                                          </div>
                                                </div>
                                                ';
                                              }
                                              ?>
                                                    <div class="col-md-6 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            id="espec4" placeholder="Especificar" value="<?php echo $examen[99]; ?>" name="espec4" style='font-size: 10pt;
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
                                            <?php
                                            if ($examen[100]=="No") {
                                              // code...
                                              echo '
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="cuello" id="cuello" value="Si" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                              </div>
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="cuello" id="cuello" value="No" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                              </div>
                                              ';
                                            }else {
                                              // code...
                                              echo '
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="cuello" id="cuello" value="Si" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                              </div>
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="cuello" id="cuello" value="No" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                              </div>
                                              ';
                                            }
                                            ?>
                                                    <div class="col-md-6 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            id="espec5" placeholder="Especificar" value="<?php echo $examen[101]; ?>" name="espec5" style='font-size: 10pt;
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
                                            <?php
                                            if ($examen[102]=="No") {
                                              // code...
                                              echo '
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="torax" id="torax" value="Si" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                              </div>
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="torax" id="torax" value="No" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                              </div>
                                              ';
                                            }else {
                                              // code...
                                              echo '
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="torax" id="torax" value="Si" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                              </div>
                                              <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="torax" id="torax" value="No" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                              </div>
                                              ';
                                            }
                                            ?>
                                                    <div class="col-md-6 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            id="espec6" placeholder="Especificar" name="espec6" value="<?php echo $examen[103]; ?>" style='font-size: 10pt;
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
                                                <?php
                                                if ($examen[104]=="No") {
                                                  // code...
                                                  echo '
                                                  <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="abdo" id="abdo" value="Si" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="abdo" id="abdo" value="No" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                  </div>
                                                  ';
                                                }else {
                                                  // code...
                                                  echo '
                                                  <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="abdo" id="abdo" value="Si" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="abdo" id="abdo" value="No" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                  </div>
                                                  ';
                                                }
                                                ?>
                                                    <div class="col-md-6 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            id="espec7" placeholder="Especificar" name="espec7" value="<?php echo $examen[105]; ?>" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[106]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="extre" id="extre" value="Si" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="extre" id="extre" value="No" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="extre" id="extre" value="Si" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="extre" id="extre" value="No" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                ';
                                              }
                                              ?>
                                                  <div class="col-md-6 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            id="espec8" placeholder="Especificar" value="<?php echo $examen[107]; ?>" name="espec8" style='font-size: 10pt;
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
                                              <?php
                                              if ($examen[108]=="No") {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="colu" id="colu" value="Si" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="colu" id="colu" value="No" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                ';
                                              }else {
                                                // code...
                                                echo '
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="Si">Si</label>
                                                      <input type="radio" name="colu" id="colu" value="Si" checked> &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                      <label for="No">No</label>
                                                      <input type="radio" name="colu" id="colu" value="No" > &nbsp; &nbsp;
                                                      <div class="">
                                                      </div>
                                                </div>
                                                ';
                                              }
                                              ?>
                                                  <div class="col-md-6 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                            id="espec9" placeholder="Especificar" value="<?php echo $examen[109]; ?>" name="espec9" style='font-size: 10pt;
                                                            font-weight: bold; color: red; text-align: center;' >
                                                            Especificar
                                                            <div class="help-info"></div>
                                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                            </span>
                                                  </div>
                                        </div>


                                        <div class="row tile_count">
                                            <div class="col-md-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left"
                                                              id="obser" placeholder="Observaciones" value="<?php echo $examen[110]; ?>" name="obser" style='font-size: 10pt;
                                                              font-weight: bold; color: red; text-align: center;' >
                                                              Observaciones
                                                              <div class="help-info"></div>
                                                              <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                                              </span>
                                            </div>
                                            </div>
                                  </div>


                                 <div class="row tile_count">
                                      <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                  <label>Conclusión</label> &nbsp; &nbsp; &nbsp;
                                                  <div class="">
                                                  </div>
                                      </div>
                                      <?php
                                      if ($examen[111]=="No Apto") {
                                        echo '
                                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                    <label for="Apto">Apto</label>
                                                    <input type="radio" name="apto" id="apto" value="Apto" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                    <label for="No Apto">No Apto</label>
                                                    <input type="radio" name="apto" id="apto" value="No Apto" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                        </div>
                                        ';
                                      }else {
                                        echo '
                                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                    <label for="Apto">Apto</label>
                                                    <input type="radio" name="apto" id="apto" value="Apto" checked> &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                                    <label for="No Apto">No Apto</label>
                                                    <input type="radio" name="apto" id="apto" value="No Apto" > &nbsp; &nbsp;
                                                    <div class="">
                                                    </div>
                                        </div>
                                        ';
                                      }
                                      ?>
                                  </div>


                                  <br>


                                <div class="row tile_count">
                                  <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left"
                                                    id="medico" placeholder="Nombre del Medico Evaluador" value="<?php echo $examen[112]; ?>" name="medico" style='font-size: 12pt;
                                                    font-weight: bold; color: red; text-align: center;' >
                                                    Nombre del Medico Evaluador
                                                    <div class="help-info"></div>
                                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                                    </span>
                                  </div>
                                </div>
                                <div class="row tile_count">
                                  <div class="col-xs-10 tile_stats_count">
                                     <div class="col" style="text-align:center;">

                                         <button type="button" onclick="redireccionar()" class="btn btn-primary" style=" width:20%;">
                                           <i class="fa fa-mail-reply"></i>
                                           Regresar
                                         </button>


                                         <button type="submit" name="guardar" id="guardar" class="btn btn-primary" style="background-color:green; width:20%;">Guardar</button>
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
        </div>

        <!-- /page content -->
      </div>
    </div>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript" src="exa_medico.js"></script>
<script type="text/javascript">


</script>
