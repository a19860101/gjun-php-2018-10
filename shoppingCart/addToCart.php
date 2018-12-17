<?php
    session_start();
    if(isset($_SESSION["CART"]) && !empty($_SESSION["CART"])) {
        echo "購物車中有商品";
        var_dump($_SESSION["CART"]); 
    }else{
        $items = $_GET["id"];
        $_SESSION["CART"] = $items;
        echo $_SESSION["CART"];
    }

