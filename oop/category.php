<?php
    class Categories extends Database {
        private $sql ;
        function show_category_all(){
            $this->sql = "SELECT * FROM `categories`";
            $result = $this->connect()->query($this->sql);
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }
        function show_category($id){
            $this->sql = "SELECT * FROM `categories` WHERE id = ".$id;
            $result = $this->connect()->query($this->sql);
            $row = $result->fetch_assoc();
            return $row;
        }
    }