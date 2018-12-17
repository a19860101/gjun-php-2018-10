<?php
    class Products extends Database {
        private $sql;
        function all(){
            $this->sql = "SELECT * FROM `products`";
            $result = $this->connect()->query($this->sql);
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }
    }