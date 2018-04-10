<?php

/* Sorry, I don't understand very well the notion of "uniform distribution". 
I promise to learn further about it. 
For the moment, this is my answer:*/

    function rand5() {


    return rand(0, 5);


    }


    function rand7() {


    $numb = 8;


    while ($numb > 7) {


    $numb = rand5() + 5 * rand5() - 5;


    if ($numb < 0) {


    $numb = $numb * -1;


    }


    }


    return $numb;


     }


    echo rand7();


?>

