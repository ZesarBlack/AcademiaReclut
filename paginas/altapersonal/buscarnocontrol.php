
<?php
      $user = $_POST['idpersona'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($idpersona) {
           include '../../requires/conexion.php';
            $conn->query("SET CHARACTER SET 'utf8'");
            $sql = "SELECT * FROM persona where idpersona LIKE '%$idpersona%'";
             
           $result = $conn->query($sql);
             
            if($result->num_rows == 0){
                  echo "<span style='font-weight:bold;color:green;'>Disponible.</span>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>El No.Control ya existe.</span>";

            } 
              //return $result;

            $conn->close();
      }     
?> 