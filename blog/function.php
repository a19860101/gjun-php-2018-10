<?php
    function show_cate(){

        global $conn;

        $sql_cate = "SELECT * FROM `categories`";
        $result_cate = mysqli_query($conn,$sql_cate);
        $row_cate = array();
        while($rows_cate = mysqli_fetch_assoc($result_cate)){
            $row_cate[] = $rows_cate;
        }
        return $row_cate;

    }
?>