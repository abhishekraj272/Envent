<?php include "navbar.php" ?>

<br>
<br>
<br>
<br>
<br>

<div id="form" class="d-flex justify-content-center mt-5"> 
<form method="post" action="login.php">
<?php echo display_error(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
  </div>

  <small id="signUp" class="form-text text-muted">Not registered yet? <a href="signup.php">Sign Up</a> </small>
  <br>
  <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
</form>
</div>


<?php include "footer.php" ?>