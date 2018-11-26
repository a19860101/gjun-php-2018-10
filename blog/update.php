<?php
    require_once("database.php");
    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $cid = $_POST["c_id"];

    if(isset($_POST["path"]) && $_POST["path"]!=""){
        
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
        
        $sql = "UPDATE `posts` SET 
        title       =   '$title',
        content     =   '$content',
        c_id        =   '$cid',
        path        =   '$filename',
        update_at   =   NOW()
        WHERE id=
        ".$id;

        if(move_uploaded_file($tmpname,$target)){
            echo "上傳成功";
            mysqli_query($conn,$sql);
            header("location:index.php");
        }
    }else{
        $sql = "UPDATE `posts` SET 
        title       =   '$title',
        content     =   '$content',
        c_id        =   '$cid',
        update_at   =   NOW()
        WHERE id=
        ".$id;
        mysqli_query($conn,$sql);
        header("Location:index.php");
    }
    