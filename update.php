<?php
    require_once("database.php");
    $name = trim($_POST["name"]);
    $mail = trim($_POST["mail"]);
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    $hobby = implode(",",$_POST["hobby"]);
    $comment = nl2br($_POST["comment"]);

    $id = $_POST["id"];

    $sql = "UPDATE `students` 
            SET 
            name='$name',
            mail='$mail',
            edu='$edu',
            gender='$gender',
            hobby='$hobby',
            comment='$comment'
            WHERE id=".$id;
    mysqli_query($conn,$sql);
    header("Location:list.php");
?>