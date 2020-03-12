<?php include "navbar.php"; ?>  


<br>
<br>
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="login.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form action="signup.php" method="post">
<?php echo display_error(); ?>
	<div class="form-row">
		<div class="col form-group">
			<label>Name </label>   
		  	<input type="text" name='username' class="form-control" value="<?php echo $username; ?>">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
	
	<div class="form-group">
		<label>Create password</label>
		<input class="form-control" name="pass1" type="password">
		<label>Retype password</label>
	    <input class="form-control" name="pass2" type="password">
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" name="register_btn" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="login.php">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->

</div> 

<br>
<br>
<br>

<?php include "footer.php" ?>