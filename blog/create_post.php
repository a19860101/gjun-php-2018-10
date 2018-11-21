<?php
    require_once("database.php");

    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $m_id = $_SESSION["ID"];
    
    $filename = $_FILES["file"]["name"];
    $size = $_FILES["file"]["size"];
    $tmpname = $_FILES["file"]["tmp_name"];
    $error = $_FILES["file"]["error"];

    $target = "images/".$filename;

    $max_size = 3 *1024*1024;

    $filename_base = pathinfo($filename,PATHINFO_BASENAME);
    $filename_ext = pathinfo($filename,PATHINFO_EXTENSION);
    $filename_name = pathinfo($filename,PATHINFO_FILENAME);
    $filename_dir = pathinfo($filename,PATHINFO_DIRNAME);


    $sql = "INSERT INTO `posts`(title,content,c_id,m_id,create_at,update_at,path)VALUES('$title','$content','$c_id','$m_id',NOW(),NOW(),'$target')";
    // mysqli_query($conn,$sql);
    // header("location:index.php");

    if(move_uploaded_file($tmpname,$target)){
        echo "上傳成功";
        mysqli_query($conn,$sql);
        header("location:index.php");
    }
    
