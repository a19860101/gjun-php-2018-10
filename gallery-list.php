<?php
    require_once("database.php");
    $sql = "SELECT * FROM `gallery`";
    $result = mysqli_query($conn,$sql);

    $nums = mysqli_num_rows($result);//目前共有幾筆資料
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
        <a href="file.php">上傳圖片</a>
    </div>

    <?php if($nums == 0) { ?>
        <div>目前尚無資料</div>
    <?php }else{ ?>

    <div>
        目前共有 <?php echo $nums;?> 筆資料
    </div>

    <table>
        <?php while($row = mysqli_fetch_assoc($result)){?>
            <tr>
                <td>
                <?php echo $row["id"];?>
                </td>
                <td>
                <a href="gallery.php?id=<?php echo $row["id"];?>">
                    <?php echo $row["name"];?>
                </a>
                </td>
                <td>
                    <a href="gallery-delete.php?id=<?php echo $row["id"];?>&name=<?php echo $row["name"];?>" onclick="return confirm('確認刪除?')">刪除圖片</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <?php } ?>
</body>
</html>