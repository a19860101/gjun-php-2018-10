<?php
    require_once("database.php");
    $id = $_GET["id"];
    $name = $_GET["name"];
    $sql = "DELETE FROM `gallery` WHERE id = ".$id;
    unlink("images/".$name);    
    mysqli_query($conn,$sql);
    header("location:gallery-list.php");