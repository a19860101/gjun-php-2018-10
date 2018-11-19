<?php  
    require_once("database.php");  
    include("include/header.php"); 
    include("include/nav.php"); 
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">帳號</label>
                    <input type="email" class="form-control" id="user" placeholder="請輸入帳號" name="user">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">密碼</label>
                    <input type="password" class="form-control" id="pw" placeholder="請輸入密碼" name="pw">
                </div>
                <input type="submit" class="btn btn-default" value="登入">
            </form>
        </div>
    </div>
</div>