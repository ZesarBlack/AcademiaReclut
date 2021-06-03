<?php
header("Content-disposition: attachment; filename=reporte.xlsx");
header("Content-type: *.xlsx");
readfile("reporte.xlsx");
 ?>
