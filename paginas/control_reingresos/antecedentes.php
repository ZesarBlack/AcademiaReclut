<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  require 'control_reingreso_back.php';
  if (isset($_POST['id'])) {
    $id  =  $_POST['id'];
  }
  if (isset($_GET['id'])) {
     $id  =  $_GET['id'];
  }
  $datos = $reingreso->obtenerAntecedente($id);
  $datos_f = $reingreso->obtenerFolio($id);
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
                              ANTECEDENTES <?php if (isset($datos)){echo $datos[0];} ?>
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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"  name="button">Agregar</button>
                                <button type="button" class="btn btn-danger" onclick="redireccionar()" name="button">regresar</button>
                                <?php
                                ?>
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th>INSTANCIA</th>
                                      <th>NÚMERO DE ESCRITO DE SOLICITUD</th>
                                      <th>NÚMERO DE ESCRITO DE RESPUESTA</th>
                                      <th>RESPUESTA(ABIERTA)</th>
                                    </tr>

                                    <tr>
                                      <th>CONTRALORIA MUNICIPAL</th>
                                      <td><?php if (isset($datos)){echo $datos[1];} ?></td>
                                      <td><?php if (isset($datos)){echo $datos[2];} ?></td>
                                      <td><?php if (isset($datos)){echo $datos[3];} ?></td>
                                    </tr>
                                    <tr>
                                      <th>CONSEJO DE HONOR Y JUSTICIA</th>
                                      <td><?php if (isset($datos)){echo $datos[4];} ?></td>
                                      <td><?php if (isset($datos)){echo $datos[5];} ?></td>
                                      <td><?php if (isset($datos)){echo $datos[6];} ?></td>
                                    </tr>
                                    <tr>
                                      <th>COMISIÓN DEL SPCP</th>
                                      <td><?php if (isset($datos)){echo $datos[7];} ?></td>
                                      <td><?php if (isset($datos)){echo $datos[8];} ?></td>
                                      <td><?php if (isset($datos)){echo $datos[9];} ?></td>
                                    </tr>
                                    <tr>
                                      <th>UNIDAD DE ASUNTOS INTERNO</th>
                                      <td><?php if (isset($datos)){echo $datos[10];} ?></td>
                                      <td><?php if (isset($datos)){echo $datos[11];} ?></td>
                                      <td><?php if (isset($datos)){echo $datos[12];} ?></td>
                                    </tr>
                                    <tr>
                                      <th>DIRECCIÓN ADMINISTRATIVA</th>
                                      <td><?php if (isset($datos)){echo $datos[13];} ?></td>
                                      <td><?php if (isset($datos)){echo $datos[14];} ?></td>
                                      <td><?php if (isset($datos)){echo $datos[15];} ?></td>
                                    </tr>
                                  </thead>

                                </table>
                                <!-- content ends here////////////////////// -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <!-- Modal body -->
                  <div class="modal-header">
                    <h2 class="modal-title">ACTUALZAR INVESTIGACIÓN DE ANTECEDENTES</h2>
                  </div>
                  <div class="modal-body">
                      <form action="control_reingreso_back.php" method="POST">
                        <input type="text" name="folio" value="<?php echo $datos_f[0] ?>" readonly hidden>
                        <input type="text" name="id" value="<?php echo $id?>"  readonly hidden>
                        <div class="col">
                          <div class="row" style="margin-top:2em;">
                            <div class="row" style="margin-left:2em;">
                              <h2><strong>Contraloría Municipal</strong></h2>
                            </div>
                            <div class="roe">
                              <div class="col-sm-4"><input id="contraloria" name="contraloria" type="number" onkeyup="" value="<?php if (isset($datos)){echo $datos[1];}?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40" >
                                NÚMERO DE ESCRITO DE SOLICITUD
                              </div>
                              <div class="col-sm-4"><input id="contraloria_res" name="contraloria_res" type="number" onkeyup="" value="<?php if (isset($datos)){echo $datos[2];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40" >
                                NÚMERO DE ESCRITO DE RESPUESTA
                              </div>
                              <div class="col-sm-4"><input id="contraloria_resabi" name="contraloria_resabi" type="text" onkeyup="" value="<?php if (isset($datos)){echo $datos[3];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40" >
                               	RESPUESTA(ABIERTA)
                              </div>
                            </div>
                          </div>
                          <div class="row" style="margin-top:2em;">
                              <div class="row" style="margin-left:2em;">

                                <h2><strong>Consejo de Honor y Justicia</strong></h2>
                              </div>
                              <div class="col-sm-4"><input id="consejo" name="consejo" type="number" onkeyup="" value="<?php if (isset($datos)){echo $datos[4];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                NÚMERO DE ESCRITO DE SOLICITUD
                              </div>
                              <div class="col-sm-4"><input id="consejo" name="consejo_res" type="number" onkeyup="" value="<?php if (isset($datos)){echo $datos[5];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                NÚMERO DE ESCRITO DE RESPUESTA
                              </div>
                              <div class="col-sm-4"><input id="consejo" name="consejo_resabi" type="text" onkeyup="sanitizar(this)" value="<?php if (isset($datos)){echo $datos[6];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                RESPUESTA(ABIERTA)
                              </div>
                          </div>
                          <div class="row" style="margin-top:2em;">
                              <div class="row" style="margin-left:2em;">
                                <h2><strong>Comisión del SPCP</strong></h2>

                              </div>
                              <div class="col-sm-4"><input id="comision" name="comision" type="number" onkeyup="" value="<?php if (isset($datos)){echo $datos[7];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                NÚMERO DE ESCRITO DE SOLICITUD
                              </div>
                              <div class="col-sm-4"><input id="comision" name="comision_res" type="number" onkeyup="" value="<?php if (isset($datos)){echo $datos[8];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                NÚMERO DE ESCRITO DE RESPUESTA
                              </div>
                              <div class="col-sm-4"><input id="comision" name="comision_resabi" type="text" onkeyup="sanitizar(this)" value="<?php if (isset($datos)){echo $datos[9];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                RESPUESTA(ABIERTA)
                              </div>
                          </div>
                          <div class="row" style="margin-top:2em;">
                              <div class="row" style="margin-left:2em;">
                                <h2><strong>Unidad de Asuntos Internos</strong></h2>

                              </div>
                              <div class="col-sm-4"><input id="asuntos" name="asuntos" type="number" onkeyup="" value="<?php if (isset($datos)){echo $datos[10];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                NÚMERO DE ESCRITO DE SOLICITUD
                              </div>
                              <div class="col-sm-4"><input id="asuntos" name="asuntos_res" type="number" onkeyup="" value="<?php if (isset($datos)){echo $datos[11];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                NÚMERO DE ESCRITO DE RESPUESTA
                              </div>
                              <div class="col-sm-4"><input id="asuntos" name="asuntos_resabi" type="text" onkeyup="sanitizar(this)" value="<?php if (isset($datos)){echo $datos[12];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                RESPUESTA(ABIERTA)
                              </div>
                          </div>
                          <div class="row" style="margin-top:2em;">
                              <div class="row" style="margin-left:2em;">
                                <h2><strong>Dirección administrativa</strong></h2>

                              </div>
                              <div class="col-sm-4"><input id="direccion" name="direccion" type="number" onkeyup="" value="<?php if (isset($datos)){echo $datos[13];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                NÚMERO DE ESCRITO DE SOLICITUD
                              </div>
                              <div class="col-sm-4"><input id="direccion" name="direccion_res" type="number" onkeyup="" value="<?php if (isset($datos)){echo $datos[14];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                NÚMERO DE ESCRITO DE RESPUESTA
                              </div>
                              <div class="col-sm-4"><input id="direccion"  name="direccion_resabi" type="text" onkeyup="sanitizar(this)" value="<?php if (isset($datos)){echo $datos[15];} ?>" style='font-size: 12pt;
                                font-weight: bold; color: red; text-align: center;' maxlength="40">
                                RESPUESTA(ABIERTA)
                              </div>
                          </div>
                        </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Actualizar</button>
                  </div>
                </form>
              </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript" src="reingresos.js"></script>
