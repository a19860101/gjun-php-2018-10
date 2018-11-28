<?php

    class Database {
        private $host = "localhost";
        private $user = "banana";
        private $pw = "banana";
        private $name = "blog";
        // function __construct(){
        //     // 連線
        //     // $conn = mysqli_connect($this->host,$this->user,$this->pw,$this->name);
        //     $conn = @new mysqli($this->host,$this->user,$this->pw,$this->name); 
            
        //     // 如果連線發生錯誤，就產生錯誤碼
        //     if($conn->connect_error){
        //         die($conn->connect_error);
        //     }

        //     // 執行資料庫編碼為utf-8
        //     mysqli_query($conn,"SET NAMES utf8");
        //     $conn->query("SET NAMES utf8");
        //     // echo  "success";  
        //     return $conn;  
        // }
        function connect(){
            // $conn = mysqli_connect($this->host,$this->user,$this->pw,$this->name);
            $conn = @new mysqli($this->host,$this->user,$this->pw,$this->name);
            if($conn->connect_error){
                die($conn->connect_error);
            }
            // mysqli_query($conn,"SET NAMES utf8");
            $conn->query("SET NAMES utf8");
            // echo  "success";
            return $conn;  
        }
    }

    // $db = new Database();
    // $db->connect();