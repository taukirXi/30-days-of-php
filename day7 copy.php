<?php
# if string data has a space


    function has_space($string) {
        if(preg_match('/ /', $string)) {
            return true;
        } else {
            return false;
        }
    }





$string1 = 'thisdoesnothaveanyspace';
$string2 = 'this doeshavespace';


if(has_space($string1)) {
    echo "has at least one space";
} else {
    echo "has no space";
}

?>