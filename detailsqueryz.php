<?php

// Flight ID selected from previous screen only need this once, reuse
$flightId=$_GET['id'];

$stmt = $conn->prepare("SELECT *  FROM flights WHERE id =  :id");
$stmt->bindValue(':id',$flightId);
$stmt->execute();

$flight=$stmt->fetch();


// get origin
$stmt = $conn->prepare("SELECT airports.name AS name , airports.location AS location from airports
INNER JOIN flights
ON flights.origin_id=airports.id
WHERE flights.id =  :id");
$stmt->bindValue(':id', $flightId);
$stmt->execute();
$airport_origin = $stmt->fetch(); //only need one row

// Get destination
$stmt = $conn->prepare("SELECT airports.name AS name , airports.location AS location from airports
INNER JOIN flights
ON flights.destination_id=airports.id
WHERE flights.id =  :id");
$stmt->bindValue(':id', $flightId);
$stmt->execute();
$airport_destination = $stmt->fetch(); //only need one row

// Get crew details for $flightid
//Joins flights and crew to crew_flight
// Use $flightId as the bound variable to get crew members
$stmt = $conn->prepare("SELECT crew.last_name,crew.first_name  FROM crew
	INNER JOIN crew_flight
	ON crew.id=crew_flight.crew_id
	INNER JOIN flights
	ON flights.id=crew_flight.flight_id
	where crew_flight.flight_id = :flightid;");
$stmt->bindValue(':flightid', $flightId);
$stmt->execute();
$crew_members = $stmt->fetchAll();

$conn=NULL;
?>