<?php
    include("database.php");
    include("post.php");
    include("category.php");
    $id = $_GET["id"];
    $posts = new Posts();
    $post = $posts->show_post($id);

    $cates = new Categories();
    $cate = $cates->show_category_all();
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
        <input type="text" name="title" placeholder="標題" value="<?php echo $post["title"];?>">
        <textarea name="content" placeholder="內文"><?php echo $post["content"];?></textarea>
        分類<?php echo $post["c_id"]; ?>
        <select name="c_id">
        <?php foreach($cate as $c){ ?>
            <option value="<?php echo $c["id"];?>"<?php if($post["c_id"]==$c["id"]){ echo "selected";}?> ><?php echo $c["title"];?></option>
        <?php }?>
        </select>
        <input type="submit" value="送出">
    </form>
</body>
</html>