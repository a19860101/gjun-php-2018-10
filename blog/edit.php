<?php  
  require_once("database.php");  
  include("include/header.php"); 
  include("include/nav.php"); 
  include("function.php");
  $cate = show_all("categories");

  $id = $_GET["id"];
  $sql = "SELECT * FROM `posts` WHERE id = ".$id;
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <form method="post" action="update.php"  enctype="multipart/form-data">
            <div class="form-group">
                <label>文章標題</label>
                <input type="text" class="form-control" id="title" placeholder="請輸入文章標題" name="title" value="<?php echo $row["title"];?>">
            </div>
            <label>內文</label>
            <textarea class="form-control" rows="3" id="content" name="content"><?php echo $row["content"];?></textarea>
            
            <label>文章分類</label>
            <select class="form-control" name="c_id">
            <?php foreach($cate as $r_cate){?>
                <option value="<?php echo $r_cate["id"];?>"<?php if($row["c_id"]==$r_cate["id"]){echo "selected";}?>><?php echo $r_cate["title"];?></option>
            <?php } ?>
            </select>


            <?php if($row["path"]==""){ ?>
            <div class="form-group">
                <label>上傳圖片</label>
                <input type="file" id="file" name="file">
            </div>
            <?php }else{ ?>
            <br>
            <div><img src="images/<?php echo $row["path"];?>" alt="" width="200"></div>
            <a href="delete-photo.php?id=<?php echo $row["id"];?>&path=<?php echo $row["path"];?>">刪除</a>
            <br>
            <?php } ?>
            <input type="hidden" value="<?php echo $row["id"];?>" name="id">
            <input type="submit" class="btn btn-default" value="編輯文章">
        </form>
        </div>
    </div>
</div>
</body>
</html>