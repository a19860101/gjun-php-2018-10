<?php
    require_once("database.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    $hobby = implode(",",$_POST["hobby"]);
    $comment = $_POST["comment"];

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