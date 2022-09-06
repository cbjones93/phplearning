<?php

class Person
{
    // Properties
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 21;


    
    public static function setDrinkingAge($newDA)
    {
        self::$drinkingAge = $newDA;
    }

    public function getDA(){
        return self::$drinkingAge;
    }
  


    public function  setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = $eyeColor;
    }


    //Constructor
    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    
}
