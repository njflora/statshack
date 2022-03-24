<?php
try {
    $conn = new PDO('mysql:host=localhost;charset=utf8;dbname=test', 'root', '');
} catch (PDOException $exception) {
}

$query = "SELECT *  FROM users";
$resultset = $conn->query($query);
$users = $resultset->fetchAll();
$conn=NULL;


foreach ($users as $user) {
    echo "<p>";
    echo "{$user['email']} "; //displays each country name
    echo "</p>";
}
?>