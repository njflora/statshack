<?php
include "header.php";
include "logininclude.php";
include "createValidation.php";
//form validation here

//basic form processing
$origin_id=$_POST['origin_id'];
$destination_id=$_POST['destination_id'];
$departure_date=$_POST['departure_date'];
$departure_time=$_POST['departure_time'];
$arrival_date=$_POST['arrival_date'];
$arrival_time=$_POST['arrival_time'];

if($origin_id){
    echo "$origin_id";}
if($destination_id){
    echo "$destination_id";}
if($departure_date){
    echo "$departure_date";}
if($departure_time){
    echo "$departure_time";}
if($arrival_date){
    echo "$arrival_date";}
if($arrival_time){
    echo "$arrival_time";}


//SQL INSERT for adding a new row
////Use a prepared statement to bind the values from the form
$query="INSERT INTO flights (origin_id, destination_id, departure_date, departure_time, arrival_date, arrival_time) VALUES (:origin_id, :destination_id, :departure_date, :departure_time, :arrival_date, :arrival_time)";
$stmt=$conn->prepare($query);
$stmt->bindValue(':origin_id', $origin_id);
$stmt->bindValue(':destination_id', $destination_id);
$stmt->bindValue(':departure_date', $departure_date);
$stmt->bindValue(':departure_time', $departure_time);
$stmt->bindValue(':arrival_date', $arrival_date);
$stmt->bindValue(':arrival_time', $arrival_time);
$stmt->execute();
$conn=NULL;
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Save film</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
</html>
<?php
echo "<p><a href='browsablelist.php'</a>Return To Homepage!</p>";
?>