<?php
$conn = new mysqli("localhost", "root", "", "HSCSPCP");

/* comprobar la conexión */
if ($conn->connect_errno) {
    //printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}
if ($conn->ping()) {
    //printf ("¡La conexión está bien!\n");
} else {
    printf ("Error: %s\n", $mysqli->error);
}

?>
