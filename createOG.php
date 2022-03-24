<?php

include 'header.php';

?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>

<div id="pageBanner" class="flex-center" style="background-image: url('./images/Large-Flights-hero-2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Add New Flight</h1>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--pageBanner-->

<div class="layer text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title">Add New Flight</h2>
                <p><a href="browsablelist.php">Return back to flights.</a></p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--layer-->

<div class="layer text-center grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="addFlightBox">
                    <form action="save.php" method="post">
                        <div>
                            <fieldset>
                                <legend>What is the Origin ID of this flight?</legend>
                                <input type="radio" name="origin_id" value="1" id=1> <label for="1">Manchester</label>
                                <input type="radio" name="origin_id" value="2" id=2> <label for="2">Charles De Gaulle</label>
                                <input type="radio" name="origin_id" value="3" id=3> <label for="3">Heathrow</label>
                                <input type="radio" name="origin_id" value="4" id=4> <label for="4">Lpool John Lennon</label>
                                <input type="radio" name="origin_id" value="5" id=5> <label for="5">Schipol</label>
                                <input type="radio" name="origin_id" value="6" id=6> <label for="6">Frankfurt am Main</label>
                                <input type="radio" name="origin_id" value="7" id=7> <label for="7">Leonardo da Vinci-Fiumicino</label>
                                <input type="radio" name="origin_id" value="8" id=8> <label for="8">Václav Havel</label>
                                <input type="radio" name="origin_id" value="9" id=9> <label for="9">Stockholm Arlanda</label>
                                <input type="radio" name="origin_id" value="10" id=10> <label for="10">Barcelona EPJT</label>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset>
                                <legend>What is the Destination ID of this flight?</legend>
                                <input type="radio" name="origin_id" value="1" id=1> <label for="1">Manchester</label>
                                <input type="radio" name="destination_id" value="2" id=2> <label for="2">Charles De Gaulle</label>
                                <input type="radio" name="destination_id" value="3" id=3> <label for="3">Heathrow</label>
                                <input type="radio" name="destination_id" value="4" id=4> <label for="4">Lpool John Lennon</label>
                                <input type="radio" name="destination_id" value="5" id=5> <label for="5">Schipol</label>
                                <input type="radio" name="destination_id" value="6" id=6> <label for="6">Frankfurt am Main</label>
                                <input type="radio" name="destination_id" value="7" id=7> <label for="7">Leonardo da Vinci-Fiumicino</label>
                                <input type="radio" name="destination_id" value="8" id=8> <label for="8">Václav Havel</label>
                                <input type="radio" name="destination_id" value="9" id=9> <label for="9">Stockholm Arlanda</label>
                                <input type="radio" name="destination_id" value="10" id=10> <label for="10">Barcelona EPJT</label>
                            </fieldset>
                        </div>
                        <div>
                            <label>Choose the departure date of this flight:
                                <input type="date" name="departure_date" min="2021-01-01" max="2025-01-01">
                            </label>
                            <div>
                                <label for="departure_time">Choose a departure time:</label>
                                <input id="departure_time" type="time" name="departure_time">
                            </div>
                            <div>
                                <label>Choose the arrival date of this flight:
                                    <input type="date" name="arrival_date" min="2021-01-01" max="2025-01-01">
                                </label>
                            </div>
                            <div>
                                <label for="arrival_time">Choose an arrival time:</label>
                                <input id="arrival_time" type="time" name="arrival_time">
                            </div>
                            <input type="submit" class="addFlightSubmit" name="submitBtn" value="Add Flight">
                        </div>
                    </form>
                </div>

            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--layer-->

<?php

include 'footer.php';

?>

</body>
</html>
