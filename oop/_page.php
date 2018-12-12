<?php
    include("database.php");
    $db = new Database();
    $sql = "SELECT * FROM `posts`";
    $result =$db->connect()->query($sql);
    $nums =$result->num_rows; // 共幾筆資料
    $per = 3 ;// 每頁幾筆資料
    $pages = ceil($nums / $per) ; //共幾頁

    if(!isset($_GET["page"])){
        $page = 1;
    }else {
        $page = $_GET["page"];
    }
    $start = ($page - 1) * $per;
    $sql_p = "SELECT * FROM `posts` LIMIT $start,$per ";
    $result = $db->connect()->query($sql_p);

    $row = array();
    while($rows = $result->fetch_assoc()){
        $row[] = $rows;
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
    <div>目前第<?php echo $page; ?>頁</div>
    <ul>
    <?php foreach($row as $r){ ?>
        <li><?php echo $r["title"];?></li>
    <?php } ?>
    </ul>

    <?php if($page!=1){ ?>
        
        <a href="?page=1">最前頁</a>
        <a href="?page=<?php echo $page - 1;?>">上一頁</a>
    <?php } ?>
    <?php 
        for($i=0;$i<$pages;$i++){
        // for($i=1;$i<=$pages;$i++){
            
    ?>
        <a href="?page=<?php echo $i+1;?>"><?php echo $i+1; ?></a>
        <a href="?page=<?php #echo $i;?>"><?php #echo $i; ?></a>
    <?php
        }
    ?>
    <?php if($page!=$pages) { ?>
        <a href="?page=<?php echo $page + 1;?>">下一頁</a>
        <a href="?page=<?php echo $pages;?>">最末頁</a>
    <?php } ?>
</body>
</html>