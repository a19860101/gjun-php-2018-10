<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="上傳">
    </form>
    <div class="error">
    <?php
        if(isset($_GET["error"])){
            switch($_GET["error"]){
                case 1:
                    echo "格式錯誤，請上傳圖檔";
                break;
                case 2:
                    echo "檔案超過3MB";
                    break;
                case 3:
                    echo "請選擇檔案";
            }
        }
    ?>
    </div>
</body>
</html>