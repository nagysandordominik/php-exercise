<?php

class Person {
    private $name;
    private $age;    
    private $eyeColor;

    public function __construct($name, $age, $eyeColor){
        $this->name = $name;
        $this->age = $age;
        $this->eyeColor = $eyeColor;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
     
}
?>