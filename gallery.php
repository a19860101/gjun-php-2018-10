<?php
    require_once("database.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM `gallery` WHERE id = ".$id;
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
    <div>
        <img src="images/<?php echo $row["name"];?>" width="600">
    </div>
</body>
</html>