<?php
header("Content-disposition: attachment; filename=Lista_Reingresos.xlsx");
header("Content-type: *.xlsx");
readfile("Lista_Reingresos.xlsx");
 ?>
