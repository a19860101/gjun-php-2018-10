<?php
    require_once("../database.php");
    $user = $_POST["user"];
    $pw = $_POST["pw"];
    $mail = $_POST["mail"];

    $sql = "INSERT INTO `members` (user,pw,mail,create_at)VALUES('$user','$pw','$mail',NOW())";
    mysqli_query($conn,$sql);

    header("location:index.php");