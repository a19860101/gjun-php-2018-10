<?php
    include("database.php");
    include("post.php");
    include("category.php");
    // $row = new Posts();
    // $posts = $row->show_all();
    $row = new Pages();
    $posts = $row->post_page(2);

    $cates = new Categories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            margin: auto;
        }
        table,td,th {
            border: 1px solid #999;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>MY BLOG</h1>
    <a href="create.php">新增文章</a>
    <table>
        <tr>
            <th>文章標題</th>
            <th>文章分類</th>
            <th>建立時間</th>
            <th>修改時間</th>
            <th>動作</th>
        </tr>
    <?php foreach($posts as $post){ ?>
        <tr>
            <td><a href="detail.php?id=<?php echo $post["id"];?>"><?php echo $post["title"];?></a></td>
            <td>
                <?php
                    $cate = $cates->show_category($post["c_id"]);
                    echo $cate["title"];
                ?>
            </td>
            <td><?php echo $post["create_at"];?></td>
            <td><?php echo $post["update_at"];?></td>
            <td>
                <a href="delete.php?id=<?php echo $post["id"];?>" onclick="return confirm('確認刪除?')">刪除</a>&nbsp;&nbsp;
                <a href="edit.php?id=<?php echo $post["id"];?>">編輯</a>
            </td>
        </tr>
    <?php } ?>
    </table>
    <?php
        $row->pagination();
    ?>
</body>
</html>