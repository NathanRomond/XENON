<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input = $_POST['leapyear'];
        if (($input % 4) != 0) {
            return false;
        }
        else if (($input % 400) != 0){
            return false;
        }
        else {
            return true;
        }
    }
?>