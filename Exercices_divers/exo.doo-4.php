<?php 

    $source = array('10 pommes ou 6 poires', '2 chocolats noirs, 3 chocolats au lait, 4 pralinés', '3 melons ou 1 pastèque', '7 kiwis', '2 ananas', '9 abricots / 9 pêches');


    function int_count() {


    global $source;


    $list = count($source);


    for ($item = 0; $item < $list; $item++) {


    echo $source[$item].', [Integer(s) = '.preg_match_all("/[0-9]+/", $source[$item]).']<br />';



    }


    }


echo int_count();

?>



