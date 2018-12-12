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
        function destroy_post($id){
            $this->sql = "DELETE FROM `posts` WHERE id = ".$id;
            $result = $this->connect()->query($this->sql);
        }
        function update_post($id,$title,$content,$c_id){
            $this->sql = "UPDATE `posts` SET 
            title='$title',
            content='$content',
            update_at=NOW(),
            c_id='$c_id' 
            WHERE id =".$id;
            $result = $this->connect()->query($this->sql);
        }
    }
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
            $result = $this->connect()->query($this->sql);

            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }
        function pagination(){
            $page = $this->page;
            $prev = $this->page - 1;
            $next = $this->page + 1;
            $total = $this->pages;
            $webpage = $_SERVER["PHP_SELF"];
            echo "<div class='pagination'>";
            if($page!=1){
                echo "<a href='{$webpage}?page=1'>最前頁</a>";
                echo "<a href='{$webpage}?page={$prev}'>上一頁</a>";
            }
            for($i = 0;$i<$total;$i++){
                $p = $i+1;
                // echo "<a href='{$webpage}?page={$p}'>{$p}</a>";
                if($p == $page){
                    echo "<span style='font-size:1.5em'>{$p}</span>";
                }else{
                    echo "<a href='{$webpage}?page={$p}'>{$p}</a>";
                }
            }
            if($page!=$total){
                echo "<a href='{$webpage}?page={$next}'>下一頁</a>";
                echo "<a href='{$webpage}?page={$total}'>最後頁</a>";
            }
            echo "</div>";
        }
    }

