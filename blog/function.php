<?php
    function show_all($table){
        global $conn;

        $sql = "SELECT * FROM $table ORDER BY id DESC";
        $result = mysqli_query($conn,$sql);
        $row = array();
        while($rows = mysqli_fetch_assoc($result)){
            $row[] = $rows;
        }
        return $row;
    }
    // function show_cate(){

    //     global $conn;

    //     $sql_cate = "SELECT * FROM `categories`";
    //     $result_cate = mysqli_query($conn,$sql_cate);
    //     $row_cate = array();
    //     while($rows_cate = mysqli_fetch_assoc($result_cate)){
    //         $row_cate[] = $rows_cate;
    //     }
    //     return $row_cate;

    // }
    // function show_posts(){
    //     global $conn;
    //     $sql_post = "SELECT * FROM `posts`";
    //     $result_post = mysqli_query($conn,$sql_post);
    //     $row_post = array();
    //     while($rows_post = mysqli_fetch_assoc($result_post)){
    //         $row_post[] = $rows_post;
    //     }
    //     return $row_post;
    // }
?>