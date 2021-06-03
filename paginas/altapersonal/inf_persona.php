 <!DOCTYPE html>
 <html lang="en">
   <?php require '../../requires/head2.php';
       include '../../requires/conexion.php';
       //include 'altapersonal_back.php';
       $idpersona = $_GET['no_control'];
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
                             Detalles del personal
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
                                       $buscar=mysqli_query($conn,"SELECT * FROM persona WHERE idpersona='$idpersona'");
                                       $fila=mysqli_fetch_array($buscar);
                                       $est= $fila["estado"];
                                   ?>
                           <!--<div class="row">-->
                               <form action="altapersonal_back.php" method="POST">
                                 <input type="text" name="no_control" value="<?php echo $idpersona ?>" hidden>
                                   <div class="form-row" style="margin-top:3em;margin-left:1em; margin-right:1em; margin-bottom:2rem;">
                                       <div class="form-group col-12 col-md-6 col-sm-12">
                                         <label for="Fecha">Dirección Actual </label>
                                         <select class="form-control" name="direccion" id="direccion">
                                           <option value="Seguridad Ciudad">Secretaria de Seguridad Ciudadana</option>
                                           <option value="Transito">Secretaria de Transito</option>
                                           <option value="otra">Secretaria de ...</option>
                                         </select>
                                       </div>
                                       <div class="form-group col-12 col-sm-12 col-md-6">
                                         <label for="FechaInicio"> Departamento Actual </label>
                                         <select class="form-control" name="departamento" id="departamento">
                                           <option value="a">DERI</option>
                                           <option value="b">Tecnologias</option>
                                           <option value="c">Dep</option>
                                         </select>
                                       </div>
                                   </div>
                                   <div class="form-row" style="margin-left:1em; margin-right:1em;">
                                       <div class="form-row">
                                           <label class="col-form-label col-12 col-sm-2 pt-0" style="margin-top:3em;">Actividad</label>
                                           <div class="col-sm-4 col-12" style="margin-top:2em;">
                                               <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" name="actividad" id="gridRadios1" value="operativo" checked>
                                                   <label class="form-check-label" for="gridRadios1">
                                                       Operativo
                                                   </label>
                                               </div>
                                               <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" name="actividad" id="gridRadios2" value="administrativo">
                                                   <label class="form-check-label" for="gridRadios2">
                                                       Administrativo
                                                   </label>
                                               </div>
                                           </div>
                                           <label class="col-form-label col-sm-3 col-12 pt-0"style="margin-top:3em;">Presenta Documentación</label>
                                           <div class="col-sm-3 col-12" style="margin-top:2em;">
                                               <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" name="documentacion" id="gridRadios1" value="1" checked>
                                                   <label class="form-check-label" for="gridRadios1">
                                                       Si
                                                   </label>
                                               </div>
                                               <div class="form-check form-check-inline" >
                                                   <input class="form-check-input" type="radio" name="documentacion" id="gridRadios2" value="0">
                                                   <label class="form-check-label" for="gridRadios2">
                                                       No
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-row" style="margin-left:1em; margin-right:1em;">
                                       <div class="form-group col-12 col-sm-12 col-lg-4 col-md-6"style="padding-top:2em; padding-bottom:2em">
                                         <label for="FechaInicio"> Funcion </label>
                                         <input type="text" name="funcion" id="funcion" class="form-control">
                                       </div>
                                       <div class="form-group col-12 col-md-6 col-sm-12 col-lg-4" style="padding-top:2em; padding-bottom:2em">
                                         <label for="Fecha">Horario</label>
                                         <input type="text" name="horario" id="horario" class="form-control" >
                                       </div>
                                       <div class="form-group col-12 col-md-6 col-sm-12 col-lg-4" style="padding-top:2em; padding-bottom:2em">
                                         <label for="Fecha">Salario</label>
                                         <input type="text" name="salario" id="salario" class="form-control" >
                                       </div>
                                   </div>
                                   <div class="form-row" style="margin-left:1em; margin-right:1em;">
                                       <div class="form-group" style="padding-top:3em; padding-bottom:1em">
                                         <label for="Fecha">Observaciones</label>
                                         <textarea class="form-control" id="observaciones" name="observaciones" rows="2"></textarea>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                         <div class="row">
                                             <div class="col sm-12 text-center"><button class="btn btn-primary" type="submit">Registrar</button></div>

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

         </div>
             <!-- /page content -->
          <!-- </div>
         </div>-->
     <?php require '../../requires/script_pag.php'; ?>
   </body>
 </html>
