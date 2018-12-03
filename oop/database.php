<?php
    class Database {
        private $host = "localhost";
        private $user = "banana";
        private $pw = "banana";
        private $db_name = "blog";
        function connect(){
            $conn = @new mysqli($this->host,$this->user,$this->pw,$this->db_name);
            if($conn->connect_error){
                die($conn->connect_error);
            }else {
                // echo "success";
            }
            $conn->query("SET NAMES utf8");
            return $conn;
        }
    }
    // $test = new Database();
    // $test->connect();
