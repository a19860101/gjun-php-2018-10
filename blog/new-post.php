<?php  
  require_once("database.php");  
  include("include/header.php"); 
  include("include/nav.php"); 
  include("function.php");
  $cate = show_cate();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <form>
            <div class="form-group">
                <label>文章標題</label>
                <input type="text" class="form-control" id="title" placeholder="請輸入文章標題" name="title">
            </div>
            <label>內文</label>
            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
            
            <label>文章分類</label>
            <select class="form-control">
            <?php foreach($cate as $r_cate){?>
                <option value=""><?php echo $r_cate["title"];?></option>
            <?php } ?>
            </select>

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <input type="submit" class="btn btn-default" value="新增文章">
        </form>
        </div>
    </div>
</div>
</body>
</html>