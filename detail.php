<?php
    require_once("database.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM `students` WHERE id=".$id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
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
    <h2>詳細資料</h2>
    <ul>
        <li>姓名:<?php echo $row["name"];?></li>
        <li>EMAIL:<?php echo $row["mail"];?></li>
        <li>學歷:<?php echo $row["edu"];?></li>
        <li>性別:<?php echo $row["gender"];?></li>
        <li>興趣:<?php echo $row["hobby"];?></li>
    </ul>
    <p>
        <?php echo $row["comment"];?>
    </p>
</body>
</html>