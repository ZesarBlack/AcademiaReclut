<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
  include '../../requires/conexion.php';

$nombre = $_SESSION['usuario'];
$apellidop = $_SESSION['apellidoP'];
$apellidom =  $_SESSION['apellidoM'];
  ?>
  <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css" MEDIA=screen>
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
                            Examen físico
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row" >
                    <div class="col-md-12">
                        <div class="x_panel tile"  style="border: 2px solid #CABFFF;">
                            <div class="x_content ">
                                <!-- content starts here ////////////////////-->

                                  <form name="form2" method="POST" action="evaluacion_back.php">
                                    <div class="row">
                                      <div class="col-md-2">
                                        <select class="custom-select" id="tipo" name="tipo" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center; text-transform:uppercase;'>
                                          <option value="">Método de búsqueda</option>
                                          <option value="id">Folio</option>
                                          <option value="nombre">Nombre y apellido</option>
                                        </select>
                                      </div>
                                      <div class="col-md-2">
                                        <input class=" has-feedback-left" type="text" onkeyup="sanitizar(this)" id="busqueda" name="" value="" placeholder="Busqueda" style='font-size: 12pt;
                                        font-weight: bold; color: red; text-align: center; text-transform:uppercase;'>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <br>
                                      <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <td>ID</td>
                                            <td>FOLIO DE REGISTRO</td>
                                            <td>NOMBRE(S)</td>
                                            <td>APELLIDO PATERNO</td>
                                            <td>APELLIDO MATERNO</td>
                                            <td>EDAD</td>
                                            <td>GÉNERO</td>
                                            <td>CURP</td>
                                          </tr>
                                        </thead>
                                        <tbody id="tabla">
                                        </tbody>
                                      </table>

                                      <br>
                                      <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th colspan="2">RESISTENCIA</th>
                                            <th colspan="2">ABDOMINAL</th>
                                            <th colspan="2">LAGARTIJA</th>
                                            <th colspan="2">SENTADILLA</th>
                                            <th colspan="2">FLEXIBILIDAD</th>
                                            <th colspan="2">VELOCIDAD</th>
                                            <th rowspan="3">MANEJA</th>
                                            <th rowspan="3">TOTAL</th>
                                            <th rowspan="3">PROMEDIO</th>
                                            <th rowspan="3">RESULTADO</th>
                                            <th rowspan="3">NOMBRE DEL INTRUCTOR</th>
                                          </tr>
                                          <tr>
                                            <td colspan="2">12 MINUTOS</td>
                                            <td colspan="2">1 MINUTO</td>
                                            <td colspan="2">1 MINUTO</td>
                                            <td colspan="2">1 MINUTO</td>
                                            <td colspan="2">OTRO (+)(-)</td>
                                            <td colspan="2">50 METROS</td>
                                          </tr>
                                          <tr>
                                            <td>VUELTAS</td>
                                            <td>CALF</td>
                                            <td>CANT</td>
                                            <td>CALF</td>
                                            <td>CANT</td>
                                            <td>CALF</td>
                                            <td>CANT</td>
                                            <td>CALF</td>
                                            <td>CANT</td>
                                            <td>CALF</td>
                                            <td>TIPO</td>
                                            <td>CALF</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="resmts" name="resmts" size=1 required></td>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="rescal" name="rescal" size=1 required></td>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="abcant" name="abcant" size=1 required></td>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="abcal" name="abcal" size=1 required></td>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="lagcant" name="lagcant" size=1 required></td>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="lagcal" name="lagcal" size=1 required></td>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="sentcant" name="sentcant" size=1 required></td>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="sentcal" name="sentcal" size=1 required></td>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="flexcm" name="flexcm" size=1 required></td>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="flexcal" name="flexcal" size=1 required></td>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="velcant" name="velcant" size=1 required></td>
                                            <td class="tg-0lax"><input type="text" onkeyup="sanitizarNumero(this)" value="" id="velcal" name="velcal" size=1 required></td>
                                            <td class="tg-0lax">
                                              <select class="form-control has-feedback-left"  id="manejo" name="manejo" required>
                                              <option value="SÍ">si</option>
                                              <option value="NO" selected>no</option>
                                              </select>
                                            </td>
                                            <td class="tg-0lax"><input type="text" value="" onkeyup="sanitizarNumero(this)" id="total" name="total" size=1 required readonly></td>
                                            <td class="tg-0lax"><input type="text" value="" onkeyup="sanitizarNumero(this)" id="promedio" name="promedio" size=1 required readonly></td>
                                            <td class="tg-0lax">
                                              <select class="form-control has-feedback-left" id="resultado" name="resultado" required>
                                              <option value="Apto">Apto</option>
                                              <option value="No Apto" selected>No Apto</option>
                                              </select>
                                            </td>
                                            <td class="tg-0lax"><input type="text" id="nomeva" name="nomeva" value= <?php echo '"'.$nombre.' '.$apellidop.' '.$apellidom.'"'; ?> ></td>
                                          </tr>
                                        </tbody>
                                      </table>

                                    Observaciones
                                    <div class="row">
                                      <div class="col col-md-6">
                                        <textarea name="observacion" onkeyup="sanitizar(this)" rows="8" cols="80" spellcheck="false" data-gramm="false" style="margin: 0px; width: 100%;"></textarea>
                                      </div>
                                    </div>
                                <br><br>

                                <div style="margin-top: 2rem;">
                                  <?php
                                    echo "<b>Fecha:   " . date("d/m/Y") . "</b><br>";
                                   ?>
                                  <input type="submit" style="margin-top:2rem;" class="btn btn-primary" name="guardar" id="guardar" value="Guardar Respuestas" required>
                                </div>
                                </form>
                                <!-- content ends here////////////////////// -->
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
<script type="text/javascript" src="exa_evaluacion.js"></script>
