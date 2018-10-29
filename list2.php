<?php
    require_once("database.php");
    $sql = "SELECT * FROM `students`";
    $result = mysqli_query($conn,$sql);
    while($rows = mysqli_fetch_assoc($result)){
        $row[] = $rows;
        // echo $rows["name"]."<br>";
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
        <?php
            foreach($row as $r){
                echo "<li>".$r["mail"]."</li>";
            }
            foreach($row as $r){
                echo "<li>".$r["name"]."</li>";
            }
            foreach($row as $r){
                echo "<li>".$r["edu"]."</li>";
            }
        ?>
    </ul>
</body> 
</html>