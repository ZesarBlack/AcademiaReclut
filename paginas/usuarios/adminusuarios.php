<!DOCTYPE html>
<html lang="en">
  <?php require '../../requires/head2.php';
    include '../../requires/conexion.php';
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
            <?php require '../../requires/sidebar.php'  ?>
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
                                Usuarios Registrados
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
                                <div class="row">
                                  <form name="form2" method="POST" action="agregarU.php">
                                            <div class="row tile_count">
                                               <div class="col-xs-10 tile_stats_count">
                                                         <div>
                                                           <input type="submit" class="btn btn-primary"  name="guardar" id="guardar" value="Agregar Usuario" style='font-size: 12pt;
                                                            font-weight: bold;'>
                                                         </div>
                                                 </div>
                                             </div>
                                   </form>
                                </div>

                                <div class=" row x_content"  style="overflow : auto; overflow: scroll;">
                                  <table class="table table-striped jambo_table table-bordered">
                                    <thead>
                                      <th>ID</th>
                                      <th>Nombre</th>
                                      <th>Apellido Paterno</th>
                                      <th>Apellido Materno</th>
                                      <th>Rol</th>
                                      <th>Correo Electronico</th>
                                      <th>Creación</th>
                                      <th>Actualización</th>
                                      <th>Editar </th>
                                      <th>Eliminar</th>
                                    </thead>
                                    <?php
                                    $consulta= "SELECT * FROM usuarios_cat WHERE nombre != 'Administrador'";
                                    $resultado= mysqli_query($conn, $consulta);

                                    while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){

                                     $idUsuario= $fila["idUsuario"];
                                      $nom= $fila["nombre"];
                                      $pat= $fila["ap_paterno"];
                                      $mat= $fila["ap_materno"];
                                      $roles_idrol= $fila["roles_idrol"];
                                      $correo= $fila["email"];
                                      //$tipo= $fila["rol"];
                                      $crea= $fila["create_time"];
                                      $update_time=$fila["update_time"];

                                      echo "<tr>
                                      <td> $idUsuario </td>
                                      <td> $nom </td>
                                      <td> $pat </td>
                                      <td> $mat </td>
                                      <td> $roles_idrol </td>
                                      <td> $correo </td>
                                      <td> $crea </td>
                                      <td> $update_time </td>
                                      <td><a href='editar_usuario.php?idUsuario=".$idUsuario."'>Editar</a></td>
                                      <td><a href='crear.php?idUsuario=".$idUsuario."'>Borrar</a></td>
                                       </tr>";

                                    }
                                    mysqli_close($conn);
                                    ?>
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
<?php require '../../requires/script_pag.php';   ?>
</body>
</html>
