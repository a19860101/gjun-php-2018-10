<?php
    require_once("../database.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head> 
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <?php
                    if(isset($_SESSION["USER"])){
                ?>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><?php echo $_SESSION["USER"]?>你好</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="logout.php?logout=true">登出</a>
                </li>

                <?php }else{ ?>


                <li class="nav-item active">
                    <a class="nav-link" href="create.php">申請會員</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">會員登入</a>
                </li>

                <?php } ?>
                
            </ul>
        </div>
    </nav>
    <?php
    ?>
</body>

</html>