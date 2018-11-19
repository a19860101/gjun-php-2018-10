<?php  
  require_once("database.php");  
  include("include/header.php"); 
  include("include/nav.php"); 
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
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
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