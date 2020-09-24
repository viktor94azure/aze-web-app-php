<?php
    $srv = $_SERVER;

    $cities = [
        "Burgas" => 203017, 
        "Dobrich" => 86292,
        "Pleven" => 99628, 
        "Plovdiv" => 341625,
        "Ruse" => 145765, 
        "Sliven" => 87895, 
        "Sofia" => 1307376,
        "Stara Zagora" => 148443,
        "Varna" => 334466,
        "Veliko Tarnovo" => 73508
    ];

    arsort($cities);
?>
<html>
    <head>
        <title>Top 10 cities in Bulgaria</title>
    </head>
    <body>
        <h1>Top 10 cities in Bulgaria</h1>
        <br />
        <table border="1">
<?php
    foreach ($cities as $c => $p) {
        print "<tr>\n";
        print "<td>$c</td>\n";
        print "<td>$p</td>\n";
        print "</tr>\n";
    }
?>
        </table>
        <br /><br /><br />
        Running on <b><?php echo gethostname(); ?></b>
    </body>
</html>
