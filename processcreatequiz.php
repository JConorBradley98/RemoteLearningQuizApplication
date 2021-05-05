<?php

/// Connection Code
include_once ("base.php");

$conn = new mysqli($host, $user, $password, $db);

$title = mysqli_real_escape_string($conn, $_POST["title"]);
$description = mysqli_real_escape_string($conn, $_POST["description"]);
$image = mysqli_real_escape_string($conn, $_POST["image"]);
$counter = 0;
$json ="[";
while(isset($_POST["question".$counter])){
    $question = mysqli_real_escape_string($conn, $_POST["question".$counter]);
    $correctanswer = mysqli_real_escape_string($conn, $_POST["correctanswer".$counter]);
    
    $answers =  $_POST["answer".$counter];

    $json .= '{"title":"' .$question.'","correct":"'.$correctanswer.'","options":[';

        
    foreach($answers as $answer){
        $json.= '"'.mysqli_real_escape_string($conn,$answer).'",';
    }
    $json = substr($json,0,-1);
    $json.= "]},";
    



    $counter++;

}
$json = substr($json,0,-1);
$json .="]";




$sql = "INSERT INTO quiz(name, description, questions, img) VALUES ('$title', '$description', '$json', '$image')";

$conn ->query($sql);

header('location:dashboard.php');
?>