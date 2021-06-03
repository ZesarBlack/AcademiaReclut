<?php
/**
 *
 */

class Subir
{
  public function subirDocumento($direccion)
  {
    $direccion ="C:/xampp/htdocs/academia/leer/prueba2.csv";
    require '../requires/conexion.php';
    $query="LOAD DATA INFILE 'C:/xampp/htdocs/academia/leer/oficial.csv' INTO TABLE cadete FIELDS TERMINATED BY ',' LINES TERMINATED BY ''\r\n' (folio, f_llenado, a_paterno,  a_materno,  nombre,  f_nacimiento,  edad_registro ,  curp,  rfc,  genero,  estado_civil, calle, colonia, municipio, estado, c_postal, nolic, nocartilla, tel_celular,  tel_1, tel_2, email, grado_estudio, carrera_g, exp_o_exm,  dependencia, entidad_dep,  metodo_e_empleo)";
    $query="LOAD DATA LOCAL INFILE '/var/www/html/academia/oficial.csv' INTO TABLE cadete FIELDS TERMINATED BY ',' LINES TERMINATED BY ''\r\n' (folio, f_llenado, a_paterno,  a_materno,  nombre,  f_nacimiento,  edad_registro ,  curp,  rfc,  genero,  estado_civil, calle, colonia, municipio, estado, c_postal, nolic, nocartilla, tel_celular,  tel_1, tel_2, email, grado_estudio, carrera_g, exp_o_exm,  dependencia, entidad_dep,  metodo_e_empleo)";
    $resultado = $conn->query($query);
    $conn->close();
  }
}
$subir = new Subir();
if (isset($_FILES["file"])) {
  $subir->subirDocumento($_FILES["file"]["tmp_name"]);
};
    $query="LOAD DATA INFILE 'C:/xampp/htdocs/academia/leer/oficial_medico.csv' INTO TABLE exa_medico FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (cadete_id, conclusion)";
    $query="LOAD DATA LOCAL INFILE '/var/www/html/academia/oficial_medico.csv' INTO TABLE exa_medico FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (cadete_id, conclusion)";

    $query="LOAD DATA INFILE 'C:/xampp/htdocs/academia/leer/oficial_fisico.csv' INTO TABLE exa_fisico FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (cadete_idCadete, resultado, promedio)";
    $query="LOAD DATA LOCAL INFILE '/var/www/html/academia/oficial_fisico.csv' INTO TABLE exa_fisico FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (cadete_idCadete, resultado, promedio, manejo)";
"SELECT DISTINCT folio, f_llenado, cad.nombre, a_paterno, a_materno, f_nacimiento, edad_registro, tel_celular, tel_1, tel_2, tipo_ingreso, idCadete FROM cadete AS cad
 INNER JOIN exa_m AS cad ON cadete_id = folio
 WHERE conclusion LIKE'%APTO%'
SELECT * FROM exa_medico WHERE conclusion LIKE'%APTO%'";
 ?>

 |        1 | 2020-09-01 | NULL         | NI20200002 | RODRIGUEZ       | VEGA        | SANDRA                | 1993-03-06   | 28            | FEMENINO   | ROVS930406MPLDGN09  | zandriith@gmail.com                      | 2225134318  | 3928      |             | CALLE HIERRO MZ. 3 LT. 4                      | NULL       | NULL       | 72495    | MINERALES DEL SUR                             | PUEBLA                     | PUEBLA      | NULL     | NULL                 | NULL            | NULL                        | NULL     | NULL                 | NULL               | NULL                           | NULL         | NULL                    | NULL       | NULL                   | NULL                 | NULL                             | NULL         | NULL                     | NULL           | NULL                        | NULL            | NULL                        | NULL                  | NULL                              | NULL                   | NULL                               | NULL       | NULL                   | NULL          | NULL                      | NULL                    | NULL                                | NULL       | NULL          | NULL            |             | NULL          | ROVS930406S72 |             |                     | NULL                | EDUCACION SECUNDARIA | NULL             | NULL                   |
 |
