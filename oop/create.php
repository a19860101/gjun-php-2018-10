<?php
    include("database.php");
    include("category.php");
    $row = new Categories();
    $cates = $row->show_category_all();
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
        <input type="text" name="title" placeholder="標題">
        <textarea name="content" placeholder="內文"></textarea>
        <select name="c_id">
        <?php foreach($cates as $cate){?>
            <option value="<?php echo $cate["id"]; ?>"><?php echo $cate["title"];?></option>
        <?php }?>
        </select>
        <input type="submit" value="送出">
    </form>
</body>
</html>