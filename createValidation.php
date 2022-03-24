<?php
include "logininclude.php";

if(isset($_POST["submitBtn"])){
    $validForm = true;


$origin_id = $_POST["origin_id"];
$destination_id = $_POST["destination_id"];
$departure_date = $_POST["departure_date"];
$departure_time = $_POST["departure_time"];
$arrival_date = $_POST["arrival_date"];
$arrival_time = $_POST["arrival_time"];

if(empty($_POST["origin_id"])){
    $validForm = false;
    echo "<p>you didnt enter {$origin_id}!!";
}else{
    $fullname = $_POST["origin_id"];
}
if(empty($_POST["destination_id"])){
    $validForm = false;
    echo "<p>you didnt enter {$destination_id}!!";
}else{
    $fullname = $_POST["destination_id"];
}
if(empty($_POST["departure_date"])){
    $validForm = false;
    echo "<p>you didnt enter {$departure_date}!!";
}else{
    $fullname = $_POST["departure_date"];
}
if(empty($_POST["departure_time"])){
    $validForm = false;
    echo "<p>you didnt enter {$departure_time}!!";
}else{
    $fullname = $_POST["departure_time"];
}
if(empty($_POST["arrival_date"])){
    $validForm = false;
    echo "<p>you didnt enter {$arrival_date}!!";
}else{
    $fullname = $_POST["arrival_date"];
}
if(empty($_POST["arrival_time"])){
    $validForm = false;
    echo "<p>you didnt enter {$arrival_time}!!";
}else{
    $fullname = $_POST["arrival_time"];
}}
//else{//scrapped as I wanted to use the code below linking back to create.php
    //terminates the current script see https://www.php.net/manual/en/function.exit.php
    //exit("You shouldn't have got to this page.");
//}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <title>Basic Form Processing</title>
</head>
<body>
<?php

if($validForm){
    //we have passed all the tests so we can display the form data
    echo "<p> Entered Origin ID of: {$origin_id}.</p>";
    echo "<p> Entered Destination ID of: {$destination_id}.</p>";
    echo "<p> Entered Departure Date of: {$departure_date}.</p>";
    echo "<p> Entered Arrival Date of: {$arrival_date}.</p>";
    echo "<p>Added the details for {$origin_id} to {$destination_id}.</p>";

}else{
    echo "<p>You need to complete all the fields. <a href='createOG.php'>Go back and try again.</a></p>";
}



?>
</body>
</html>