<?php
header("Content-disposition: attachment; filename=Lista_examen_fisico.xlsx");
header("Content-type: *.xlsx");
readfile("Lista_examen_fisico.xlsx");
 ?>
