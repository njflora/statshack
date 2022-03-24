<?php
include 'header.php';
//include 'detailsqueryz.php';
$head2id=$_GET['head2id'];


try {
    $conn = new PDO('mysql:host=localhost;charset=utf8;dbname=test', 'root', '');
} catch (PDOException $exception) {
}
//head2head query
$stmt = $conn->prepare("SELECT *  FROM `headtohead` WHERE head2id =  :head2id");
$stmt->bindValue(':head2id',$head2id);
$stmt->execute();

$headtoheads=$stmt->fetch();


?>
<body>

<div id="pageBanner" class="flex-center" style="background-image: url('./images/beautiful.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Head-to-head: <?php echo $headtoheads['teams']; ?> <br>Matches Played: <?php echo $headtoheads['match_played']; ?> </h1>
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
                <div class="head2details">
                <?php

                if($headtoheads){
                    echo "<div><span>Most Wins:</span><p>{$headtoheads['most_wins']}</p></div>";
                    echo "<div><span>Least Wins:</span><p>{$headtoheads['lesser_wins']}</p></div>";
                    echo "<div><span>Draws:</span><p>{$headtoheads['drawn']}</p></div>";
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
