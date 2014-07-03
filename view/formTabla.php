<select name="tabla" class="form-control">
<?php
include '../controller/TablesBD.php';
$tablas=new TablesBD();
$tablas->printtableSimple();
?>
</select>
<select name="columna" class="form-control">
   <option value="">selecione culumna</option>
</select>
