<?php

for ($number = 1; $number <= 99; $number++) 

{

    if (($number % 3 == 0) && ($number % 7 == 0)) {
    
        echo '<span style="color:red;">OpenSource</span>' .'<br />';
        
        }
    else if ($number % 3 == 0) {
    
        echo '<span style="color:green;">Open</span>' .'<br />';
        
        }
    else if ($number % 7 == 0) {
    
        echo 'Source' .'<br />';
        
        }
        
    else {
    
        echo $number .'<br />';
        
        }
}

?>
