<?php
//建構子
//magic function

class Cars{
    public $wheels = 4;
    function __construct(){
        echo $this->wheels;
        echo "HELLO";
    }
}
$benz = new Cars();
$mazda = new Cars();

?>