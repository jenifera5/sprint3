<?php 
class Tigger{
     private static ?Tigger $instancia= null;

     private int $contador=0;

     private function __construct(){
        echo "Building  character ...".PHP_EOL;
     }

     public static function getInstance():Tigger {
        if(self::$instancia===null){
           self::$instancia=new Tigger();
        }
        return self::$instancia;
     }


     public function roar(): void{
        echo "Grrr!" .PHP_EOL;
        $this->contador++;
     }
      public function getCounter(): int{
         return $this->contador;
      }

}
?>