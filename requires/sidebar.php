<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <ul class="nav side-menu">
      <li><a  href="../../paginas/inicio/home.php"><i class="fa fa-home"></i>Inicio</a></li>
<?php
      if ($_SESSION['rol']==1) {
        echo '
        <li><a><i class="fa fa-sitemap"></i>Aministración<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="../../paginas/usuarios/agregarU.php"> Crear usuarios</a></li>
            <li><a href="../../paginas/usuarios/adminusuarios.php">Ver Usuarios</a></li>
          </ul>
        </li>
        ';
      }
      if ($_SESSION['rol']==1) {
        echo '
        <li><a><i class="fa fa-users"></i>Reclutamiento<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="../../paginas/cadetes/Registro_Aspirante.php">Recepción de Documentos</a></li>
            <li><a href="../../paginas/examedico/medico.php">Examen médico</a></li>
            <li><a href="../../paginas/exafisico/evaluacion.php">Examen físicio</a></li>
            <li><a href="../../paginas/lista_exa_fisico/lista_fisico.php">Lista de evaluados examen físicio</a></li>
            <li><a href="../../paginas/examedico/busqueda_medico.php">Revaloracíon</a></li>
            <li><a href="../../paginas/lista_cadetes/lista_cadetes.php">Administrar Aspirantes</a></li>
            <li><a href="../../paginas/control_reingresos/control_reingreso.php">Antecedentes de Reingresos</a></li>
          </ul>
        </li>
        ';
      }
      if ($_SESSION['rol']==1 || $_SESSION['rol']==9) {
        echo '
        <li><a><i class="fa fa-users"></i>Control de Confianza C3<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="../../paginas/control_apto/cad_apto.php">Control de Confianza (Aptos C3)</a></li>
            <li><a href="../../paginas/control_interesado/cad_interesado.php">Control de Confianza (Interesados C3)</a></li>
            <li><a href="../../paginas/control_apto_reingreso/cad_apto.php">Control de Confianza Reingresos (Aptos C3)</a></li>
            <li><a href="../../paginas/control_interesado_reingreso/cad_interesado.php">Control de Confianza Reingresos(Interesados C3)</a></li>
          </ul>
        </li>
        ';
      }
      if ($_SESSION['rol']==1 || $_SESSION['rol']==9) {
        echo '
        <li><a><i class="fa fa-graduation-cap"></i>Formación Inicial<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="../../paginas/llamado_formacion_inicial/cad_interesado.php">Curso Formación Inicial</a></li>
            <li><a href="../../paginas/llamados_formacion_interesados/cad_interesado.php">Interesados en Formacion Inicial</a></li>
          </ul>
        </li>
        ';
      }
      if ($_SESSION['rol']==5) {
        echo '
        <li><a><i class="fa fa-users"></i>Reclutamiento<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="../../paginas/examedico/medico.php">Examen médico</a></li>
            <li><a href="../../paginas/examedico/busqueda_medico.php">Revaloracíon</a></li>
            <li><a href="../../paginas/lista_cadetes/lista_cadetes.php">Administrar Aspirantes</a></li>
          </ul>
        </li>
        ';
      }
      if ($_SESSION['rol']==8) {
        echo '
        <li><a><i class="fa fa-users"></i>Reclutamiento<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="../../paginas/cadetes/Registro_Aspirante.php">Recepción de Documentos</a></li>
            <li><a href="../../paginas/exafisico/evaluacion.php">Examen físicio</a></li>
            <li><a href="../../paginas/lista_exa_fisico/lista_fisico.php">Lista de evaluados examen físicio</a></li>
            <li><a href="../../paginas/lista_cadetes/lista_cadetes.php">Administrar Aspirantes</a></li>
            <li><a href="../../paginas/control_reingresos/control_reingreso.php">Antecedentes de Reingresos</a></li>
          </ul>
        </li>
        ';
      }

      /*
      <li><a href="../../paginas/formacion_inicial/formacion.php">Registro Aspirantes</a></li>
      <li><a href="../../paginas/calificar_cadete/asignar_calf.php">Calificar Aspirantes</a></li>
      <li><a href="../../paginas/reporte_cursos/reporte_cursos.php">Reporte de los cursos</a></li>


      if ($_SESSION['rol']==1 ) {
          echo '
          <li><a href="../../paginas/seleccion/seleccion.php"><i class="fa fa-check"></i>Selección</a></li>
          ';
        }

      if ($_SESSION['rol']==8) {
        echo '
        <li><a><i class="fa fa-users"></i>Reclutamiento<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="../../paginas/cadetes/Registro_Aspirante.php">Registro Aspirantes</a></li>
            <li><a href="../../paginas/exafisico/evaluacion.php">Examen físicio</a></li>
            <li><a href="../../paginas/lista_cadetes/lista_cadetes.php">Ver Cadetes</a></li>
          </ul>
        </li>
        ';
      }
      if ($_SESSION['rol']==5) {
        echo '
        <li><a><i class="fa fa-users"></i>Reclutamiento<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="../../paginas/examedico/medico.php">Examen médico</a></li>
            <li><a href="../../paginas/examedico/busqueda_medico.php">Revaloracíon</a></li>
            <li><a href="../../paginas/lista_cadetes/lista_cadetes.php">Ver Aspirantes</a></li>
          </ul>
        </li>
        ';
      }
      /*
      if ($_SESSION['rol']==1 ) {
        echo '
        <li><a><i class="fa fa-plus"></i>Ingreso</a>
        </li>
        ';
      }
      */
      /*
      if ($_SESSION['rol']==1) {
        echo '
        <li><a><i class="fa fa-cogs"></i>Capacitación Continua<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="../../paginas/formacionContinua/cursos.php">Cursos</a></li>
            <li><a href="../../paginas/asignar_curso_policia/asignar_curso_policia.php">Asignar Cursos Policías</a></li>
            <li><a href="../../paginas/calificar_policias/asignar_calf.php">Calificar Policías</a></li>
            <li><a href="../../paginas/historial_policia/historial_policia.php">Historial de Calificaciones Policías</a></li>
          </ul>
        </li>
        ';
      }
      if ($_SESSION['rol']==9) {
        echo '
        <li><a><i class="fa fa-users"></i>Reclutamiento<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
               <li><a href="../../paginas/evaluacion_control_conf/solconfi.php">Evaluación Control de Confianza aspirantes</a></li>
          </ul>
        </li>
        ';
      }


      if ($_SESSION['rol']==1  || $_SESSION['rol']==9) {
        echo '
            <li><a><i class="fa fa-flag"></i>Permanencia<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="../../paginas/Sol_Control_Conf/solconfi.php">Evaluación Control de Confianza policias</a></li>
              </ul>
            </li>
        ';
      }
       if ($_SESSION['rol']==1) {
         echo '
         <li><a><i class="fa fa-book"></i>Control Apirantes y policias<span class="fa fa-chevron-down"></span></a>
           <ul class="nav child_menu">
             <li><a href="../../paginas/subir/index.php">Documentación</a></li>
             <li><a href="../../paginas/ver_documentos/documentos.php">Ver documentos</a></li>
           </ul>
         </li>
         ';
       }
       if ($_SESSION['rol']==1) {
         echo '
         <li><a><i class="fa fa-book"></i>Control Policia<span class="fa fa-chevron-down"></span></a>
           <ul class="nav child_menu">
             <li><a href="../../paginas/documentacion_policia/index.php">Documentación Policias</a></li>
             <li><a href="../../paginas/seguimiento_elemento/seguimiento.php">Seguimiento</a></li>
           </ul>
         </li>
         ';
       }
       if ($_SESSION['rol']==1) {
         echo '
         <li><a><i class="fa fa-users"></i>Reportes<span class="fa fa-chevron-down"></span></a>
           <ul class="nav child_menu">
             <li><a href="../../paginas/reporte_corte/reporte_corte.php">Reporte corte</a></li>
             <li><a href="../../paginas/reporte_reingresos/reporte_corte.php">Reporte Reingresos</a></li>
             <li><a href="../../paginas/reporte_no_c3/reporte_corte.php">Reporte no c3</a></li>
             <li><a href="../../paginas/reporte_no_reunen/reporte_corte.php">Reporte no reunen requisitos</a></li>
             <li><a href="../../paginas/reporte_impcc/reporte_corte.php">Reporte impcc</a></li>
             <li><a href="../../paginas/reporte_tramite_firma/reporte_corte.php">Reporte tramite de firma</a></li>
             <li><a href="../../paginas/reporte_cuentan_cup/reporte_corte.php">Reporte Cuentan con CUP</a></li>
           </ul>
         </li>
         ';
       }
       */
 ?>
    </ul>
  </div>
</div>
