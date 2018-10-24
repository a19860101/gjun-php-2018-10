<?php 
    require_once("database.php");

    $sql = "SELECT * FROM `students`";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){
        $sts[] = $row; 
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,td,th {
            border-collapse: collapse;
            border: 1px solid #333;
            padding: 10px
        }
    </style>
</head>
<body>
    <a href="form.php">新增</a>
    <div>
        <?php 
            foreach($sts as $st){
                echo $st["name"];
            }
        ?>
    </div>
</body>
</html>