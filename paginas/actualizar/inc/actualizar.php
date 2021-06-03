<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="HSCSPCP";
	$conn = mysqli_connect($servername, $username, $password,$db);
	$conn->query("SET CHARACTER SET 'utf8'");
	$idperfil=$_POST['idperfil'];
	$nombre=$_POST['nombres'];
	$apaterno=$_POST['apaterno'];
	$amaterno=$_POST['amaterno'];
	$genero=$_POST['genero'];
	$fechanac=$_POST['fechanac'];
	$curp=$_POST['curp'];
	$rfc=$_POST['rfc'];
	$imss=$_POST['imss'];
	$smn=$_POST['smn'];
	$direccion=$_POST['direccion'];
	$telcasa=$_POST['telcasa'];
	$telmovil=$_POST['telmovil'];
	$correo=$_POST['correo'];
	$sql = "UPDATE `persona` SET `nombre` = '$nombre', `ap_paterno` = '$apaterno', `ap_materno` = '$amaterno', `genero` = '$genero', `fecha_nac` = '$fechanac', `curp` = '$curp', `rfc` = '$rfc', `imss` = '$imss', `smn` = '$smn', `direccion` = '$direccion', `tel_casa` = '$telcasa', `tel_movil` = '$telmovil', `correo_electronico` = '$correo' WHERE `persona`.`idpersona` = $idperfil;";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	}
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
