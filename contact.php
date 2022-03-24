<?php

include 'header.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>

<div id="pageBanner" class="flex-center" style="background-image: url('./images/Large-Flights-hero-2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contact Us</h1>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--pageBanner-->

<div class="layer text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title">Contact Us</h2>
                <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci fugiat itaque laborum modi totam! Excepturi?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A hic illo iusto maiores, molestias non similique, sit tempore ullam velit veniam veritatis voluptates? Beatae doloremque libero quaerat quis ratione? Voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad amet architecto blanditiis debitis eius est eum, fugiat illo impedit ipsam iste iure laborum necessitatibus nesciunt nostrum nulla officiis pariatur perspiciatis possimus quae, quis quo, unde vel veniam vitae voluptas!</p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--layer-->

<div class="layer grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 layer-title text-center">
                <h2 class="title">Contact Us</h2>
                <p>Get in touch with us today in regard to any queries you might have.</p>
            </div><!--col-->
            <div class="col-lg-12">
                <form id="contactForm" action="contactProcess.php" name="contactForm" method="post">
                    <input type="text" id="fullName" placeholder="Full Name" name="contactName">
                    <input type="email" id="emailAddress" placeholder="Your Email" name="contactEmail">
                    <input type="textarea" placeholder="Your Message Here" id="contactTextArea" name="contactMessage">
                    <input type="submit">
                </form>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--layer-->

<?php

include 'footer.php';

?>

</body>
</html>
