<?php
    include("database.php");
    include("post.php");
    $row = new Posts();
    $posts = $row->show_all();
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
    <h1>MY BLOG</h1>
    <ul>
    <?php foreach($posts as $post){ ?>
        <li>
           <a href="detail.php?id=<?php echo $post["id"];?>"><?php echo $post["title"];?></a>
        </li>
    <?php } ?>
    </ul>
</body>
</html>