<?php
    require_once("database.php");
    // require_once "database.php";
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
    <form action="response.php" method="post">
        <div>
            姓名: <input type="text" name="name">
        </div>
        <div>
            EMAIL: <input type="text" name="mail">
        </div>
        <div>
            <select name="edu">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
        </div>
        <div>
            男<input type="radio" name="gender" value="男">
            女<input type="radio" name="gender" value="女">
        </div>
        <div>
            吃<input type="checkbox" name="hobby[]" value="吃">
            喝<input type="checkbox" name="hobby[]" value="喝">
            玩<input type="checkbox" name="hobby[]" value="玩">
            樂<input type="checkbox" name="hobby[]" value="樂">
        </div>
        <div>
            意見
            <textarea name="comment" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="送出">
        </div>
    </form>
</body>
</html>