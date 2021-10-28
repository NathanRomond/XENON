<?php
function LeapYear($input) {

    if (($input % 4) != 0) {
        echo $input," is not a leap year.";
        return false;
    }
    elseif (substr($input, -2) == "00"){
        if($input % 400 != 0){
            echo $input," is not a leap year.";
            return false;
        }
        echo $input," is a leap year.";
        return true;
    }
    else {
        echo $input," is a leap year.";
        return true;
    }
}
?>