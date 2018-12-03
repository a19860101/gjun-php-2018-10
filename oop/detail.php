<?php
    include("database.php");
    include("post.php");
    $id = $_GET["id"];

    $row = new Posts();
    $post = $row->show_post($id);
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
    <h2><?php echo $post["title"];?></h2>
    <p>
        <?php echo $post["content"];?>
    </p>
    <div>作者:<?php echo $post["m_id"];?></div>
    <div>分類:<?php echo $post["c_id"];?></div>
    <div>建立時間:<?php echo $post["create_at"];?></div>
    <div>修改時間:<?php echo $post["update_at"];?></div>
    
</body>
</html>