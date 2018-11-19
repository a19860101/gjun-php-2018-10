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
        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title"><?php echo $r_post["title"];?></h2>
          <p class="card-text">
          <?php echo $r_post["content"];?>
          </p>
          <a href="#" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          <?php echo $r_post["create_at"]; ?>  by
          <a href="#"><?php echo $r_post["m_id"]; ?></a>
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
      <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

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
                    <a href="#"><?php echo $r_cate["title"]; ?></a>
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