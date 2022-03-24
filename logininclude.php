<?php
try {
    $conn = new PDO('mysql:host=localhost;charset=utf8;dbname=test', 'root', '');
} catch (PDOException $exception) {
}
