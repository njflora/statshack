<?php
session_start();
if(!isset($_SESSION["email"]))
{
    //user tried to access the page without logging in
    //redirect them to the login page
//    echo "Problem with the login";
    header( "Location: login.php" );
};
?>

<div class="topBar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Logged in as <?php echo $_SESSION['email']; ?></p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--topBar-->
