  <?php

class alta{
        private $idpersona;
        private $nombre;
        private $ap_paterno;
        private  $ap_materno;
        private $genero;
        private  $fecha_nac;
        private  $direccion;
        private $telcasa;
        private $telmovil;
        private $curp;
        private  $rfc;
        private  $imss;
        private  $smn;
        private $Correo;
        private $edoCivil;

        public function persona($idpersona,$nombre, $ap_paterno, $ap_materno, $genero, $fecha_nac,$curp,$rfc,$imss,$smn,$direccion, $telcasa, $telmovil,$Correo,$edoCivil){
            include '../../requires/conexion.php';
            $sql = "INSERT INTO persona (idpersona,nombre,ap_paterno,ap_materno,genero,fecha_nac,direccion,tel_casa,tel_movil,curp,rfc,imss,smn,correo_electronico,estado,estatus,situacion_actual) values ('$idpersona','$nombre','$ap_paterno', ' $ap_materno', '$genero', '$fecha_nac', '$direccion', '$telcasa', '$telmovil', '$curp','$rfc','$imss',' $smn','$Correo','Activo','Activo','$edoCivil')";
            if(mysqli_query($conn, $sql)){
                echo "<center>Se ha guardado exitosamente</center>";
            }else{
                echo "Error as: ". mysqli_error($conn);
            }
            header("Location: inf_persona.php?no_control=".urlencode($idpersona));
            $conn->close();

        }

        public function movimientoPersona($idpersona, $departamento, $actividad, $documentacion, $funcion, $horario, $salario, $observaciones){
            include '../../requires/conexion.php';
            $ahora = (new \DateTime())->format('Y-m-d H:i:s');
            $sql = "INSERT INTO movimientos (idUsuario, iddepartamento,puesto,con_documento, funcion, horario, sueldo, time_stamp) values ('$idpersona', '$departamento', '$actividad', '$documentacion', '$funcion', '$horario', '$salario', '$ahora')";
            echo $sql;
            $conn->query($sql);
            $conn->close();
            return $sql;
        }
    }


 $guardar = new alta();
  if (isset($_POST['idpersona']) &&
   isset($_POST['nombre']) &&
   isset($_POST['apepat']) &&
   isset($_POST['apemat']) &&
   isset($_POST['genero']) &&
   isset($_POST['FechaNacimiento']) &&
   isset($_POST['CURP']) &&
   isset($_POST['RFC']) &&
   isset($_POST['Nosegur']) &&
   isset($_POST['Cartilla']) &&
   isset($_POST['Direccion']) &&
   isset($_POST['Telefono1']) &&
   isset($_POST['Telefono2']) &&
   isset($_POST['Correo']) &&
   isset($_POST['EdoCivil'])

     ){
       $fecha_nac = date('Y-m-d',strtotime($_POST['FechaNacimiento']));
       $guardar -> persona($_POST['idpersona'],$_POST['nombre'], $_POST['apepat'], $_POST['apemat'], $_POST['genero'], $_POST['FechaNacimiento'], $_POST['CURP'],$_POST['RFC'],$_POST['Nosegur'], $_POST['Cartilla'] ,$_POST['Direccion'] , $_POST['Telefono1'], $_POST['Telefono2'],$_POST['Correo'],$_POST['EdoCivil']);
     }

    if (
      isset($_POST['direccion']) &&
      isset($_POST['departamento']) &&
      isset($_POST['actividad']) &&
      isset($_POST{'documentacion'}) &&
      isset($_POST['horario']) &&
      isset($_POST['funcion']) &&
      isset($_POST['salario']) &&
      isset($_POST['no_control']) &&
      isset($_POST['observaciones']))
      {
        $guardar->movimientoPersona($_POST['no_control'], $_POST['departamento'], $_POST['actividad'], $_POST{'documentacion'}, $_POST['funcion'], $_POST['horario'], $_POST['salario'], $_POST['observaciones']);
        echo "okokok";
    }

  ?>
