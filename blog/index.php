<?php  
  require_once("database.php");  
  include("include/header.php"); 
  include("include/nav.php"); 
  include("function.php");

  if(isset($_POST["create_cate"])){
    $title = $_POST["title"];
    $sql_create_cate = "INSERT INTO `categories`(title)VALUES('$title')";
    mysqli_query($conn,$sql_create_cate);
  }
  
  // $cate = show_cate();
  // $categories = "categories";
  $cate = show_all("categories");
  // $posts = show_posts();
  $posts = show_all("posts");

  

  
?>

<!-- Page Content -->
<div class="container">

	<div class="row">

		<!-- Blog Entries Column -->
		<div class="col-md-8">

			<h1 class="my-4">Page Heading
				<small>Secondary Text</small>
			</h1>

			<!-- Blog Post -->
			<?php foreach($posts as $r_post){ ?>

			<div class="card mb-4">

				<?php if($r_post["path"]!=""){ ?>
				<img class="card-img-top" src="images/<?php echo $r_post["path"];?>" alt="Card image cap">
				<?php } ?>

				<div class="card-body">
					<h2 class="card-title">
						<?php echo $r_post["title"];?>
					</h2>
					<p>
						<?php 
							$cid = $r_post["c_id"];
							$sql_c = "SELECT * FROM `categories` WHERE id=".$cid;
							$result_c = mysqli_query($conn,$sql_c);
							$row_c = mysqli_fetch_assoc($result_c);
						?>
						分類: <?php echo $row_c["title"]; ?>
					</p>
					<p class="card-text">
						<?php 
							echo mb_substr($r_post["content"],0,100);
							// mb_substr(字串,開頭,幾個字)
						?>...
					</p>
					<a href="post-detail.php?id=<?php echo $r_post["id"];?>" class="btn btn-primary">繼續閱讀 &rarr;</a>
					<?php
						if(isset($_SESSION["ID"]) && $_SESSION["ID"] == $r_post["m_id"]){
					?>
					<a href="edit.php?id=<?php echo $r_post["id"];?>" class="btn btn-info">編輯</a>
					<?php } ?>
				</div>
				<div class="card-footer text-muted">
					<?php echo $r_post["create_at"]; ?> by
					<span class="text-primary">
						<?php 
							$mid = $r_post["m_id"];
							$sql_m = "SELECT * FROM `members` WHERE id=".$mid;
							$result_m = mysqli_query($conn,$sql_m);
							$row_m = mysqli_fetch_assoc($result_m);
							echo $row_m["user"];
						?>


					</span>
				</div>
			</div>

			<?php } ?>


			<!-- Pagination -->
			<ul class="pagination justify-content-center mb-4">
				<li class="page-item">
					<a class="page-link" href="#">&larr; Older</a>
				</li>
				<li class="page-item disabled">
					<a class="page-link" href="#">Newer &rarr;</a>
				</li>
			</ul>

		</div>

		<!-- Sidebar Widgets Column -->
		<div class="col-md-4">

			<!-- Search Widget -->
			<?php include("include/search.php");?>

			<!-- new categories -->
			<div class="card my-4">
				<h5 class="card-header">新增分類</h5>
				<div class="card-body">
					<div class="input-group">
						<form action="" method="post">
							<input type="text" class="form-control" placeholder="新增分類..." name="title">
							<span class="input-group-btn">
								<!-- <button class="btn btn-secondary" type="button">Go!</button> -->
								<input type="submit" class="btn btn-secondary" value="新增" name="create_cate">
							</span>
						</form>
					</div>
				</div>
			</div>

			<!-- Categories Widget -->
			<div class="card my-4">
				<h5 class="card-header">Categories</h5>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-6">
							<ul class="list-unstyled mb-0">
								<?php
                  foreach($cate as $r_cate){
                ?>
								<li>
									<a href="#">
										<?php echo $r_cate["title"]; ?></a>
								</li>
								<?php } ?>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<!-- Side Widget -->
			<div class="card my-4">
				<h5 class="card-header">Side Widget</h5>
				<div class="card-body">
					You can put anything you want inside of these side widgets. They are easy to use, and feature the new
					Bootstrap 4 card containers!
				</div>
			</div>

		</div>

	</div>
	<!-- /.row -->

</div>
<!-- /.container -->

<?php include("include/footer.php"); ?>