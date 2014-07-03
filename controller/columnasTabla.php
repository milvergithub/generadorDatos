<?php
include './TablesBD.php';
$conexionColumnas=new TablesBD();
$conexionColumnas->printColumnasTabla($_POST['tabla']);
?>
