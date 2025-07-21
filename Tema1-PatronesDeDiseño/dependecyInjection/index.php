<?php 
require_once 'persona.php';
    $yo = new Persona(new Llaves(),new Cartera(),new Smartphone);
    $yo -> salir();

?>