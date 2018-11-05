<?php
    require_once("database.php");

    $name = trim($_POST["name"]);
    $mail = trim($_POST["mail"]);
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    // 作法一
    // $hobby = $_POST["hobby"];

    // 作法二
    $hobby = implode(",",$_POST["hobby"]);
    
    // $hobbys = $_POST["hobby"];
    $comment = nl2br($_POST["comment"]);

    $sql = "INSERT INTO `students`(name,mail,edu,gender,hobby,comment)
            VALUES('$name','$mail','$edu','$gender','$hobby','$comment')";
    
    mysqli_query($conn,$sql);

    // header("Location:list.php");

?>