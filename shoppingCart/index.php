<?php
    session_start();
    require("database.php");
    require("products.php");

    $rows = new Products();
    $products = $rows->all();
    // var_dump($products);
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
            border:1px solid #aaa;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="#">查看購物車</a>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>編號</th>
                <th>品名</th>
                <th>價格</th>
                <th>動作</th>
            </tr>
        <?php 
            foreach($products as $product){
        ?>
            <tr>
                <td><?php echo $product["id"];?></td>
                <td><?php echo $product["title"];?></td>
                <td><?php echo $product["price"];?></td>
                <td><a href="addToCart.php?id=<?php echo $product["id"];?>">加入購物車</a></td>
            </tr>
        <?php
            }
        ?>
        </table>
    </div>
</body>
</html>