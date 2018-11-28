<?php
    class Cars {
        public $wheels = 4;
        public $colors = "black";
        private $cpu = "INTEL";
        protected $cc = "2400";
        function move(){
            echo $this->wheels = 8;
            echo $this->colors = "white";
            echo $this->cpu;
            echo $this->cc;
        }
    }

    $benz = new Cars();//實例
    // echo $benz->wheels = 6;
    // echo $benz->colors = "red";
    // echo $benz->colors;
    // $benz->move();
    // echo $benz->cc;

    $mazda = new Cars();
    // echo $mazda->wheels = 4;
    // echo $mazda->colors = "Navy";
    
    //繼承
    class Motors extends Cars{
        function t(){
            echo $this->cc;
        }
    }
    $yamaha = new Motors();
    // echo $yamaha->wheels;
    // echo $yamaha->colors;
    // $yamaha->move();
    // echo $yamaha->cc;
    $yamaha->t();
?>