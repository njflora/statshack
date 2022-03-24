<?php
include 'header.php';
//select all the films
$head2headquery = "SELECT teams, head2id FROM `headtohead` ORDER BY teams ASC;
";
$head2headresultset = $conn->query($head2headquery);
$head2heads = $head2headresultset->fetchAll();


?>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>

<div id="pageBanner" class="flex-center" style="background-image: url('./images/header.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Premier League: Head-to-heads.</h1>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--pageBanner-->

<div class="layer text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title">Head to Head Stats.</h2>
                <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci fugiat itaque laborum modi totam! Excepturi?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A hic illo iusto maiores, molestias non similique, sit tempore ullam velit veniam veritatis voluptates? Beatae doloremque libero quaerat quis ratione? Voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad amet architecto blanditiis debitis eius est eum, fugiat illo impedit ipsam iste iure laborum necessitatibus nesciunt nostrum nulla officiis pariatur perspiciatis possimus quae, quis quo, unde vel veniam vitae voluptas!</p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--layer-->

<div class="layer grey" id="flightsLists">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 layer-title">
                <h2 class="title">Head to heads.</h2>
                <p>See what team will be on top, no matter the teams!</p>
            </div><!--col-->
            <?php

            //loop over the array of films
            foreach ($head2heads as $head2head) { ?>
                <div class="col-lg-4 text-center">
                    <?php echo "<a href='detailsheadtohead.php?head2id={$head2head["head2id"]}'>"; ?>
                    <div class="iconBox">
                        <div class="overlay"></div>
                        <div class="z-container">
                            <h5><?php echo "{$head2head["teams"]}";?></h5>
                        </div>
                    </div><!--iconBox-->
                    </a>
                </div><!--col-->
            <?php }
            ?>
        </div><!--row-->
    </div><!--container-->
</div><!--layer-->

<?php

include 'footer.php';

?>

</body>
</html>
