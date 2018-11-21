<?php  
  require_once("database.php");  
  include("include/header.php"); 
  include("include/nav.php"); 
  include("function.php");
  $id = $_GET["id"];
  $sql = "SELECT * FROM `posts` WHERE id=".$id;
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title"><?php echo $row["title"];?></h2>
            <p>
                <?php 
					$cid = $row["c_id"];
					$sql_c = "SELECT * FROM `categories` WHERE id=".$cid;
					$result_c = mysqli_query($conn,$sql_c);
					$row_c = mysqli_fetch_assoc($result_c);
				?>  
                分類: <?php echo $row_c["title"];?>
            </p>
            <p class="card-text">
            <?php echo $row["content"];?>
            </p>
            </div>
            <div class="card-footer text-muted">
            <?php echo $row["create_at"];?> by
            <span class="text-primary">
            <?php 
				$mid = $row["m_id"];
				$sql_m = "SELECT * FROM `members` WHERE id=".$mid;
				$result_m = mysqli_query($conn,$sql_m);
				$row_m = mysqli_fetch_assoc($result_m);
				echo $row_m["user"];
			?>
            </span>
            </div>
        </div>
        </div>
    </div>
</div>