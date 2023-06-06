<?php 

trait A {
    public function hello(){
        echo "A";
    }
}

trait b {
    public function hello(){
        echo "B";
    }
}

class Hello{
    use B;
}

$var = new Hello();
// $var->hello();
