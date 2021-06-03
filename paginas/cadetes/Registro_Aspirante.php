<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
       //echo getcwd();
       //include '../../control/control_permisos_rutas.php';
       //$ruta->verificarRutas(getcwd(),$_SESSION['rol']);
?>
  <head>
		<link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
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
                                FICHA DE ENTREGA DE DOCUMENTOS PARA ASPIRANTES
                            </h3>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                          <button type="button" class="btn btn-primary" onclick="recargar()" name="button">
                            <i class="fa fa-user" ></i>
                              Nuevo registro
                          </button>
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->
                                <form name="form1" method="POST" action="registroAspirantes_back.php" >
                                  <div class="row tile_count">
                                  <div class="col-md-4 col-md-offset-0 form-group has-feedback">
                                         <input type="date" class="form-control has-feedback-right"
                                               id="llenado" placeholder="Fecha Llenado" name="llenado" style='font-size: 12pt;
                                                font-weight: bold; color: red; text-align: center;' value="<?php echo (new \DateTime())->format('Y-m-d');?>" required>
                                              Fecha recepción de documentos
                                          <div class="help-info"></div>
                                          <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                          </span>
                                  </div>
                                  </div>


                                <div class="row tile_count">
                                <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback">
                                  <label>CONVOCATORIA:</label>
                                  <div class="">
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                  <select class="form-control has-feedback-left" name="tipoIngreso" id="naciona" >
                                    <option value="Nuevo Ingreso">Nuevo Ingreso</option>
                                    <option value="Reingreso">Reingreso</option>
                                  </select>
                                </div>
                                <!--
                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Nacimiento">Nuevo Ingreso</label>
                                  <input type="radio" name="tipoIngreso" id="naciona" value="Nuevo Ingreso" checked required>
                                  <div class="">
                                  </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Naturalizado">Reingreso</label>
                                  <input type="radio" name="tipoIngreso" id="naciona" value="Reingreso" >
                                  <div class="">
                                  </div>
                                </div>
                              -->
                              <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                              </div>
                                      <div class="col-md-2  form-group has-feedback">
                                          <input type="text" class="form-control has-feedback-left"
                                            id="folio" placeholder="00 - A000" value="" name="folio" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' maxlength="12" required readonly>
                                            Folio
                                          <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>
                                 </div>
                                </div>
                              </br>


                                <h3 class="card-title">Datos Personales</h3>

                                <div class="row tile_count">




                                  <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="paterno" placeholder="Apellido Paterno" name="paterno" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' onkeyup="mayus(this);" required>
                                            Apellido Paterno
                                            <div class="help-info"></div>
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>

                                  <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="materno" placeholder="Apellido Materno" name="materno" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' onkeyup="mayus(this);" required>
                                            Apellido Materno
                                            <div class="help-info"></div>
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>

                                   <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="nombre" placeholder="Nombre(s)" name="nombre" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' onkeyup="mayus(this);" required>
                                            Nombre(s)
                                            <div class="help-info"></div>
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                                </div>


                                <div class="row tile_count">
                                     <div class="col-md-4 form-group has-feedback">
                                      <input type="date" class="form-control has-feedback-left"
                                            id="fechan" placeholder="Fecha de Nacimiento" name="fechan" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' required>
                                            Fecha de Nacimiento
                                            <div class="help-info"></div>
                                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                            </span>
                                    </div>
                                    <div class="col-md-4 form-group has-feedback">
                                     <input type="text" class="form-control has-feedback-left"
                                           id="edad" placeholder="Edad" name="edad" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;' required>
                                           Fecha de Nacimiento
                                           <div class="help-info"></div>
                                           <span class="fa fa-calendar form-control-feedback left" aria-hidden="true">
                                           </span>
                                   </div>
                                   <!--
                                    <div class="col-sm-4 form-group has-feedback">
                                       <input type="number" class="form-control has-feedback-left"
                                             id="edad" placeholder="Edad" name="edad" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' max="99" required disabled>
                                              Edad
                                              <div class="help-info"></div>
                                              <span class="fa fa-male form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>-->
                                       <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label>Genero:</label>
                                  <div class="">
                                  </div>
                                </div>
                                <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Nacimiento">M</label>
                                  <input type="radio" name="genero" id="naciona" value="MASCULINO" required>
                                  <div class="">
                                  </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                  <label for="Naturalizado">F</label>
                                  <input type="radio" name="genero" id="naciona" value="FEMENINO" >
                                  <div class="">
                                  </div>
                                </div>
                               </div>

                                <div class="row tile_count">
                                     <div class="col-md-4 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="curp" placeholder="CURP" name="curp" maxlength="18" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' onkeyup="mayus(this);" required>
                                            CURP
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>
                                      <div class="col-sm-8 form-group has-feedback">
                                       <input type="email" class="form-control has-feedback-left"
                                             id="correo" placeholder="Correo Electrónico" name="correo" maxlength="45" style='font-size: 12pt;
                                              font-weight: bold; color: red; text-align: center;' onkeyup="sanitizarCorreo(this)" required>
                                              Correo Electrónico
                                              <div class="help-info"></div>
                                              <span class="fa fa-male form-control-feedback left" aria-hidden="true">
                                              </span>
                                      </div>
                                 </div>

                                 <div class="row tile_count">
                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                          id="celular" placeholder="Celular" name="celular" maxlength="10" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;' >
                                           Tel. celular
                                           <div class="help-info"></div>
                                           <span class="fa fa-phone form-control-feedback left" aria-hidden="true">
                                           </span>
                                     </div>
                                     <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                          id="telef-1" placeholder="Teléfono 1" name="telef-1" maxlength="10" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;' >
                                           Teléfono 1
                                           <div class="help-info"></div>
                                           <span class="fa fa-phone form-control-feedback left" aria-hidden="true">
                                           </span>
                                     </div>
                                     <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                          id="telef-2" placeholder="Teléfono 2" name="telef-2" maxlength="10" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;' >
                                           Teléfono 2
                                           <div class="help-info"></div>
                                           <span class="fa fa-phone form-control-feedback left" aria-hidden="true">
                                           </span>
                                     </div>
                                 </div>
                                 <div class="row tile_count">
                                    <div class="col-md-4 form-group has-feedback">

                                          <select class="form-control has-feedback-left" name="estadoCivil" id="" style='font-size: 12pt;
                                               font-weight: bold; color: red; text-align: center;'  required>
                                            <option value="">Seleccione una opción</option>
                                            <option value="SOLTERO">SOLTERO</option>
                                            <option value="CASADO">CASADO</option>
                                            <option value="VIUDO">VIUDO</option>
                                            <option value="DIVORCIADO">DIVORCIADO</option>
                                            <option value="UNION LIBRE">UNION LIBRE</option>
                                          </select>
                                          Estado civil

                                         <div class="help-info"></div>
                                         <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                         </span>
                                    </div>
                                 </div>
                                 <div class="row">
                                   <div class="col-md-4 form-group has-feedback">

                                     <input type="text" class=" has-feedback-left"
                                          id="norfc" placeholder="RFC" value="" name="norfc" style='font-size: 12pt;
                                          font-weight: bold; color: red; text-align: center; width: 100%;' onkeyup="mayus(this);"  maxlength="13" >

                                   </div>
                                   <div class="col-md-4 form-group has-feedback">
                                     <input type="text" class=" has-feedback-left"
                                          id="nolic" placeholder="NÚMERO DE LICENCIA" value="" name="nolic" style='font-size: 12pt;
                                          font-weight: bold; color: red; text-align: center; width: 100%;' onkeyup="mayus(this);"  maxlength="9" >
                                   </div>
                                   <div class="col-md-4 form-group has-feedback">
                                     <input type="text" class=" has-feedback-left"
                                          id="nocartilla" placeholder="NÚMERO DE CARTILLA MILITAR" value="" name="nocartilla" style='font-size: 12pt;
                                          font-weight: bold; color: red; text-align: center; width: 100%;' onkeyup="mayus(this);"  maxlength="20" >
                                   </div>
                                 </div>
                                 <div class="row tile_count">
                                   <h3 class="card-title">Datos académicos y Experiencia</h3>
                                   <br>
                                   <div class="col-md-4 form-group has-feedback">
                                          <select class="form-control has-feedback-left" name="grado_es" id="grado_es" style='font-size: 12pt;
                                               font-weight: bold; color: red; text-align: center;' maxlength="45" required>
                                            <option value="">Seleccione una opción</option>
                                            <option value="BACHILLERATO">BACHILLERATO</option>
                                            <option value="TÉCNICO SUPERIOR">TÉCNICO SUPERIOR</option>
                                            <option value="LICENCIATURA">LICENCIATURA</option>
                                            <option value="MAESTRIA">MAESTRIA</option>
                                            <option value="DOCTORADO">DOCTORADO</option>
                                          </select>
                                          Escolaridad
                                         <div class="help-info"></div>
                                         <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                         </span>
                                    </div>
                                    <div class="col-md-4 form-group has-feedback">
                                      <input type="text" class=" has-feedback-left"
                                           id="carrera_g" placeholder="CARRERA GENÉRICA" value="" name="carrera_g" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center; width: 100%;' onkeyup="mayus(this);"  maxlength="20" >
                                           Carrera genérica
                                    </div>
                                    <div class="col-md-4 form-group has-feedback">
                                       <select class="form-control has-feedback-left" name="estatus_es" id="estatus_es" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;' maxlength="45" required>
                                         <option value="">Seleccione una opción</option>
                                         <option id="op1" value="CONCLUIDO" hidden>CONCLUIDO</option>
                                         <option id="op2" value="TRUNCO" hidden>TRUNCO</option>
                                         <option id="op3" value="PASANTE" hidden>PASANTE</option>
                                         <option id="op4" value="TITULADO" hidden>TITULADO</option>
                                       </select>
                                           Estatus
                                          <div class="help-info"></div>
                                          <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                          </span>
                                   </div>
                                 </div>
                                 <div class="row tile_count">
                                     <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>¿Experiencia en seguridad pública, privada o militar?</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Sí</label>
                                       <input type="radio" name="exPoli" id="RadioSi" value="SI" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="exPoli" id="RadioNo" value="NO" >
                                        <div class="">
                                        </div>
                                     </div>
                                     <div class="col-md-4 form-group has-feedback">

                                          <select class="form-control has-feedback-left" name="dependencia_anterior" id="dependencia_anterior" style='font-size: 12pt;
                                               font-weight: bold; color: red; text-align: center;' >
                                            <option value="">Seleccione una opción</option>
                                            <option value="POLICIA MUNICIPAL">POLICIA MUNICIPAL</option>
                                            <option value="POLICIA ESTATAL">POLICIA ESTATAL</option>
                                            <option value="POLICIA AUXILIAR">POLICIA AUXILIAR</option>
                                            <option value="POLICIA FEDERAL">POLICIA FEDERAL</option>
                                            <option value="GUARDIA NACIONAL">GUARDIA NACIONAL</option>
                                            <option value="MILITAR">MILITAR</option>
                                            <option value="SEGURIDAD PRIVADA">SEGURIDAD PRIVADA</option>
                                          </select>
                                          Dependencia a la que pertenecía

                                         <div class="help-info"></div>
                                         <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                         </span>
                                    </div>
                                 </div>
                                 <div class="row">
                                   <div class="col-md-6 form-group has-feedback">

                                     <input type="text" class=" has-feedback-left"
                                          id="entidad_act" placeholder="Entidad" value="" name="entidad_act" style='font-size: 12pt;
                                          font-weight: bold; color: red; text-align: center; width: 100%;' onkeyup="mayus(this);"  maxlength="60" hidden>

                                   </div>
                                   <div class="col-md-6 form-group has-feedback">
                                     <input type="text" class=" has-feedback-left"
                                          id="municipio_act" placeholder="Municipio" value="" name="municipio_act" style='font-size: 12pt;
                                          font-weight: bold; color: red; text-align: center; width: 100%;' onkeyup="mayus(this);"  maxlength="60" hidden>
                                   </div>
                                 </div>
                                <div class="row tile_count">
                                  <div class="col-md-4 form-group has-feedback">

                                       <select class="form-control has-feedback-left" name="medioInfo" id="" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center;'  required>
                                         <option value="">Seleccione una opción</option>
                                         <option value="PÁGINA DEL AYUNTAMIENTO">PÁGINA DEL AYUNTAMIENTO</option>
                                         <option value="FACEBOOK">FACEBOOK</option>
                                         <option value="FAMILIAR O AMIGO">FAMILIAR O AMIGO</option>
                                         <option value="TV O RADIO">TV O RADIO</option>
                                         <option value="ACADEMIA">ACADEMIA</option>
                                         <option value="OTRAS REDES SOCIALES">OTRAS REDES SOCIALES</option>
                                       </select>
                                       Medio por el cual se enteró del empleo

                                      <div class="help-info"></div>
                                      <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                      </span>
                                 </div>
                              </div>

                              <h3 class="card-title">Domicilio Actual</h3>

                             <div class="row tile_count">
                                 <div class="col-md-12 col-sm-4 col-xs-4 form-group has-feedback">
                                   <input type="text" class="form-control has-feedback-left"
                                        id="calle" placeholder="Calle" name="calle" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center; ' onkeyup="mayus(this);"  maxlength="45" required>
                                        Calle
                                        <div class="help-info"></div>
                                        <span class="fa fa-street-view form-control-feedback left" aria-hidden="true">
                                        </span>
                                 </div>
                             </div>

                             <div class="row tile_count">
                                  <div class="col-md-4 col-sm-4 form-group has-feedback">
                                   <input type="text" class="form-control has-feedback-left"
                                         id="ext" placeholder="N° exterior" name="ext" style='font-size: 12pt;
                                         font-weight: bold; color: red; text-align: center; ' onkeyup="mayus(this);" maxlength="15" required>
                                         N° exterior
                                         <div class="help-info"></div>
                                         <span class="fa fa-sort-numeric-desc form-control-feedback left" aria-hidden="true">
                                         </span>
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                          id="int" placeholder="N° interior" name="int" maxlength="15" style='font-size:  12pt;
                                           font-weight: bold; color: red; text-align: center;'  onkeyup="mayus(this);" >
                                           N° interior
                                           <div class="help-info"></div>
                                           <span class="fa fa-sort-numeric-asc form-control-feedback left" aria-hidden="true">
                                           </span>
                                  </div>
                                  <div class="col-md-4 col-sm-4 form-group has-feedback">
                                   <input type="number" class="form-control has-feedback-left"
                                         id="codpostal" placeholder="Código Postal" name="codpostal" maxlength="5" style='font-size: 12pt;
                                         font-weight: bold; color: red; text-align: center;' required>
                                         Código Postal
                                         <div class="help-info"></div>
                                         <span class="fa fa-home form-control-feedback left" aria-hidden="true">
                                         </span>
                                 </div>
                             </div>
                             <div class="row tile_count">
                                  <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                   <input type="text" class="form-control has-feedback-left"
                                         id="colonia" placeholder="Colonia" name="colonia" maxlength="45" style='font-size: 12pt;
                                         font-weight: bold; color: red; text-align: center; '  onkeyup="mayus(this);" required>
                                         Colonia
                                         <div class="help-info"></div>
                                         <span class="fa fa-street-view form-control-feedback left" aria-hidden="true">
                                         </span>
                                 </div>

                                 <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                          id="municipio" placeholder="Municipio" name="municipio" maxlength="45" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;'  onkeyup="mayus(this);" required>
                                           Municipio
                                           <div class="help-info"></div>
                                           <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                           </span>
                                   </div>

                                  <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left"
                                          id="estado" placeholder="Estado" name="estado" maxlength="45" style='font-size: 12pt;
                                           font-weight: bold; color: red; text-align: center;'  onkeyup="mayus(this);" required>
                                           Estado
                                           <div class="help-info"></div>
                                           <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true">
                                           </span>
                                   </div>
                              </div>

                              <div id="reingreso" hidden>
                                <h3 class="card-title">Formación reingreso</h3>
                                <div class="row" >
                                  <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="number" placeholder="HORAS DE FORMACIÓN" style='font-size: 12pt; font-weight: bold; color: red; text-align: center;'
                                     class="form-control has-feedback-left" name="f_inicial" value="">
                                     Horas de formación
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="date"  class="form-control has-feedback-left" style='font-size: 12pt;
                                     font-weight: bold; color: red; text-align: center;' name="f_formacion" value="">
                                     Fecha de Formación Inicial
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="text" placeholder="TIPO DE BAJA" style='font-size: 12pt;
                                     font-weight: bold; color: red; text-align: center;' class="form-control has-feedback-left" name="tipo_baja" value="">
                                     Tipo de baja
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                    <input type="date" class="form-control has-feedback-left" style='font-size: 12pt;
                                     font-weight: bold; color: red; text-align: center;' name="f_baja" value="">
                                     Fecha baja
                                  </div>
                                </div>
                              </div>

                              <h3 class="card-title">Entrega de Documentos </h3>
                                 <div class="row tile_count">
                                     <div class="col-md-5  col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>1.Solicitud de empleo con fotografía, escrita de puño y letra.</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="solicitud_completa" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="solicitud_completa" id="" value="No" >
                                        <div class="">
                                        </div>
                                      </div>

                                      <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="solicitud_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; '>
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>
                                 </div>

                                  <div class="row tile_count">
                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>2.Copia de acta de nacimiento de reciente expedición.</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="acta_nac" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="acta_nac" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>
                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="acta_nac_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>
                                    </div>

                                     <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>3.Clave única de registro de población(CURP).</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="doc_curp" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="doc_curp" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="doc_curp_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>4.Identificación oficial con fotografía vigente (INE). </label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="doc_id" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="doc_id" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="doc_id_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>5.Licencia de manejo vigente(chófer o automovilista).</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="doc_licencia" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="doc_licencia" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="doc_licencia_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; '>
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>6.Constancia vigente de No Antecedentes Penales.</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="const_ante" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="const_ante" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="const_ante_observacion"  maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>7.Comprobante de estudios (mínimo bachiller, preparatoria).</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="comp_estudios" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="comp_estudios" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="comp_estudios_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>8.Cartilla liberada del SMN.</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="cartilla" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="cartilla" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="cartilla_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>9.Constancia de NO estar suspendido o inhabilitado.</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="const_no_sus" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="const_no_sus" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="const_no_sus_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>10.Baja voluntaria de las Fuerzas Armadas, Seguridad Publica o Privada.</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="baja_voluntaria" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="baja_voluntaria" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="baja_voluntaria_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>11.Comprobante de domicilio vigente.</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="comp_domicilio" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="comp_domicilio" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="comp_domicilio_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>12.Tres referencias personales(no familiares).</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="referencias" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="referencias" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="referencias_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>13.Curriculum vitae con fotografía vigente.</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="curriculum" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="curriculum" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="curriculum_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>14.Registro Federal de Contribuyentes (RFC).</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="rfc" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="rfc" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" name="rfc_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>

                                  </div>

                                  <div class="row tile_count">

                                     <div class="col-md-5 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label>15.Numero de Seguridad Social (IMSS).</label>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                       <label for="Nacimiento">Si</label>
                                       <input type="radio" name="imss" id="" value="Si" checked required>
                                       <div class="">
                                       </div>
                                     </div>
                                     <div class="col-md-1 col-sm-2 col-xs-2 form-group has-feedback">
                                        <label for="Naturalizado">No</label>
                                        <input type="radio" name="imss" id="" value="No" >
                                        <div class="">
                                        </div>
                                     </div>

                                     <div class="col-md-5 form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left"
                                            id="" placeholder="Observaciones" value="" onkeyup="sanitizar(this)" name="imss_observacion" maxlength="45" style='font-size: 12pt;
                                            font-weight: bold; color: red; text-align: center; ' >
                                            <div class="help-info"></div>
                                            <span class="fa fa-align-justify form-control-feedback left" aria-hidden="true">
                                            </span>
                                      </div>
                                  </div>

                                  <div class="row tile_count" style="background-color: #A5A5A5;">
                                    <div id="dropzone" class="dropzone" >
                                      <div class="dz-message needsclick">
                                      Arrastre su archivo aquí o de click para seleccionarlo.
                                      </div>
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
        </div>
        <!-- /page content -->
      </div>
    </div>
    <?php require '../../requires/script_pag.php';   ?>
  </body>
</html>
<script type="text/javascript" src="js/dropzone.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="cadetes.js"></script>
