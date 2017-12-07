<?php

if( isset( $_POST['getTab'] ) ){
	$tab = array(
		"post" => $_POST['getTab']
	);
	echo json_encode($tab);
}
?>
