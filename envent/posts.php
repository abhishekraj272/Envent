<?php

include "navbar.php";

$con = mysqli_connect('localhost', 'root', 'pass');

mysqli_select_db($con, 'envent');


$postId = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = $postId LIMIT 1;";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" <?php echo 'src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"'; ?> alt="$row['title']">
    </div>
    <div class="carousel-caption d-none d-md-block">
    <h5><?php echo $row['title'] ?></h5>
    <p><?php echo $row['date'] ?></p>
</div>

  </div>
</div>

<div class="container mt-5">
    <p>
        <?php echo $row['content'] ?>
    </p>
</div>
