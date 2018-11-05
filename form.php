<?php
    require_once("database.php");
    // require_once "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
    <form action="javascript:;" method="post">
        <div>
            姓名: <input type="text" name="name" id="name">
        </div>
        <div>
            EMAIL: <input type="text" name="mail" id="mail">
        </div>
        <div>
            <select name="edu" id="edu">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
        </div>
        <div>
            男<input type="radio" name="gender" value="男" class="gender" checked>
            女<input type="radio" name="gender" value="女" class="gender">
        </div>
        <div>
            吃<input type="checkbox" name="hobby[]" value="吃" class="hobby">
            喝<input type="checkbox" name="hobby[]" value="喝" class="hobby">
            玩<input type="checkbox" name="hobby[]" value="玩" class="hobby">
            樂<input type="checkbox" name="hobby[]" value="樂" class="hobby">
        </div>
        <div>
            意見
            <textarea name="comment" cols="30" rows="10" id="comment"></textarea>
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="button" value="取消" onclick="history.back();">
        </div>
    </form>
    <script>
        $(function(){
            $("form").submit(function(){
                let name = $("#name").val();
                let mail = $("#mail").val();
                let edu = $("#edu").val();
                let gender = $(".gender:checked").val();
                // 作法一 定義空陣列之後透過join轉成字串
                // let hobbyArray = [];

                // 作法二 定義空陣列之後透過php的implode轉成字串
                let hobby =[];
                $(".hobby:checked").each(function(index,item){
                    // console.log(item.value);
                    // console.log($(item).val())
                    // 作法一
                    // hobbyArray.push(item.value);

                    // 作法二
                    hobby.push(item.value);
                }) 
                // let hobby = hobbyArray.join(",");
                let comment = $("#comment").val();

                $.ajax({
                    url: "response.php",
                    method: "post",
                    data: {
                        name: name,
                        mail: mail,
                        edu: edu,
                        gender: gender,
                        hobby: hobby,
                        comment: comment
                    },
                    success:function(){
                        console.log("success");
                        location.href="list.php"
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