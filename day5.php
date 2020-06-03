<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $weather = array( 
            'rain',
            'sunshine',
            'clouds',
            'hail',
            'sleet',
            'snow',
            'wind'
    );


    echo "we've seen all kinds of weather this month. at the begginning of the month,
    we had $weather[5] and $weather[6].<br>";
    echo " then came $weather[1] with a few $weather[2] and some $weather[0].<br>";
    echo "at least we didn't get any $weather[3] or $weather[4].<br>";
    ?>



</body>
</html>