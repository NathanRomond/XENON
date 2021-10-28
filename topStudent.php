<?php

    function topStudent($grades, $students) {
        asort($students);
        $first_key = array_keys($students)[0];
        return $first_key;
    }

?>