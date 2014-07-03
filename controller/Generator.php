<?php
/**
 *
 * @author milver
 */
class Generator {
   
   public function __construct() {
      
   }
   public function generarNombres($nombres,$apellidos) {
      $resultado;
      $contador=0;
      for ($ind = 0; $ind < count($nombres); $ind++) {
         for ($ap = 0; $ap < count($apellidos); $ap++) {
            $resultado[$contador]=$nombres[$ind][$ap];
            $contador=$contador+1;
         }
      }
      return $resultado;
   }
   public function generarNombresRequerido($nombres,$modo,$cantidad){
      $resultado;
      $contador=0;$indice=0;
      if ($modo=="SECUENCIAL") {
         while ($contador<$cantidad) {
            if ($indice>  count($nombres)) {
               $indice=0;
            }
            $resultado[$contador]=$nombres[$indice];
            $indice=$indice+1;
            $contador=$contador+1;
         }
      }
      else{
         while ($contador<$cantidad) {
            if ($indice>  count($nombres)) {
               $indice=0;
            }
            $resultado[$contador]=$nombres[$indice];
            $indice=$indice+rand(0, 10);
            $contador=$contador+1;
         }
      }
   }
   //por ahora formato fecha 2014-06-01
   public function generarFechas($fechaI,$fechaF) {
      $fechas;
      $cantidad=0;
      $fechaInicio=  split($fechaI, "-");
      $fechaFinal= split($fechaF, "-");
      $aniomeses=  $this->generarFechasAnioMes($fechaInicio[0], $fechaFinal[0], $fechaInicio[1], $fechaFinal[1]);
      for ($index = 0; $index<  count($aniomeses); $index++) {
         for ($ind = 0; $ind < 30; $ind++) {
            $fechas[$cantidad]=$aniomeses[$index]."-".$ind;
            $cantidad=$cantidad+1;
         }
      }
   }
   private function generarFechasAnioMes($anioI,$anioF,$mesI,$mesF){
      $resultado;
      $ind=0;
      while ($anioI<$anioF) {
         while ($mesI<=12) {
            $resultado[$ind]=$anioI."-".$mesI;
            $mesI=$mesI+1;
            $ind=$ind+1;
         }
      }
      return $resultado;
   }
}






