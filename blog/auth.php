<?php
    require_once("database.php");
    
    $user = $_POST["user"];
    $pw = md5($_POST["pw"]);
    // $pw = $_POST["pw"];
    $sql = "SELECT * FROM `members` WHERE user='$user'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if($pw == $row["pw"]){
        echo "登入成功";

        $_SESSION["USER"] = $row["user"];
        $_SESSION["ID"] = $row["id"];
        $_SESSION["MAIL"] = $row["mail"];
        header("location:index.php");

    }else{
        echo "帳號密碼錯誤";
    }
