<?php
    // pasos
    class TakeTheDirtyDishes {
        public function takeTheDirtyDishes() : string {
            return "Coja la vajilla";
        }
    }
    class PutSoap {
        public function putSoap() : string {
            return "Eche el jabon";
        }
    }
    class ClarifyWell {
        public function claryFiwell() : string {
            return "Aclare con abundante agua";
        }
    }

    class DrainTheDisher {
        public function drainTheDisher() : string {
            return "Seque la vajilla";
        }
    }

    // facade
    class Dishwasher{
        public function washDishes(){
            $take = new TakeTheDirtyDishes();
            $put = new PutSoap();
            $clarify = new ClarifyWell();
            $drain = new DrainTheDisher();
            echo "Pon la pastilla de jabón y dale al boton para que el lavavajillas: \n";
            echo $take->takeTheDirtyDishes() . PHP_EOL;
            echo $put->putSoap() . PHP_EOL;
            echo $clarify->claryFiwell() . PHP_EOL;
            echo $drain->drainTheDisher() . PHP_EOL;
        }
    }

    $washing = new Dishwasher();
    $washing->washDishes();

?>