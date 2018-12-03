<?php
    class Users extends Database {
        private $sql ;
        function show_user_all(){
            $this->sql = "SELECT * FROM `members`";
            $result = $this->connect()->query($this->sql);
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }
        function show_user($id){
            $this->sql = "SELECT * FROM `members` WHERE id = ".$id;
            $result = $this->connect()->query($this->sql);
            $row = $result->fetch_assoc();
            return $row;
        }
    }