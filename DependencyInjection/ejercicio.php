<?php
    
    // crear la interface
    interface PrepareToLeaveHome {
        public function review();
    }

    // Crear las dependencias
    class Wallet implements PrepareToLeaveHome {
        public function review()
        {
            return "Cartera cogida";
        }
    }

    class Keys implements PrepareToLeaveHome {
        public function review()
        {
            return "Llaves encontradas";
        }
    }

    class BusCard implements PrepareToLeaveHome {
        public function review()
        {
            return "Tarjeta del autobus, ok";
        }
    }

    class Movil implements PrepareToLeaveHome {
        public function review()
        {
            return "móvil listo y con bateria";
        }
    }

    // La clase salir de casa con las independencias
    class LeaveHome {
        // atributo
        private $objects = [];
        // constructor
        public function __construct(array $objects)
        {
            foreach ($objects as $object) {
                if($object instanceof PrepareToLeaveHome){
                    $this->objects[] = $object;
                }
            }
        }
        // metodo salir
        public function goOut(){
            foreach($this->objects as $object){
                echo $object->review() . PHP_EOL;
            }
        }
    }

    // uso
    $objects = [new wallet(), new Keys(), new BusCard(), new Movil()];

    $SalirdeCasa = new LeaveHome($objects);

    $SalirdeCasa->goOut();

            
     







?>