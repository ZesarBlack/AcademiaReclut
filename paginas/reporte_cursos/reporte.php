<?php
header("Content-disposition: attachment; filename=Reporte_cursos.xlsx");
header("Content-type: *.xlsx");
readfile("Reporte_cursos.xlsx");
 ?>
