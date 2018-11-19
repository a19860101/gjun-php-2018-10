<?php
    require_once("database.php");
    include("include/header.php");
    include("include/nav.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <form action="store.php" method="post">
            <div class="form-group">
                <label>帳號</label>
                <input type="text" name="user" id="user" class="form-control">

                <?php if(isset($_GET["error"]) && $_GET["error"]==0){ ?>
                    <span style="color:red">帳號重複</span>
                <?php } ?>
            
            </div class="form-group">
            <div class="form-group">
                <label>密碼</label>
                <input type="password" name="pw" id="pw" class="form-control">
            </div>
            <div class="form-group">
                <label>信箱</label>
                <input type="text" name="mail" id="mail" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="申請會員" name="submit" class="btn btn-default">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
            </div>
        </form>
        </div>
    </div>
</div>