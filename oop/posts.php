<?php
    require_once("database_oop.php");
    class Posts extends Database {
        function show_all(){
            $sql = "SELECT * FROM `posts`";
            // $result = mysqli_query($conn,$sql);
            $result = $this->connect()->query($sql);
            while($row = mysqli_fetch_assoc($result)){
                echo $row["title"];
            }
        }
    }
    $db = new Database();
    $posts = new Posts();
    $posts->show_all();