<?php
include "logininclude.php"; //connect 2 db
include "userAuth.php"; // userauth
?>

<!DOCTYPE HTML>

<html>
<head>
    <title>statShack</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="stylemasterv1.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>

</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"">
            <a href="/proj/browsablelist.php"><h2 class="logo">stat<b>Shack</b></h2></a>
            </div><!--col-->
            <div class="col-lg-6 flex-center text-right" id="navWrap">
                <ul id="menu">
                    <li><a href="seasons.php">Seasons</a></li>
                    <li><a href="from.php">Players</a></li>
                    <li><a href="headtohead.php">Head-To-Heads</a></li>
                    <li><a href="contact.php">Sign Up</a></li>
                </ul>
            </div><!--col-->
            <div class="col-lg-2 flex-center" id="headerLog">
                <div class="headerLog">
                    <a href="logout.php"><i class="fas fa-user"></i></a>
                    <i id="searchIcon" class="fas fa-search"></i>
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->

    <?php include "search.php"; // search ?>

</header>

<?php
include 'searchscript.php';
?>

</body>
</html>
