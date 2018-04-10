<?php

    $file = 'data.bin';

    $size = filesize($file);


    for ($byte = 7; $byte <= $size; $byte += 7) {


    $handle = fopen($file, 'r+');


    fseek($handle, $size - $byte);


    $cut = fread($handle, $byte);


    ftruncate($handle, $size - $byte);


    $save = fopen($byte.'.bin', 'w+');


    fwrite($save, $cut);

    fclose($save);


    }



?>

