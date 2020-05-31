<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$www = 123;
$msg = $www > 100 ? "large" : "small";
echo "first: $msg <br>";

$msg = ($www % 2 ==0)? "even":"odd";

echo "Second: $msg <br>";

$msg = ($www % 2 ) ? "odd": "even";
echo "third: $msg <br>";








$vv = "hello world!";
echo "first: ". strpos($vv, "wo")."<br>";
echo "second: " .strpos($vv, "he"). "<br>";
echo "third: ". strpos($vv, "zz")."<br>";


if(strpos($vv, "he") == FALSE ) echo "wrong A<br>";
if(strpos($vv, "zz") == false ) echo "right B<br>";
if(strpos($vv, 'he') != false ) echo "right C<br>";
if(strpos($vv, 'zz') === false) echo "right D<br>";

print_r(false); print FALSE;
echo "where were they?\n";




    // array example

    $oxo = array(array('x', ' ', 'o'),
                array('o', 'o', 'o'),
                array('x', 'o', ' '),
);
    echo "<br>";

    $number = 12345 *67890;
    echo $number;
    echo "<br>";
    echo substr($number, 3, 1);






    define("ROOT_LOC", "/user/local/");
    $directory = ROOT_LOC;
    echo $directory;




?>


</body>
</html>