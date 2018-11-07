<?php
    session_start();
    if(isset($_POST["submit"])){
        $_SESSION["NAME"] = $_POST["name"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="請輸入姓名">
        <input type="submit" value="輸入" name="submit">
    </form>
    <a href="session-destroy.php">銷毀</a>
    <div>
        <?php 
            if(isset($_SESSION["NAME"])){
                echo $_SESSION["NAME"];
            }
        ?>
    </div>
</body>
</html>