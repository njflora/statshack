<?php
include 'header.php';
//include 'detailsqueryz.php';
$games_num=$_GET['games_num'];


try {
    $conn = new PDO('mysql:host=localhost;charset=utf8;dbname=test', 'root', '');
} catch (PDOException $exception) {
}
//premier league query
$stmt = $conn->prepare("SELECT *  FROM `premierleague21-22` WHERE games_num =  :games_num");
$stmt->bindValue(':games_num',$games_num);
$stmt->execute();

$szns=$stmt->fetch();


?>
<body>

<div id="pageBanner" class="flex-center" style="background-image: url('./images/beautiful.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Matchroom: <?php echo $szns['home_team']; ?> v <?php echo $szns['away_team']; ?> </h1>
                <p style="color: white"><?php echo $szns['date']; ?></p>
                <br>
                <p><a href="browsablelist.php">Back.</a></p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--pageBanner-->

<div class="layer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="flightDetails">
                <?php

                if($szns){
                    echo "<div><span>Winner</span><p>{$szns['results']}</p></div>";
                    echo "<div><span>Home Score:</span><p>{$szns['home_team_goals']}</p></div>";
                    echo "<div><span>Away Score:</span><p>{$szns['away_team_goals']}</p></div>";
                }
                else
                {
                    echo "<p>Can't find the match.</p>";
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

?>

<?php //footer
include "footer.php";
?>
</body>


<!-- CREATE -->
