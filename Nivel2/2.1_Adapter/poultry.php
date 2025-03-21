<?php

    interface DuckFlights{
        public function quack();
        public function fly();
    }

    class Duck {
        public function quack() {
            echo "Quack \n";
        }

        public function fly() {
            echo "I'm flying \n";
        }
    }

    class Turkey {
        public function gobble() {
            echo "Gobble gobble \n";
        }

        public function fly() {
        echo "I'm flying a short distance \n";
        }
    }

    class TurkeyAdapter implements DuckFlights
    {
        private $turkey;
        public function __construct(Turkey $turkey)
        {
            $this->turkey = $turkey;
        }
        public function quack(){
            echo "Gobble gobble \n";
        }
        public function fly(){
            for($i=0; $i < 5; $i++){
                echo "I'm flying a short distance\n";
            }
        }
    }

?>