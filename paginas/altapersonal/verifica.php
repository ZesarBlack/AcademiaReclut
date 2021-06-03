<?php

class verf{
        private $idpersona;


        public function Buscar($buscar) {
            include '../../requires/conexion.php';
            $conn->query("SET CHARACTER SET 'utf8'");
            $sql = "SELECT * FROM persona where idpersona LIKE '%$buscar%'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                print "Ya existe";
            }else{
                print"";
            }
            $conn->close();
            return $result;
        }

    }
  ?>
