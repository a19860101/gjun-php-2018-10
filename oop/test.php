<?php
    include("database.php");
    $db = new Database();

    $sql = "SELECT * FROM `posts` LIMIT 5 ";
    $result = $db->connect()->query($sql);
    $row = array();
    while($rows = $result->fetch_assoc()){
        $row[] = $rows;
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
    <ul>
    <?php foreach($row as $r){ ?>
        <li><?php echo $r["title"]; ?></li>
    <?php } ?>
    </ul>
</body>
</html>