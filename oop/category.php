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
    }