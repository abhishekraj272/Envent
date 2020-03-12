<?php

include "navbar.php";

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'envent');


$postId = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = $postId LIMIT 1;";



$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$authorId = $row['author_id'];

$personQuery = "SELECT username FROM users WHERE id = '$authorId' LIMIT 1;";

$authorResult = mysqli_query($con, $personQuery);

$authorName = mysqli_fetch_array($authorResult);

?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="data:image/jpeg;base64,<?php echo base64_encode( $row['image'] ); ?>" alt="First slide">
    </div>
    
  </div>
</div>


<div class="d-flex justify-content-center mt-5">
<div class="post-heading">
            <h1> <?php echo $row['title']; ?> </h1>
            <h2 class="subheading"> <?php echo $row['heading']; ?> </h2>
            <span class="meta">Posted by
              <a href="#"> <?php echo $authorName[0]; ?> </a>
              on <?php echo $row['date']; ?> </span>
    </div>
</div>

<br>
<br><br>
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <?php echo $row['content']; ?>
        </div>
      </div>
    </div>
</article>


<?php include "footer.php" ?>