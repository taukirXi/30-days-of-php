<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $cities = array( 
        'tokyo',
        'mexico city',
        'new york city',
        'mumbai',
        'seoul',
        'shanghai',
        'lagos',
        'buenos aires',
        'cairo',
        'london'
    );

    echo "print array values seperated by commas.<br>";
    foreach($cities as $c) {
        echo "$c,<br>";
    }

    echo "<br>";
    echo "<b>sorting the values</b>.<br>";
    sort($cities);
    echo "\n<ul>\n";
    foreach($cities as $c) {
        echo "<li> $c, <br></li>";
    }
    echo "\n</ul>\n";
    
    echo "<b> adding some cities.</b><br>";
    array_push($cities, 'los angels', 'calcutta', 'osaka', 'beijing');
    
    sort($cities);

    echo "<ul>";
    foreach($cities as $c) {
        echo "<li> $c, <br></li>";
    }
    echo "</ul>";

    ?>



</body>
</html>