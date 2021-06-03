<?php
  class BD
  {
    private $pdo;//variable para realizar la conexion a la base de datos
    //realizado por mo
    public function __construct()
    {
      $dbHost = 'localhost';
      $dbName = 'HSCSPCP';
      $dbUser = 'root';
      $dbPass = '';
    	//try catch en caso de error de conexión
      try
      {
		    $this->pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
		    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      }
      catch(Exception $e)
      {
		    echo $e->getMessage();
		  }
    }//fin de constructor



    function consulta_query($query)
    {
      $dbHost = 'localhost';
      $dbName = 'filmotecama';
      $dbUser = 'root';
      $dbPass = '';
      $cnx = mysqli_connect($dbHost, $dbUser, $dbPass,$dbName); //conecta a la base
      mysqli_set_charset($cnx, "utf8"); //formato utf8
      $resultado = mysqli_query($cnx, $query);
      return mysqli_fetch_array($resultado);
    }

  /*  public function consultar($query)
    {
      return $this->pdo->query($query);
    }*/
    public function consultar($query)
    {
      return $this->pdo->query($query);
    }

    public function consulta($sql)
    {
      $query = $this->pdo->prepare($sql);
      $query->execute();
    }

    public function BuscarVideoPalabra($word)
    {
      return $this->pdo->query("SELECT * FROM videos WHERE Nombre_Video LIKE '%$word%' OR Nombre_Ponente LIKE '%$word%' OR ID_Videos LIKE '%$word%' OR Descripcion_Video LIKE '%$word%'");
    }
    //prueba 2do plano de busqueda video por palabra, borrar si esta de mas
    public function BuscarVideoPalabra2($word, $type)
    {
      $BD = new BD();
      ////////////////////////TEMAS////////////////////////////////////////////////////////////////////////////
      $result_tema_consulta = $BD->consultar("SELECT COUNT(tema) FROM `temas` WHERE tema LIKE '%$word%'");
      $result_tema_result = $result_tema_consulta->fetch();
      $result_tema_val = $result_tema_result[0];
      //$result_tema_val = contiene el nuemero de elementos (tema) encontrados parecidos a lo que se busca en la consulta///////////
      ////////////////MODULOS ////////////////////////////////////////////////////////////////////////////////////////////
      $result_modulo_consulta = $BD->consultar("SELECT COUNT(id_modulo) FROM `modulos` WHERE nombre_modulo LIKE '%$word%' ");
      $result_modulo_result = $result_modulo_consulta->fetch();
      $result_modulo_val = $result_modulo_result[0];
      //$result_modulo_val = contiene el nuemero de elementos (modulo) encontrados parecidos a lo que se busca en la consulta///////////
      ////////////////SESSIONES ////////////////////////////////////////////////////////////////////////////////////////////
      $result_sesion_consulta = $BD->consultar("SELECT COUNT(id_sesion) FROM `sesiones` WHERE nombre_sesion LIKE '%$word%' ");
      $result_sesion_result = $result_sesion_consulta->fetch();
      $result_sesion_val = $result_sesion_result[0];
      //$result_modulo_val = contiene el nuemero de elementos (sesiones) encontrados parecidos a lo que se busca en la consulta///////////
      ////////////////VIDEO ////////////////////////////////////////////////////////////////////////////////////////////
      $result_videos_consulta = $BD->consultar("SELECT COUNT(Nombre_Video) FROM `videos` WHERE Nombre_Video LIKE '%$word%' ");
      $result_videos_result = $result_videos_consulta->fetch();
      $result_videos_val = $result_videos_result[0];
      //$result_modulo_val = contiene el nuemero de elementos (video) encontrados parecidos a lo que se busca en la consulta///////////
      ////////////////PONENTE ////////////////////////////////////////////////////////////////////////////////////////////
      $result_ponente_consulta = $BD->consultar("SELECT COUNT(Nombre_Ponente) FROM `videos` WHERE Nombre_Ponente LIKE '%$word%' ");
      $result_ponente_result = $result_ponente_consulta->fetch();
      $result_ponente_val = $result_ponente_result[0];
      //$result_modulo_val = contiene el nuemero de elementos (Ponente) encontrados parecidos a lo que se busca en la consulta///////////
      ////////////////FECHA ////////////////////////////////////////////////////////////////////////////////////////////
      $result_fecha_consulta = $BD->consultar("SELECT COUNT(Fecha) FROM `videos` WHERE Fecha = '$word' ");
      $result_fecha_result = $result_fecha_consulta->fetch();
      $result_fecha_val = $result_fecha_result[0];
      //$result_modulo_val = contiene el nuemero de elementos (Ponente) encontrados parecidos a lo que se busca en la consulta///////////
      $resultados = array();
      $ids = array();
      if ($result_tema_val > 0 && ($type == 1 || $type== 3))
      {
        //echo 'tema encontrado = '.$result_tema_val;
        $tema = $this->pdo->query("SELECT t.tema,m.nombre_modulo,s.nombre_sesion,v.ID_Videos,v.Nombre_Video, v.Nombre_Ponente,v.Imagen,v.Fecha
          FROM modulos m, temas t, sesiones s, videos v
          WHERE t.id_tema=m.id_tema
          AND m.id_modulo= s.id_modulo
          AND s.id_sesion = v.id_sesion
          AND t.tema LIKE '%$word%'");
          foreach($tema as $t){
            if(array_search($t['ID_Videos'], $ids) == false){
                $resultados[] = $t;
                $ids[] = $t['ID_Videos'];
            }
          }
      }
      if ($result_modulo_val > 0 && ($type == 1 || $type== 3))
      {
        //echo 'modulos encontrados = '.$result_modulo_val;
        $modulo = $this->pdo->query("SELECT  t.tema,m.nombre_modulo,s.nombre_sesion,v.ID_Videos,v.Nombre_Video, v.Nombre_Ponente,v.Imagen,v.Fecha
        FROM modulos m, temas t, sesiones s, videos v
        WHERE t.id_tema=m.id_tema AND m.id_modulo= s.id_modulo AND s.id_sesion = v.id_sesion
        AND m.nombre_modulo LIKE '%$word%' ");
        foreach($modulo as $t){
          if(array_search($t['ID_Videos'], $ids) == false){
            $resultados[] = $t;
            $ids[] = $t['ID_Videos'];
          }
        }
      }
      if ($result_sesion_val > 0 && ($type == 1 || $type== 3))
      {
        $sesion = $this->pdo->query("SELECT  t.tema,m.nombre_modulo,s.nombre_sesion,v.ID_Videos,v.Nombre_Video, v.Nombre_Ponente,v.Imagen,v.Fecha
        FROM modulos m, temas t, sesiones s, videos v
        WHERE t.id_tema=m.id_tema AND m.id_modulo= s.id_modulo AND s.id_sesion = v.id_sesion
        AND s.nombre_sesion LIKE '%$word%' ");
        foreach($sesion as $t){
          if(array_search($t['ID_Videos'], $ids) == false){
            $resultados[] = $t;
            $ids[] = $t['ID_Videos'];
          }
        }
      }
      if ($result_videos_val > 0 && ($type == 1 || $type== 3))
      {
        $video = $this->pdo->query("SELECT  t.tema,m.nombre_modulo,s.nombre_sesion,v.ID_Videos,v.Nombre_Video, v.Nombre_Ponente,v.Imagen,v.Fecha
        FROM modulos m, temas t, sesiones s, videos v
        WHERE t.id_tema=m.id_tema AND m.id_modulo= s.id_modulo AND s.id_sesion = v.id_sesion
        AND v.Nombre_Video LIKE '%$word%' ");
        foreach($video as $t){
          if(array_search($t['ID_Videos'], $ids) == false){
            $resultados[] = $t;
            $ids[] = $t['ID_Videos'];
          }
        }
      }
      if ($result_ponente_val > 0 && ($type == 1 || $type== 2))
      {
        $video2 = $this->pdo->query("SELECT  t.tema,m.nombre_modulo,s.nombre_sesion,v.ID_Videos,v.Nombre_Video, v.Nombre_Ponente,v.Imagen,v.Fecha
        FROM modulos m, temas t, sesiones s, videos v
        WHERE t.id_tema=m.id_tema AND m.id_modulo= s.id_modulo AND s.id_sesion = v.id_sesion
        AND v.Nombre_Ponente LIKE '%$word%' ");
        foreach($video2 as $t){
          if(array_search($t['ID_Videos'], $ids) == false){
            $resultados[] = $t;
            $ids[] = $t['ID_Videos'];
          }
        }
      }
      if ($result_fecha_val > 0 && ($type == 1 || $type== 4))
      {
        $fecha = $this->pdo->query("SELECT  t.tema,m.nombre_modulo,s.nombre_sesion,v.ID_Videos,v.Nombre_Video, v.Nombre_Ponente,v.Imagen,v.Fecha
        FROM modulos m, temas t, sesiones s, videos v
        WHERE t.id_tema=m.id_tema AND m.id_modulo= s.id_modulo AND s.id_sesion = v.id_sesion
        AND v.Fecha = '$word' ORDER BY Fecha DESC");
        foreach($fecha as $t){
          if(array_search($t['ID_Videos'], $ids) == false){
            $resultados[] = $t;
            $ids[] = $t['ID_Videos'];
          }
        }
      }
      if(count($resultados)>0){
        return $resultados;
      }
      else
      {
        return false;
      }
    }

    public function PerfilUsuario($id){
      return $this->pdo->query("SELECT * FROM `perfil` WHERE id_perfil=$id");
    }

    public function PerfilPersona($id){
      return $this->pdo->query("SELECT * FROM `persona` WHERE idpersona=$id");
    }


    //Clasem para editar el nombre del

    public function ActualizarVideos($id, $name, $spaker, $description, $date, $event, $duracion)
    {
      $sql = "UPDATE `videos` SET `Nombre_Video` = :nombre, `Nombre_Ponente` = :ponente, `Descripcion_Video` = :descripcion, `Fecha` = :fecha, `Evento` = :evento, `duracion` = :duracion WHERE `videos`.`ID_Videos` = :id";
      $query = $this->pdo->prepare($sql);
      $query->bindParam(":nombre", $name);
      $query->bindParam(":ponente", $spaker);
      $query->bindParam(":descripcion", $description);
      $query->bindParam(":fecha", $date);
      $query->bindParam(":evento", $event);
      $query->bindParam(":duracion", $duracion);
      $query->bindParam(":id", $id);
      $query->execute();
    }

    public function eliminar_usuarios($id)
    {
      $sql = "DELETE FROM `usuarios` WHERE `usuarios`.`id` = :id";
      $query = $this->pdo->prepare($sql);
      $query->bindParam(":id", $id);
      $query->execute();
    }

  }
?>
