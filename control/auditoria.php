<?php

class Seguridad
{
  public function auditarPagina($usuario, $pagina)
  {
    require '../../requires/conexion.php;';
    $query_auditoria="INSERT INTO registro_accesos (usuario, ip, pagina) values ('$usuario', '$ip', '$pagina')";
    $conn->query($query_auditoria);
    $conn->close();
  }
}
$seguridad = new Seguridad();

function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
      return $_SERVER['HTTP_CLIENT_IP'];
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $_SERVER['REMOTE_ADDR'];
}
 ?>
