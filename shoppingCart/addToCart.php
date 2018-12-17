<?php
    session_start();
    if(isset($_SESSION["CART"]) && !empty($_SESSION["CART"])) {
        // echo $_SESSION["CART"];
        $items = $_SESSION["CART"];
        $items = $items.",".$_GET["id"];
        $_SESSION["CART"] = $items;
        echo $_SESSION["CART"];
    }else{
        $items = $_GET["id"];
        $_SESSION["CART"] = $items;
        echo $_SESSION["CART"];
    }
    // session_destroy();

