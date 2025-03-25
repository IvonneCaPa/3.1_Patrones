<?php

    class Tigger{
        //Crear propiedad estática que almacenará la unica instancia de la clase
        private static $instance = null;
        private $count = 0;

        //Constructor privado para evitar la clonacion
        private function __construct()
        {
            echo "Building character..." . PHP_EOL;
        }

        //método estático para obtener la instancia
        public static function getInstance(){
            if(self::$instance===null){
                self::$instance = new Tigger();
            }
            return self::$instance;
        }
        
        // método para evitar la clonacion
       public function __clone() {
        trigger_error("Operación Invalida: No puedes clonar una instancia de ". get_class($this) ." class.", E_USER_ERROR );
        }   
    
        // método para evitar la deserialización
        public function __wakeup() {
        trigger_error("No puedes deserializar una instancia de ". get_class($this) ." class.");
        }

        // método para evitar la serialización
        public function __sleep() {
            trigger_error("No puedes deserializar una instancia de ". get_class($this) ." class.");
        }   

        // método rugir y contador
        public function roar(int $roars) {
            for($i=1; $i<=$roars; $i++){
                echo "Grrr!" . PHP_EOL;
                ++$this->count;
            }       
        }

        // devuelve cantidad de rugidos
        public function getCounter(){
            return $this->count;
        }

    }

    $instance = Tigger::getInstance();
    $instance->roar(12);
    echo "Tigger ha rugido " . $instance->getCounter() . PHP_EOL;

  
?>