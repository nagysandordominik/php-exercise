<?php

    class Person
    {

        private $name;
        private $age;
        private $eyeColor;

        public static $drinkingAge = 18;

        // public function __construct($name, $age, $eyeColor)
        // {
        //     $this->name = $name;
        //     $this->age = $age;
        //     $this->eyeColor = $eyeColor;
        // }

        // public function getDrinkingAge()
        // {
        //     return self::$drinkingAge;
        // }

        public function setName(string $newName)
        {
            $this->name = $newName;
        }

        // public function __destruct(){
        //     echo "A " . $this->name . " nevű személy objektuma megsemmisült!";
        // }
        public function getName()
        {
            return $this->name;
        }
        // public function getAge()
        // {
        //     return $this->age;
        // }
        // public function getEyeColor()
        // {
        //     return $this->eyeColor;
        // }

        // public static function setDrinkingAge($newDA)
        // {
        //     self::$drinkingAge = 21;
        // }

    }

