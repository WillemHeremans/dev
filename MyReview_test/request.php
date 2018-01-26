<?php


if (!empty($_POST)&&isset($_POST['addData'])) {
	addData();
}

function addData(){
	global $bdd;

	$phrase_sql = "INSERT INTO identifiant (pseudo, name, avatar, pswd, date)
    VALUES (:pseudo, :name, :avatar, SHA2(:pswd, 512), :date)";
	$preparation = $bdd->prepare($phrase_sql);

	$preparation->bindParam(':pseudo',$_POST['pseudo'],PDO::PARAM_STR);
	$preparation->bindParam(':name',$_POST['name'],PDO::PARAM_STR);
	$preparation->bindParam(':avatar',$_POST['avatar'],PDO::PARAM_STR);	
	$preparation->bindParam(':pswd',$_POST['pswd'],PDO::PARAM_STR);
	$preparation->bindParam(':date',$_POST['date'],PDO::PARAM_STR);


	if ($preparation->execute()) {
		header('Location: index.php');
	} else {
		echo "OOOPS!";
	}

}
 ?>
