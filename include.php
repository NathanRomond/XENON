<?php

    function leapYear($input) {
        if((0 == $input % 4) & (0 != $input % 100) | (0 == $input % 400)) {
            return TRUE;   
        }
        else {  
            return FALSE;    
        }
    }
?>