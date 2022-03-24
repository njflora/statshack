<?php
include "header.php"; // header

?>
<!DOCTYPE HTML>

<html>
<head>
    <title>Homepage</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <style>
        table{
            font-family: arial, sans-serif;

            border-collapse: collapse;

            width: 100%;
        }
        td, th {

            border: 1px solid #dddddd;

            text-align: left;

            padding: 8px;

        }
    </style>
</head>
<body>

<div id="hero" class="flex-center" style="background-image: url('./images/walla.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="display:inline-block;border: solid rgba(0,0,0,25%);background:rgba(255, 107, 108, 75%); padding: 3.5px;">Home of Football Data!</h1>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--hero-->
<div id="pltable" class="flex-center"">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color:var(--primaryRed);text-align:center;background: whitesmoke;">Current League Table:</h1>
                <table>
                    <tr>
                        <th>Rank</th>
                        <th>Club</th>
                        <th>Matches</th>
                        <th>Wins</th>
                        <th>Losses</th>
                        <th>Draws</th>
                        <th>Points</th>
                    </tr>
                    <tr>

                            <?php
                            $query = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 1");
                            $resultset = $conn->query($query);
                            $leaguetable = $resultset->fetchAll();
                            foreach ($leaguetable as $table){
                                echo "<td><p>{$table["rank"]}</p></td><td><p> {$table["club"]} <td><p>{$table["matches_played"]}</p></td> <td><p>{$table["wins"]}</p></td><td><p> {$table["losses"]}<td><p> {$table["drawn"]}</p></td><td><p>{$table["points"]} </p></p></td>";

                            }
                            ?>

                    </tr>
                    <tr>

                        <?php
                        $query2 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 2");
                        $resultset2 = $conn->query($query2);
                        $leaguetable2 = $resultset2->fetchAll();
                        foreach ($leaguetable2 as $table2){
                            echo "<td><p>{$table2["rank"]}</p></td><td><p> {$table2["club"]} <td><p>{$table2["matches_played"]}</p></td> <td><p>{$table2["wins"]}</p></td><td><p> {$table2["losses"]}<td><p> {$table2["drawn"]}</p></td><td><p>{$table2["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>

                    <tr>

                        <?php
                        $query3 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 3");
                        $resultset3 = $conn->query($query3);
                        $leaguetable3 = $resultset3->fetchAll();
                        foreach ($leaguetable3 as $table3){
                            echo "<td><p>{$table3["rank"]}</p></td><td><p> {$table3["club"]} <td><p>{$table3["matches_played"]}</p></td> <td><p>{$table3["wins"]}</p></td><td><p> {$table3["losses"]}<td><p> {$table3["drawn"]}</p></td><td><p>{$table3["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query4 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 4");
                        $resultset4 = $conn->query($query4);
                        $leaguetable4 = $resultset4->fetchAll();
                        foreach ($leaguetable4 as $table4){
                            echo "<td><p>{$table4["rank"]}</p></td><td><p> {$table4["club"]} <td><p>{$table4["matches_played"]}</p></td> <td><p>{$table4["wins"]}</p></td><td><p> {$table4["losses"]}<td><p> {$table4["drawn"]}</p></td><td><p>{$table4["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query5 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 5");
                        $resultset5 = $conn->query($query5);
                        $leaguetable5 = $resultset5->fetchAll();
                        foreach ($leaguetable5 as $table5){
                            echo "<td><p>{$table5["rank"]}</p></td><td><p> {$table5["club"]} <td><p>{$table5["matches_played"]}</p></td> <td><p>{$table5["wins"]}</p></td><td><p> {$table5["losses"]}<td><p> {$table5["drawn"]}</p></td><td><p>{$table5["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query6 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 6");
                        $resultset6 = $conn->query($query6);
                        $leaguetable6 = $resultset6->fetchAll();
                        foreach ($leaguetable6 as $table6){
                            echo "<td><p>{$table6["rank"]}</p></td><td><p> {$table6["club"]} <td><p>{$table6["matches_played"]}</p></td> <td><p>{$table6["wins"]}</p></td><td><p> {$table6["losses"]}<td><p> {$table6["drawn"]}</p></td><td><p>{$table6["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query7 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 7");
                        $resultset7 = $conn->query($query7);
                        $leaguetable7 = $resultset7->fetchAll();
                        foreach ($leaguetable7 as $table7){
                            echo "<td><p>{$table7["rank"]}</p></td><td><p> {$table7["club"]} <td><p>{$table7["matches_played"]}</p></td> <td><p>{$table7["wins"]}</p></td><td><p> {$table7["losses"]}<td><p> {$table7["drawn"]}</p></td><td><p>{$table7["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query8 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 8");
                        $resultset8 = $conn->query($query8);
                        $leaguetable8 = $resultset8->fetchAll();
                        foreach ($leaguetable8 as $table8){
                            echo "<td><p>{$table8["rank"]}</p></td><td><p> {$table8["club"]} <td><p>{$table8["matches_played"]}</p></td> <td><p>{$table8["wins"]}</p></td><td><p> {$table8["losses"]}<td><p> {$table8["drawn"]}</p></td><td><p>{$table8["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query9 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 9");
                        $resultset9 = $conn->query($query9);
                        $leaguetable9 = $resultset9->fetchAll();
                        foreach ($leaguetable9 as $table9){
                            echo "<td><p>{$table9["rank"]}</p></td><td><p> {$table9["club"]} <td><p>{$table9["matches_played"]}</p></td> <td><p>{$table9["wins"]}</p></td><td><p> {$table9["losses"]}<td><p> {$table9["drawn"]}</p></td><td><p>{$table9["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query10 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 10");
                        $resultset10 = $conn->query($query10);
                        $leaguetable10 = $resultset10->fetchAll();
                        foreach ($leaguetable10 as $table10){
                            echo "<td><p>{$table10["rank"]}</p></td><td><p> {$table10["club"]} <td><p>{$table10["matches_played"]}</p></td> <td><p>{$table10["wins"]}</p></td><td><p> {$table10["losses"]}<td><p> {$table10["drawn"]}</p></td><td><p>{$table10["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query11 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 11");
                        $resultset11 = $conn->query($query11);
                        $leaguetable11 = $resultset11->fetchAll();
                        foreach ($leaguetable11 as $table11){
                            echo "<td><p>{$table11["rank"]}</p></td><td><p> {$table11["club"]} <td><p>{$table11["matches_played"]}</p></td> <td><p>{$table11["wins"]}</p></td><td><p> {$table11["losses"]}<td><p> {$table11["drawn"]}</p></td><td><p>{$table11["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query12 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 12");
                        $resultset12 = $conn->query($query12);
                        $leaguetable12 = $resultset12->fetchAll();
                        foreach ($leaguetable12 as $table12){
                            echo "<td><p>{$table12["rank"]}</p></td><td><p> {$table12["club"]} <td><p>{$table12["matches_played"]}</p></td> <td><p>{$table12["wins"]}</p></td><td><p> {$table12["losses"]}<td><p> {$table12["drawn"]}</p></td><td><p>{$table12["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query13 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 13");
                        $resultset13 = $conn->query($query13);
                        $leaguetable13 = $resultset13->fetchAll();
                        foreach ($leaguetable13 as $table13){
                            echo "<td><p>{$table13["rank"]}</p></td><td><p> {$table13["club"]} <td><p>{$table13["matches_played"]}</p></td> <td><p>{$table13["wins"]}</p></td><td><p> {$table13["losses"]}<td><p> {$table13["drawn"]}</p></td><td><p>{$table13["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query14 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 14");
                        $resultset14 = $conn->query($query14);
                        $leaguetable14 = $resultset14->fetchAll();
                        foreach ($leaguetable14 as $table14){
                            echo "<td><p>{$table14["rank"]}</p></td><td><p> {$table14["club"]} <td><p>{$table14["matches_played"]}</p></td> <td><p>{$table14["wins"]}</p></td><td><p> {$table14["losses"]}<td><p> {$table14["drawn"]}</p></td><td><p>{$table14["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query15 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 15");
                        $resultset15 = $conn->query($query15);
                        $leaguetable15= $resultset15->fetchAll();
                        foreach ($leaguetable15 as $table15){
                            echo "<td><p>{$table15["rank"]}</p></td><td><p> {$table15["club"]} <td><p>{$table15["matches_played"]}</p></td> <td><p>{$table15["wins"]}</p></td><td><p> {$table15["losses"]}<td><p> {$table15["drawn"]}</p></td><td><p>{$table15["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query16 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 16");
                        $resultset16 = $conn->query($query16);
                        $leaguetable16 = $resultset16->fetchAll();
                        foreach ($leaguetable16 as $table16){
                            echo "<td><p>{$table16["rank"]}</p></td><td><p> {$table16["club"]} <td><p>{$table16["matches_played"]}</p></td> <td><p>{$table16["wins"]}</p></td><td><p> {$table16["losses"]}<td><p> {$table16["drawn"]}</p></td><td><p>{$table16["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query17 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 17");
                        $resultset17 = $conn->query($query17);
                        $leaguetable17 = $resultset17->fetchAll();
                        foreach ($leaguetable17 as $table17){
                            echo "<td><p>{$table17["rank"]}</p></td><td><p> {$table17["club"]} <td><p>{$table17["matches_played"]}</p></td> <td><p>{$table17["wins"]}</p></td><td><p> {$table17["losses"]}<td><p> {$table17["drawn"]}</p></td><td><p>{$table17["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query18 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 18");
                        $resultset18 = $conn->query($query18);
                        $leaguetable18 = $resultset18->fetchAll();
                        foreach ($leaguetable18 as $table18){
                            echo "<td><p>{$table18["rank"]}</p></td><td><p> {$table18["club"]} <td><p>{$table18["matches_played"]}</p></td> <td><p>{$table18["wins"]}</p></td><td><p> {$table18["losses"]}<td><p> {$table18["drawn"]}</p></td><td><p>{$table18["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query19 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 19");
                        $resultset19 = $conn->query($query19);
                        $leaguetable19 = $resultset19->fetchAll();
                        foreach ($leaguetable19 as $table19){
                            echo "<td><p>{$table19["rank"]}</p></td><td><p> {$table19["club"]} <td><p>{$table19["matches_played"]}</p></td> <td><p>{$table19["wins"]}</p></td><td><p> {$table19["losses"]}<td><p> {$table19["drawn"]}</p></td><td><p>{$table19["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                    <tr>

                        <?php
                        $query20 = ("SELECT * FROM `pointstable-21-22`  WHERE rank = 20");
                        $resultset20 = $conn->query($query20);
                        $leaguetable20 = $resultset20->fetchAll();
                        foreach ($leaguetable20 as $table20){
                            echo "<td><p>{$table20["rank"]}</p></td><td><p> {$table20["club"]} <td><p>{$table20["matches_played"]}</p></td> <td><p>{$table20["wins"]}</p></td><td><p> {$table20["losses"]}<td><p> {$table20["drawn"]}</p></td><td><p>{$table20["points"]} </p></p></td>";

                        }
                        ?>

                    </tr>
                </table>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--hero-->
<div id="ftmatches" class="flex-center"">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="color:var(--primaryRed);text-align:center;background: whitesmoke;">Featured Matches</h1>

        </div><!--col-->
    </div><!--row-->
</div><!--container-->
</div><!--hero-->



<?php
include "footer.php"; // header ?>

</body>
</html>