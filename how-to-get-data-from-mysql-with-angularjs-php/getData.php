<?php

include 'config.php';

$sel = mysqli_query($con,"select * from profils");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
    $data[] = array("pseudo"=>$row['pseudo'],"age"=>$row['age'],"pref_1 "=>$row['pref_1 ']);
}

echo json_encode($data);
