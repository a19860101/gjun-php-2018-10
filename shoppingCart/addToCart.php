<?php
    session_start();
    if(isset($_SESSION["CART"]) && !empty($_SESSION["CART"])) {
        echo "購物車中有商品";
        var_dump($_SESSION["CART"]); 
    }else{
        echo "空的購物車";
    }