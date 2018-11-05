<?php 
    require_once("database.php");

    $sql = "SELECT * FROM `students`";
    $result = mysqli_query($conn,$sql);

    // $row = mysqli_fetch_assoc($result);
    session_start();
    echo $_SESSION["NAME"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <style>
        table,td,th {
            border-collapse: collapse;
            border: 1px solid #333;
            padding: 10px
        }
    </style>
</head>
<body>
    <a href="form.php">新增</a>
    <table>
    
    <?php while($row=mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?php echo $row["id"];?></td>
        <td>
            <a href="detail.php?id=<?php echo $row["id"];?>"><?php echo $row["name"];?></a>
        </td>
        <td><a href="edit.php?id=<?php echo $row["id"];?>">編輯</a></td>
        <!-- <td><a href="delete.php?id=<?php //echo $row["id"];?>" class="del">刪除</a></td> -->
        <td><a href="javascript:;" class="del" data-id="<?php echo $row["id"];?>">刪除</a></td>
    </tr>    
    
    <?php } ?>
    </table>
    <script>
        $(function(){
            $(".del").click(function(){
                // console.log("click");
                let el = $(this);
                let id = el.data("id");
                // console.log(id);
                $.ajax({
                    url:"delete.php",
                    method: "get",
                    data: {
                        id:id
                    },
                    beforeSend:function(){
                       el.parents("tr").fadeOut();
                    },
                    success:function(){
                        console.log("success");
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