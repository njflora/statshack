    <div class="layer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>
                    Flight details
                </h1>
                <?php
                //validation to see if we found a flight

                if($flight){
                    echo"<h2>Departure Airport</h2>";
                    echo "<li>name:{$airport_origin['name']}</h1>";
                    echo "<li>location:{$airport_origin['location']}</h1>";
                    echo "<h2>Arrival Airport</h2>";
                    echo "<li>name:{$airport_destination['name']}</h1>";
                    echo "<li>location:{$airport_destination['location']}</h1>";
                }

                else
                {
                    echo "<p>Can't find the flight's airports you are looking for</p>";
                }
                ?>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--layer-->