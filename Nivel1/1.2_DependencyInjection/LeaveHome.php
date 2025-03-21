<?php

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

?>