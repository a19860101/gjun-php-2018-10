<?php
    include("database.php");
    include("post.php");
    $id = $_GET["id"];
    $post = new Posts();
    $post->destroy_post($id);
    header("location:index.php");