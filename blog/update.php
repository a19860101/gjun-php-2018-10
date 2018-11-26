<?php
    require_once("database.php");
    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "UPDATE `posts` SET 
        title       =   '$title',
        content     =   '$content',
        update_at   =   NOW()
        WHERE id=
        ".$id;
    mysqli_query($conn,$sql);
    header("Location:index.php");