<?php  /// PHP Connection
session_start();

if(!isset($_SESSION["username"])){
    header("location: login.php");
}

$username = $_SESSION["username"];


$host = 'localhost';
$user = 'user';
$password = 'pass1234';
$db ='test';


// $host = 'jbradley46.hosting.eeecs.qub.ac.uk';
// $user = 'jbradley46';
// $password ='JcnFZKzmcht2ggHw';
// $db = 'jbradley46';


$conn = new mysqli($host, $user, $password, $db);
?>