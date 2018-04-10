<?php

if (!isset($_GET[numbers])) {

	echo'<h1 style="text-align:center;"><a href="?numbers"><button>My numbers</button></a></h1><br />';
	echo '<br />';
	$number = rand(1, 99);
	if (($number % 3 == 0) && ($number % 7 == 0)) {
	
	echo 'OpenSource';
	
	}
	
	else if ($number % 3 == 0) {
		echo 'Open';
	
	}
	
	else if ($number % 7 == 0) {
		echo 'Source';
	
	}
	
	else {
	echo $number;
	}


}

else {


for ($number=1; $number<=99; $number++)
{


	if (($number % 3 == 0) && ($number % 7 == 0)) {
	
	echo 'OpenSource' .'<br />';
	
	}
	
	else if ($number % 3 == 0) {
		echo 'Open'  .'<br />';
	
	}
	
	else if ($number % 7 == 0) {
		echo 'Source' .'<br />';
	
	}
	
	else {
	echo $number .'<br />';
	}

}



}



?>
<script>
/*var test = document.getElementById("test");
test.onClick = alert("Ca marche");*/
</script>
