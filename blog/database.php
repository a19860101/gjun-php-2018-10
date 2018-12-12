<?php
    // $db_host = "localhost";
    // $db_user = "banana";
    // $db_pw = "banana";
    // $db_name = "blog";
    $db_host = "localhost";
    $db_user = "id1297491_admin";
    $db_pw = "admin";
    $db_name = "id1297491_blog";
    $conn = @mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("資料庫連線錯誤");

    mysqli_query($conn,"SET NAMES utf8");
    session_start();

    
?>