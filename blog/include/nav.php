<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php if(isset($_SESSION["USER"])){?>

                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $_SESSION["USER"]; ?></a>
                </li>

                <?php } ?>

                <li class="nav-item active">
                    <a class="nav-link" href="index.php">首頁</a>
                </li>
               
                <?php if(isset($_SESSION["USER"])){?>

                <li class="nav-item">
                    <a class="nav-link" href="new-post.php">新增文章</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php?logout=true">登出</a>
                </li>

                <?php }else{ ?>
                
                <li class="nav-item">
                    <a class="nav-link" href="login.php">登入</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">申請會員</a>
                </li>

                <?php } ?>

            </ul>
        </div>
    </div>
</nav>