<?php

    $source = array('11 pommes', '6 chocolats', '3 melons', '7 kiwis', '2 ananas', '9 abricots');

    $data = implode(" ", $source);


    function int_count() {


    global $data;


    return preg_match_all("/[0-9]+/", $data);


    }


    echo int_count();


?>

