<?php
    class Posts extends Database {
        private $sql;
        function show_all(){
            $this->sql = "SELECT * FROM `posts`";
            $result = $this->connect()->query($this->sql);
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }
        function show_post($id){
            $this->sql = "SELECT * FROM `posts` WHERE id = ".$id;
            $result = $this->connect()->query($this->sql);
            $row = $result->fetch_assoc();
            return $row;
        }
        function store_post($title,$content,$c_id,$m_id){
            $this->sql = "INSERT INTO `posts`(title,content,create_at,update_at,c_id,m_id)
                          VALUES('$title','$content',NOW(),NOW(),'$c_id','$m_id')";
            $result = $this->connect()->query($this->sql);
        }
    }