<?php include "navbar.php" ?>

<div class="d-flex justify-content-center mt-5"

<?php



$con = mysqli_connect('localhost', 'root');

if (!$con) {
    echo "Errror 404";
}

mysqli_select_db($con, 'envent');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$testQuery = "SELECT * FROM users WHERE email ='$email'";

$rs = mysqli_query($con, $testQuery);

if ($name =="" and $email == "" and $pass="") {
	echo  "<br><br><br><div class=head1>Invalid input</div>";
}

elseif (mysqli_num_rows($rs) > 0)
{
	echo "<br><br><br><div class=h1>Login Id Already Exists</div>";
}

else {
	$query = "INSERT INTO users (username, email, pass) VALUES ('$name', '$email', '$pass');";
    echo "<br><br><br><div class=head1>Your Login ID  $email Created Sucessfully</div>";
	echo "<br><div class=head1>Please Login using your Email ID and Password</div>";
	mysqli_query($con, $query);
    
}
echo "<br><div class=head1><a href=login.php>Login</a></div> <br></div>";

?>



<?php include "footer.php" ?>