<?php
session_start();

$host = 'localhost';
$user = 'user';
$password = 'pass1234';
$db ='test';

$conn = new mysqli($host, $user, $password, $db);


$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

$sql ="SELECT password, type FROM users WHERE username = '$username'";
$result = $conn->query($sql);
$row = $result->fetch_object();



 if (!is_null($row) && password_verify($password, $row -> {"password"})){

    $_SESSION["username"] = $username;
    $_SESSION["type"] = $row->{"type"};
     
    header("location: dashboard.php");


} else {

    echo "<script>alert('invalid login'); window.location.href='login.php'</script>";
    
}



?>