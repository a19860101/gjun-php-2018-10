<?php
    session_start();
    require("database.php");
    require("products.php");

    if(isset($_GET["clear"])&&$_GET["clear"]==true){
        unset($_SESSION["CART"]);
    }
    
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
            <a href="index.php">繼續購物</a>
            <a href="cart.php?clear=true">清空購物車</a>
        </div>
    <table>
        <tr>
            <th>編號</th>
            <th>商品編號</th>
            <th>品名</th>
            <th>價格</th>
            <!-- <th>動作</th> -->
        </tr>
        <?php
            // echo $_SESSION["CART"];
            // var_dump($_SESSION["CART"]);
            // print_r($_SESSION["CART"]);
            if(isset($_SESSION["CART"])){
                $cart_string = $_SESSION["CART"];
                $cart_array = explode(",",$cart_string);
                // var_dump($cart_array);
                foreach($cart_array as $key => $items){
                    $products = new Products();
                    $product = $products->show($items);
                    foreach($product as $p){
                        echo "<tr>";
                        echo "<td>";
                        echo $key + 1;
                        echo "</td>";
                        echo "<td>".$p["id"]."</td>";
                        echo "<td>".$p["title"]."</td>";
                        echo "<td>".$p["price"]."</td>";
                        echo "</tr>";
                    }
                }
            }else{
                echo "<tr>";
                echo "<td colspan='4'>空空空</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>