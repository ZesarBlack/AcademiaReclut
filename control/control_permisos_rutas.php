<?php
/**
 *
 */
class Rutas
{
  public function verificarRutas($ruta, $rol)
  {
    //se manipula la ruta para obtener la carpeta de la pagina
    $ruta_general = explode('\\', $ruta);
    $pagina_actual = count($ruta_general);
    $ruta_actual = $ruta_general[$pagina_actual-1];
    // se integran la carpeta de la pagina y su rol
    //echo $ruta_actual;
    $permisos = array(
        array(
            'inicio' => 1,
        ),
        array(
            'inicio' => 0,
        ),
        array(
            'inicio' => 4,
        ),
        array(
            'inicio' => 5,
        ),
        array(
            'inicio' => 8,
        ),
        array(
            'inicio' => 9,
        ),

        array(
            'usuarios' => 1,
        ),
        array(
            'usuarios' => 0,
        ),

        array(
            'cadetes' => 1,
        ),
        array(
            'cadetes' => 0,
        ),
        array(
            'cadetes' => 8,
        ),

        array(
            'examedico' => 1,
        ),
        array(
            'examedico' => 0,
        ),
        array(
            'examedico' => 5,
        ),

        array(
            'exafisico' => 1,
        ),
        array(
            'exafisico' => 0,
        ),
        array(
            'exafisico' =>  8,
        ),

        array(
            'lista_exa_fisico' => 1,
        ),
        array(
            'detalle_cadete' => 1,
        ),
        array(
            'lista_exa_fisico' => 0,
        ),
        array(
            'lista_exa_fisico' =>  8,
        ),

        array(
            'lista_cadetes' =>  0,
        ),
        array(
            'lista_cadetes' =>  1,
        ),
        array(
            'lista_cadetes' =>  5,
        ),
        array(
            'lista_cadetes' =>  8,
        ),
        array(
            'lista_cadetes' =>  9,
        ),

        array(
            'control_reingresos' =>  0,
        ),
        array(
            'control_reingresos' =>  1,
        ),

        array(
            'control_apto' =>  0,
        ),
        array(
            'control_apto' =>  1,
        ),
        array(
            'control_apto' =>  9,
        ),

        array(
            'control_interesado' =>  0,
        ),
        array(
            'control_interesado' =>  1,
        ),
        array(
            'control_interesado' =>  9,
        ),

        array(
            'llamado_formacion_inicial' =>  9,
        ),
        array(
            'llamado_formacion_inicial' =>  1,
        ),
        array(
            'llamado_formacion_inicial' =>  0,
        ),

        array(
            'llamados_formacion_interesados' =>  9,
        ),
        array(
            'llamados_formacion_interesados' =>  1,
        ),
        array(
            'llamados_formacion_interesados' =>  0,
        ),


        array(
            'cadetes' => 5,
        )
    );

    //se hace la busqueda de la pagina en la se se esta actualmente
    $validacion = array_column($permisos, $ruta_actual);
    //echo $ruta_actual;
    $contador =0;
    $hay_permiso = 0;

    if (count($validacion)>0) {
      for ($i=0; $i < count($validacion) ; $i++) {
        if ($validacion[$i] == $rol) {
          //echo "haypermiso";
          $hay_permiso = 1;
        }
      }
    }

    if ($hay_permiso == 0) {
      header("Location: ../index.php");
    }


  }
}

$ruta = new Rutas();
 ?>
