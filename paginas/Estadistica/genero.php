<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
    include '../../requires/conexion.php';
     ?>

     <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 320px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}


input[type="number"] {
	min-width: 50px;
}
		</style>
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
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../../images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="../../index.php">Principal</a></li>
                  <li><a><i class="fa fa-home"></i> Aministraci??n <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="paginas/bitacora/bitacora.php">Bitacora</a></li>
                      <li><a href="paginas/catalogos/catalogo.php">Catalogo</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Formaci??n Continua <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../formacionContinua/cursos.php">Buscar Cursos</a></li>
                      <li><a href="../formacionContinua/editarCurso.php">Editar Cursos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i>Desarrollo formacion inicial <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../C??dulaA/aspirante.php">Cedula</a></li>
                      <li><a href="">Perfil M??dico</a></li>
                      <li><a href="../Sol_Control_Conf/solconfi.php">Contrl de confianza</a></li>
                      <li><a href="../Calf_cadetes/califcadetes.php">Calificaciones</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i>Servicio profesional de carrera<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../altapersonal/altapersonal.php">Alta del Personal</a></li>
                      <li><a href="../movimientopersonal/Movimientopersonal.php">Movimiento del Personal </a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>

            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <?php require '../../requires/top_nav.php'; ?>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <?php require '../../requires/titulo.php'; ?>
          <!-- /top tiles -->

            <div class="row" style="background-color:#ffffff">
            <!--todo nuestro contenido----------------------------------------->

            <div class="">
              <div class="col-xs-12 tile_stats_count">
                <div class="col-xs-12 tile_stats_count">
                  <div class="col-xs-12 tile_stats_count">
                    <div class="col-xs-12 tile_stats_count">
                      <div class="col-xs-12 tile_stats_count">
                        <div class="col-xs-12 tile_stats_count">
                          <div class="col-xs-12 tile_stats_count">
                            <div class="col-xs-12 tile_stats_count">
                              <div class="col-xs-12 tile_stats_count">
                                <div class="col-xs-12 tile_stats_count">
                                  <div class="col-xs-12 tile_stats_count">
                                    <div class="col-xs-12 tile_stats_count">
                                      <div class="col-xs-12 tile_stats_count">
                                        <div class="col-xs-12 tile_stats_count">
                                          <div class="col-xs-12 tile_stats_count">
                                            <div class="col-xs-12 tile_stats_count">
                                              <div class="col-xs-12 tile_stats_count">
                                                <div class="col-xs-12 tile_stats_count">
                                                  <div class="col-xs-12 tile_stats_count">


        <?php
        $resTotal= "SELECT * FROM persona";
        $resultado= mysqli_query($conn, $resTotal);
        $reg= $resultado->num_rows;

        $mas= "SELECT * FROM persona where genero='M'";
        $resultado1= mysqli_query($conn, $mas);
        $regM= $resultado1->num_rows;
        $totalM= $regM*100/$reg;

        $fem= "SELECT * FROM persona where genero='F'";
        $resultado2= mysqli_query($conn, $fem);
        $regF= $resultado2->num_rows;
        $totalF= $regF*100/$reg;

        while($filaM=mysqli_fetch_array($resultado1, MYSQLI_BOTH))
        {
          $m= "{name: '".$filaM['genero']."', y:".$totalM."},";
        }

        while($filaF=mysqli_fetch_array($resultado2, MYSQLI_BOTH))
        {
          $f= "{name: '".$filaF['genero']."', y:".$totalF."},";
        }

        ?>


            <script src="../../code/highcharts.js"></script>
            <script src="../../code/modules/exporting.js"></script>
            <script src="../../code/modules/export-data.js"></script>
            <script src="../../code/modules/accessibility.js"></script>

            <h3 class="card-title" align="center">Estad??sticas</h3>
            <br> 


            <center><select name="selectBox" id="selectBox" onchange="location.href=this.value">
              <option selected="selected" value="genero.php">Estad??sticas de G??nero</option>
              <option value="edad.php">Estad??sticas de Edad</option>
            </select>  </center>


            <br>
            <h2 style="color:black">F: Femenino</h2>
            <h2 style="color:blue">M: Masculino</h2>

            <figure class="highcharts-figure">
              <div id="container"></div>
              <p class="highcharts-description">

              </p>
            </figure>

            <script type="text/javascript">
      Highcharts.chart('container', {
          chart: {
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Gr??fica de g??neros'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          accessibility: {
              point: {
                  valueSuffix: '%'
              }
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                  }
              }
          },
          series: [{
              name: 'T',
              colorByPoint: true,
              data: [

              <?php

              echo $m;
              echo $f;

              ?>

              ]
          }]
      });
      		</script>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

  <!-- /page content -->
</div>
</div>

<!--<script type="text/javascript" src="bitacora.js"></script>  -->
<?php require '../../requires/script_pag.php';   ?>
</body>
</html>
