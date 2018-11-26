<?php
    require_once("database.php");
    $id = $_GET["id"];
    $path = $_GET["path"];
    $sql = "UPDATE `posts` SET path='' WHERE id=".$id;
    unlink("images/".$path);
    mysqli_query($conn,$sql);
    header("location:edit.php?id=".$id);