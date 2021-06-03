<?php
header("Content-disposition: attachment; filename=aspirantes_listos_formacion.xlsx");
header("Content-type: *.xlsx");
readfile("aspirantes_listos_formacion.xlsx");
 ?>
