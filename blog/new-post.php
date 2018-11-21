<?php  
  require_once("database.php");  
  include("include/header.php"); 
  include("include/nav.php"); 
  include("function.php");
  $cate = show_all("categories");
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <form method="post" action="create_post.php"  enctype="multipart/form-data">
            <div class="form-group">
                <label>文章標題</label>
                <input type="text" class="form-control" id="title" placeholder="請輸入文章標題" name="title">
            </div>
            <label>內文</label>
            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
            
            <label>文章分類</label>
            <select class="form-control" name="c_id">
            <?php foreach($cate as $r_cate){?>
                <option value="<?php echo $r_cate["id"];?>"><?php echo $r_cate["title"];?></option>
            <?php } ?>
            </select>

            <div class="form-group">
                <label>上傳圖片</label>
                <input type="file" id="file" name="file">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
            </div>
            <input type="submit" class="btn btn-default" value="新增文章">
        </form>
        </div>
    </div>
</div>
</body>
</html>