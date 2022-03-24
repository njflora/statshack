<?php
$searchBar = $_GET['searchBar'];
$query = "SELECT flights.id AS flightId, flights.origin_id, flights.destination_id, airports.name AS name FROM flights
INNER JOIN airports ON flights.origin_id = airports.id
WHERE `name` LIKE '%$searchBar%'

";
$resultset = $conn->query($query);
$flights = $resultset->fetchAll();
?>