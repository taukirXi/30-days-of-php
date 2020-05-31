<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    if(true){
        echo "this will always print<br>";
    }
    else{
        echo "this will never print <br>";
    }


    ?>

    $true_num = 3 + 0.022375;echo "<br>";
    $true_str = "tried and true"; echo "<br>";
    
    $true_array[49] = array(); echo "<br>";
    $false_array = array();
    $false_null = NULL;
    $false_num = 999- 999;
    $false_str ="";


    <<?php

    // here literally will be print only. 
    // for the first case $variable pass but we have print the literally variable. 
    // that's why interpreter didn't show the string.
    $variable = "name";
    $literally = "my $variable woll not print<br>";

    print($literally);
    print("<br>");

    $literally = "my $variable will print";
    print($literally);
    ?>

</body>
</html>