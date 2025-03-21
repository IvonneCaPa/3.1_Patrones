<?php

    // La dependencia Wallet que se inyectara luego
    class Wallet implements PrepareToLeaveHome {
        public function review()
        {
            return "Cartera cogida";
        }
    }

?>