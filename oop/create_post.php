<?php
    include("database.php");
    include("post.php");
    include("category.php");

    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $m_id = 2;

    $user = new Posts();
    $user->store_post($title,$content,$c_id,$m_id);
    header("Location:index.php");
