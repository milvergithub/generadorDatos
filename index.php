<!DOCTYPE html>
<html>
   <?php
   include './include/head.php';
   ?>
   <body>
      <div class="container container-fluid">
         <div class="panel panel-heading">
            <h3>Generacion de datos de prueba para base de datos</h3>
         </div>
         <div class="row">
            <div id="mensajetest">

            </div>
            <form class="form col-lg-6  well" action="controller/testConection.php" id="formulariotestconn" method="POST">
               <div class="">
                  <span class="">SGBD</span>
                  <select class="form-control input-sm" name="basededatos" id="basededatos">
                     <option value="">Seleccione un gestor</option>
                     <option value="PostgreSQL">PostgreSQL</option>
                  </select>
               </div>
               <div class="">
                  <span class="">base de datos</span>
                  <input type="text" class="form-control input-sm" name="nombrebasedatos" id="nombrebasedatos"/>
               </div>
               <div class="">
                  <span class="">host</span>
                  <input type="text" class="form-control input-sm" name="host" id="host"/>
               </div>
                <div class="">
                    <span class="">puerto</span>
                    <input type="text" class="form-control input-sm" name="puerto" id="puerto" value="5432"/>
                </div>
               <div class="">
                  <span class="glyphicon glyphicon-user">usuario</span>
                  <input type="text" class="form-control input-sm" name="usuario" id="usuario"/>
               </div>
               <div class="">
                  <span class="glyphicon glyphicon-lock">password</span>
                  <input type="text" class="form-control input-sm" name="pass" id="pass"/>
               </div><br/>
               <input type="submit" class="btn btn-default btn-sm"/>
            </form>
         </div>
      </div>
      
   </body>
</html>
