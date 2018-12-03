<?php
    class Posts extends Database {
        private $sql;
        function show_all(){
            $this->sql = "SELECT * FROM `posts`";
            $result = $this->connect()->query($this->sql);
            // mysqli_query($conn,$sql);
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            // echo "success";
            return $row;
        }
        function show_post($id){
            $this->sql = "SELECT * FROM `posts` WHERE id = ".$id;
            $result = $this->connect()->query($this->sql);
            $row = $result->fetch_assoc();
            return $row;
        }
    }