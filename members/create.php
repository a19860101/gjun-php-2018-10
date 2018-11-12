<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
    <form action="javascript:;" method="post">
        <div>
            <label>帳號</label>
            <input type="text" name="user" id="user">

            <?php if(isset($_GET["error"]) && $_GET["error"]==0){ ?>
                <span style="color:red">帳號重複</span>
            <?php } ?>
        
        </div>
        <div>
            <label>密碼</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div>
            <label>信箱</label>
            <input type="text" name="mail" id="mail">
        </div>
        <div>
            <input type="submit" value="申請會員" name="submit">
            <input type="button" value="取消" onclick="history.back()">
        </div>
    </form>

    <script>
        $(function(){
            $("form").submit(function(){
                let user = $("#user").val();
                let pw = $("#pw").val();
                let mail = $("#mail").val();
                $.ajax({
                    url: "store.php",
                    data:{
                        user:user,
                        pw:pw,
                        mail:mail
                    },
                    type:"post",
                    success:function(event){
                        console.log(event);
                        if(event=="帳號重複"){
                            location.href="create.php?error=0";
                        }
                        if(event == "帳號可使用"){
                            location.href="index.php";
                        }
                    },
                    error:function(){
                        console.log("error");
                    }
                })
            })
        })
    </script>
</body>
</html>