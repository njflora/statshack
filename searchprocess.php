<?php
include "header.php";
include "searchprocessquery.php";
$searchBar = $_GET['searchBar'];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div id="pageBanner" class="flex-center" style="background-image: url('./images/Large-Flights-hero-2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Flights from: <?php echo $searchBar; ?></h1>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--pageBanner-->

<div class="layer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul>
                <?php
                foreach ($flights as $flight) { ?>
                    <li><a href='details.php?id=<?php echo $flight["flightId"]; ?>'><?php echo $flight['name'];?></a></li>
                <?php }
                ?>
                </ul>
            </div>
        </div>
    </div>
</div>


</body>
</html>
