<?php
        $db_host = "localhost";
        $db_user = "banana";
        $db_pw = "banana";
        $db_name = "gjun";

        $conn = @new mysqli($db_host,$db_user,$db_pw,$db_name);

        // echo $conn->connect_error;

        if($conn->connect_error){
            die($conn->connect_error);
        }






        // $conn = @mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("資料庫連線錯誤");
    
        // mysqli_query($conn,"SET NAMES utf8");

