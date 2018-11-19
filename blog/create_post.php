<?php
    require_once("database.php");

    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $m_id = $_SESSION["ID"];

    $sql = "INSERT INTO `posts`(title,content,c_id,m_id,create_at,update_at)VALUES('$title','$content','$c_id','$m_id',NOW(),NOW())";
    mysqli_query($conn,$sql);
    header("location:index.php");
