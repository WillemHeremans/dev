<?php 
if (!empty($_GET)&&isset($_GET['delete'])){
	deleteTask($_GET['delete']);
} 
$tasks = selectAll();


if (!empty($_POST)&&isset($_POST['delete'])) {
	deleteTask($_POST['delete']);
}


if (!empty($_POST)&&isset($_POST['addTask'])) {
	addTask();
}

function selectAll(){
	global $bdd;
	$phrase_sql = "SELECT * FROM tasks";
	$preparation = $bdd->prepare($phrase_sql);
	$preparation->execute();
	return $preparation->fetchAll( PDO::FETCH_ASSOC );
}

function deleteTask($id){
	global $bdd;
	$phrase_sql = "DELETE FROM tasks WHERE id = :id";

	$preparation = $bdd->prepare($phrase_sql);
	$preparation->bindParam(':id',$id,PDO::PARAM_INT);

	if ($preparation->execute()) {
		header('Location: index.php');
	} else {
		echo "OOOPS!";
	}
}


function addTask(){
	global $bdd;

	$phrase_sql = "INSERT INTO tasks (title, description)
    VALUES (:title, :details)";
	$preparation = $bdd->prepare($phrase_sql);

	$preparation->bindParam(':title',$_POST['title'],PDO::PARAM_STR);
	$preparation->bindParam(':details',$_POST['description'],PDO::PARAM_STR);

	if ($preparation->execute()) {
		header('Location: index.php');
	} else {
		echo "OOOPS!";
	}



}
 ?>
