<!Doctype HTML>
<html>
<head>
    <title>Search Bar</title>
    <link rel="stylesheet" href="css/searchstyle.css"/>
    <?php
    include 'searchBarScript.php';
    ?>
</head>
<body>
<div class="search-wrap flex-center jc-center">
    <form action="searchprocess.php" method="get">
        <input type="text" name="searchBar" id="search" placeholder="" value="Search Flights by Origin..." maxlength="55" autocomplete="off" onmousedown="active();" onblur="inactive();" />
        <i id="clear" class="fas fa-times"></i>
    </form>
</div>

</body>
</html>