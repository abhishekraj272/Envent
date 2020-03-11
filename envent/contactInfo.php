<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection Successfull";
}

else {
    echo "No Connection";
}

mysqli_select_db($con, 'envent');

$email = $_POST['email'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$phone = $_POST['phone'];

$query = "INSERT INTO contact (name, email, comment, phone) VALUES ('$name', '$email', '$comment', '$phone');";

mysqli_query($con, $query);

echo "\n";
echo $query;

?>