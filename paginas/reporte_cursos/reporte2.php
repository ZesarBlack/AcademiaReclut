<?php
header("Content-disposition: attachment; filename=Reporte_curso.xlsx");
header("Content-type: *.xlsx");
readfile("Reporte_curso.xlsx");
 ?>
