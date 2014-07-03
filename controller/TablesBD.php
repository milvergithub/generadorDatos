<?php
session_start();
include 'ConexionPG.php';
/**
 * Description of TablesBD
 * @author milver
 */
class TablesBD {
   private $conexion;
   public function __construct() {
      $this->conexion=new ConexionPG($_SESSION['host'], $_SESSION['puerto'], $_SESSION['base'], $_SESSION['usuario'], $_SESSION['password']);
   }
   public function printtableSimple() {
      $resultadoPTS=  $this->conexion->printTables();
      while ($regPTS = pg_fetch_assoc($resultadoPTS)) {
         echo '<option value="'.$regPTS['tablename'].'">'.$regPTS['tablename'].'</option>';
      }
   }
   public function printColumnasTabla($tabla) {
      $resultadoPCT=  $this->conexion->detalleTabla($tabla);
      while ($regPCT = pg_fetch_assoc($resultadoPCT)) {
         echo '<option value="'.$regPCT['column_name'].'">'.$regPCT['column_name'].'</option>';
      }
   }
   public function printTables() {
      $resultadoPT=  $this->conexion->printTables();
      $contador=1;
      while ($regPT = pg_fetch_assoc($resultadoPT)) {
         echo '<div class="panel panel-primary col-lg-12">
                  <button class="btn btn-link" id="boton'.$contador.'" onclick="mostrarOcultar('.$contador.',\''.$regPT['tablename'].'\');">'.$regPT['tablename'].'</button>
                  <div class="well" id="tabla'.$contador.'" style="display: none">
                     <table class="table table-hover">
                     <tr><th>name</th><th>key</th><th>null</th><th>type</th><th>estado</th></tr>
                    '.$this->printDetalleTable($regPT['tablename']).'
                     </table>
                  </div>
               </div>';
         $contador=$contador+1;
      }
   }
   public function printDetalleTable($tabla) {
      $resultadoPDT=  $this->conexion->detalleTabla($tabla);
      while ($regPDT = pg_fetch_assoc($resultadoPDT)) {
         $var=$var."<tr>"
                     . "<td><button class='btn btn-link' onclick=\"cargarPanelConfiguracion('".$tabla.".".$regPDT['column_name']."');\">".$regPDT['column_name']."</button></td>"
                     . "<td>".$this->isPrimaryKey($regPDT['llave'])."</td>"
                     . "<td>".$regPDT['is_nullable']."</td>"
                     . "<td>".$regPDT['data_type']."</td>"
                     . "<td><span style='color: red' class='glyphicon glyphicon-remove-circle'></span></td>"
                  . "</tr>";
      }
      return $var;
   }
   private function isPrimaryKey($cadena){
       if(trim($cadena)!= null){
         return "<span class='glyphicon glyphicon-flash'></span>";
       }
       else{
         return "";
       }
   }
}
?>