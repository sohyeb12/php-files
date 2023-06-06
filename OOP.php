<?php

class Str
{
    public $text;
    public function __construct($txt=''){
        $this->text = $txt;
    }


    public function length(){
        return strlen($this->text);
    }

    public function equal(string $temp){
        if($temp == $this->text)
            return True;
        else
            return FALSE;    
        }

    public static function ret_func(){
        return self::$text; // because $text is not static propersities
    }
}

class Person{
    const YEAR = 2032;
    public $name;
    public static $country;

    public function getName(){
        $this->name = $name;
    }

    public static function getCountry(){
        self::$country = $country;
    }
}


$person = new Person;
$person2 = new Person;

$person->name = 'moahammed';
$person::$country = "Palestine";

$person2->name = 'Suhuib';
$person::$country = "Jordan";

// echo $person::$country."<br>";
// echo Person::$country."<br>";

$person3 = $person;
$person4 = &$person;
$person5 = clone $person;

$person3->name = "mohammed";
$person4->name = "jarwan";
$person5->name = "fatma"; 

$person = null;

echo "<pre>";
// var_dump($person,$person2,$person3,$person4,$person5);


$object = new Str('Sohyeb11');
echo $object->length() . "<br>";

if ($object->equal('Jarwan'))
    echo "equal<br>";
else 
    echo "not equal<br>";

var_dump($object);
// echo $object->ret_func();





