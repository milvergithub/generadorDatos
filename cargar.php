<?php
session_start();
include 'include/head.php';
include 'controller/TablesBD.php';
$tablas=new TablesBD();
?>
<div class="">
   <div class="panel panel-heading alert alert-info">
      <h2>tablas de la base de datos</h2>
   </div>
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 well">
   <?php
   $tablas->printTables();
   ?>
   </div>
   <div class="panel panel-success col-lg-6 col-md-6 col-sm-6 col-xs-6 navbar navbar-right" id="formularioConfiguracion">
      <div id="NombreTabla" class="h3 alert alert-success"></div>
      <div id="divtabla" class="well">
         
      </div>
   </div>
</div>