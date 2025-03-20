<?php

    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });


    // uso
    $objects = [new wallet(), new Keys(), new BusCard(), new Movil()];

    $SalirdeCasa = new LeaveHome($objects);

    $SalirdeCasa->goOut();

            
     







?>