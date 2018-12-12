<?php
    class Pages extends Posts {
        public $nums;//共幾筆資料
        public $pages;//共幾頁
        public $page;//當前頁碼
        function post_page($per){
            $this->sql = "SELECT * FROM `posts`";
            $result = $this->connect()->query($this->sql);
            $this->nums = $result->num_rows;
            $this->pages = ceil($this->nums / $per);

            if(!isset($_GET["page"])){
                $this->page = 1;
            }else{
                $this->page = $_GET["page"];
            }
            $start = ($this->page - 1) * $per;
            $this->sql = "SELECT * FROM `posts` LIMIT $start,$per";

            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }
    }