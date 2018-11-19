<?php  
    require_once("database.php");  
    include("include/header.php"); 
    include("include/nav.php"); 
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="auth.php">
                <div class="form-group">
                    <label>帳號</label>
                    <input type="text" class="form-control" id="user" placeholder="請輸入帳號" name="user">
                </div>
                <div class="form-group">
                    <label>密碼</label>
                    <input type="password" class="form-control" id="pw" placeholder="請輸入密碼" name="pw">
                </div>
                <input type="submit" class="btn btn-default" value="登入">
            </form>
        </div>
    </div>
</div>