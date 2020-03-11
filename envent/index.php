<?php

include "navbar.php";

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'envent');

if(!$con){
    echo "Error";
}

$query = "SELECT * FROM posts;";

$result = mysqli_query($con, $query);


while ($row = mysqli_fetch_array($result)) {
  echo '
  <div class="container">
  <div class="mt-5 mb-5">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">'.$row['title'].'</h5>
        <p class="card-text"> '.$row['heading'].' </p>
        <a href="posts.php/?id='.$row['id'].'" class="btn btn-primary">Browse</a>
    </div>
</div>
  </div>
</div>  
  ';
}

include 'footer.php';

?>