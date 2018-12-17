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
        function show($id){
            $this->sql = "SELECT * FROM `products` WHERE id=".$id;
            $result = $this->connect()->query($this->sql);
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }
    }