<select name="tabla" id="tabla" class="form-control" onchange="cargarColumnasTabla()">
<?php
include '../controller/TablesBD.php';
$tablas=new TablesBD();
$tablas->printtableSimple();
?>
</select>
<select name="columna" id="columna" class="form-control" onchange="">
   <option value="">selecione culumna</option>
</select>
