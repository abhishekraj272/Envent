<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root');
mysqli_select_db($db, 'envent');
// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

if (isset($_POST['login_btn'])) {
	login();
}


if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}


// REGISTER USER
function register() {
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['pass1']);
	$password_2  =  e($_POST['pass2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = $password_1;
		
		$query = "INSERT INTO users (username, email, pass) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $query);

		// get id of the created user
		$logged_in_user_id = mysqli_insert_id($db);

		$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
		$_SESSION['success']  = "You are now logged in";
		header('location: index.php');
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
    }
    echo "<br>";
    echo "<br>";
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$email = e($_POST['email']);
	$password = e($_POST['pass']);

	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = $password;

		$query = "SELECT * FROM users WHERE email='$email' AND pass='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
            $row = mysqli_fetch_array($results);
            $_SESSION['user'] = getUserById($row['id']);;
            header('location: index.php');
        
        }
        else {
			array_push($errors, "Wrong email/password combination");
		}
	}
}