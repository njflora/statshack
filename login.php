<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>avianAdventures | Login</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
         <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="stylemasterv1.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<div class="loginPage flex-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span>Welcome to</span>
                <h2 class="logo">stat<b>Shack</b></h2>
                <?php
                if(isset($_SESSION["error_msg"])){
                    echo "<p>{$_SESSION["error_msg"]}</p>";
                }
                ?>

               <div class="loginBox">
                   <i class="fas fa-user"></i>
                   <form action="login_process.php" method="post">
                       <label for="email">Email Address:</label>
                       <input type="email" id="email" name="email" placeholder="Your Email">
                       <label for="password" >Password:</label>
                       <input type="password" id="password" name="password" placeholder="Your Password">
                       <input type="submit" name="login" value="Login">
                   </form>
               </div><!--loginBox-->

            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--loginPage-->



</body>
</html>
