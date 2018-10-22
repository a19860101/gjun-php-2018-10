<?php 
    require_once("database.php");

    $sql = "SELECT * FROM `students`";
    $result = mysqli_query($conn,$sql);

    // $row = mysqli_fetch_assoc($result);


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
    <table>
    
    <?php while($row=mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?php echo $row["id"];?></td>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["mail"];?></td>
        <td><?php echo $row["edu"];?></td>
        <td><?php echo $row["gender"];?></td>
        <td><a href="delete.php?id=<?php echo $row["id"];?>">刪除</a></td>
    </tr>    
    
    <?php } ?>
    </table>
</body>
</html>