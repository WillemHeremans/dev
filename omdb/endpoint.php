<?php

$url = '//www.example.com/path?googleguy=googley+nana';

// Prior to 5.4.7 this would show the path as "//www.example.com/path"
var_dump(parse_url($url));

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


?>
