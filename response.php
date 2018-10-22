<?php
    require_once("database.php");

    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    $hobby = implode(",",$_POST["hobby"]);
    // $hobbys = $_POST["hobby"];
    $comment = $_POST["comment"];

    $sql = "INSERT INTO `students`(name,mail,edu,gender,hobby,comment)
            VALUES('$name','$mail','$edu','$gender','$hobby','$comment')";
    
    mysqli_query($conn,$sql);

    header("Location:list.php");

?>