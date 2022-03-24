<div class="addFlight flex-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class = create>
                    <?php
                    if($_SESSION["role"] == 2){ ?>
                        <h2>Looking to add a new flight?</h2>
                        <p>Add a new flight to our list today.</p>
                        <a href="createOG.php">Add flight</a>
                    <?php }else{
                        echo "<h2>Auth Failure</h2>";
                    }
                    ?>
                </div><!--create-->
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--addFlight-->
