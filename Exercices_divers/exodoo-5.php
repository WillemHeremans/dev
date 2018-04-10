<?php

$url = "http://www.sap.com/belgique/index.html";
$data = file_get_contents($url);
$newdata = str_replace("SAP", "Odoo", $data);
$filename = "result.html";

	file_put_contents($filename, $newdata);

$save = fopen($filename, "w");

fwrite($save, $newdata);
fclose($save);

?>
