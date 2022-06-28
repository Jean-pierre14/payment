<?php
    class Car {
        public $name;
        function __construct(){
            echo "Hello world";
        }
        function get_name(){
            return $this->name;
        }
    }
    $hello = new Car('Grace bisimwa');
?>