<?php
    require_once("database.php");

    $user = $_POST["user"];
    $pw = md5($_POST["pw"]);
    $mail = $_POST["mail"];

    $sql_check = "SELECT * FROM `members` WHERE user='$user'";
    $result_check = mysqli_query($conn,$sql_check);
    $row_check = mysqli_fetch_assoc($result_check);

    if(isset($row_check["user"])){
        header("location:signup.php");
        echo "帳號重複";
    }else{

        $sql = "INSERT INTO `members` (user,pw,mail,create_at)VALUES('$user','$pw','$mail',NOW())";
        mysqli_query($conn,$sql);
        echo "帳號可使用";
        header("location:index.php");
    }