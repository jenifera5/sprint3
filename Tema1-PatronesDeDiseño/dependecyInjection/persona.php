<?php 
require_once 'llaves.php';
require_once 'cartera.php';
require_once 'smartphone.php';
class Persona{

      private Llaves $llaves;
      private Cartera $cartera;
      private Smartphone $smartphone;

      public function __construct(Llaves $llaves,Cartera $cartera,Smartphone $smartphone){
             $this->llaves = $llaves;
             $this->cartera=$cartera;
             $this->smartphone = $smartphone;
             
      }
      public function salir(){
        echo $this->llaves->usar()."<br>";
        echo $this->cartera->usar()."<br>";
        echo $this->smartphone->usar()."<br>";
        echo "🏃🏽‍♀️‍➡️lista para salir";
      }
}
?> 