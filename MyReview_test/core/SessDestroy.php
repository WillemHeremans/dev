<?php
session_start();
if (isset ($_COOKIE['pseudo']) || isset ($_COOKIE['pswd']))

{

setcookie('pseudo', '', -1);
setcookie('age', '', -1);
setcookie('pref', '', -1);
setcookie('lieu', '', -1);

}
session_destroy();
header('Location: ../login.php');
?>
