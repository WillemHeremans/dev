<?php

header ("Content-type: image/png");

$image = imagecreatefrompng("fireworks.png");

imagepng($image);

?>
