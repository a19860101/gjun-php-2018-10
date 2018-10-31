<?php
    require_once("database.php");

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

    echo $error;

    $sql = "INSERT INTO `gallery`(name,size)VALUES('$filename','$size')";

    // echo $filename_base."<br>";
    // echo $filename_ext."<br>";
    // echo $filename_name."<br>";
    // echo $filename_dir."<br>";

    // if($filename_ext == "jpg" || $filename_ext=="png" || $filename_ext=="gif"){
    //     echo "success";
    // }else{
    //     echo "error";
    // }

    if($filename_ext != "jpg" && $filename_ext!="png" && $filename_ext!="gif"){
        $up = 1;
    }

    if($size > $max_size){
        $up = 2;
    }

    if($error == 4){
        $up = 3;
    }
    if(isset($up)){
        switch($up){
            case 1:
                header("location:file.php?error=1");
                break;
            case 2:
                header("location:file.php?error=2");
                break;
            case 3:
                header("location:file.php?error=3");
        }
    }else{
        if(move_uploaded_file($tmpname,$target)){
            echo "上傳成功";
            mysqli_query($conn,$sql);
            header("location:gallery-list.php");
        }
    }

    // echo $size / 1024;

    // if($error == 0){
    //     if(move_uploaded_file($tmpname,$target)){
    //         echo "上傳成功";
    //     }else{
    //         echo "上傳錯誤";
    //     }
    // }else{
    //     echo "上傳失敗";
    // }

    ?>
