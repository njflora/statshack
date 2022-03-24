<?php
$stmt = $conn->prepare("SELECT *  FROM `pointstable-21-22` WHERE `rank` = 1");


$flight=$stmt->fetch();
?>

<?php
foreach ($tablerow1 as $table){
    echo "<p>{$table["rank"]}</p>";
    echo "<p>{$table["club"]}</p>";
    echo "<p>{$table["matches_played"]}</p>";
    echo "<p>{$table["wins"]}</p>";
    echo "<p>{$table["losses"]}</p>";
    echo "<p>{$table["drawn"]}</p>";
    echo "<p>{$table["points"]}</p>";
}
?>
echo
