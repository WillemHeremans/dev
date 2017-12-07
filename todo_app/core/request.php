<?php
if (!empty($_GET)&&isset($_GET['delete'])){
	deleteTask($_GET['delete']);
}
$task = selectAll();


if (!empty($_POST)&&isset($_POST['delete'])) {
	deleteTask($_POST['delete']);
}


if (!empty($_POST)&&isset($_POST['addTask'])) {
	addTask();
}

function selectAll(){
	global $bdd;
	$phrase_sql = "SELECT * FROM task";
	$preparation = $bdd->prepare($phrase_sql);
	$preparation->execute();
	return $preparation->fetchAll( PDO::FETCH_ASSOC );
}

function deleteTask($id){
	global $bdd;
	$phrase_sql = "DELETE FROM task WHERE task_id = :task_id";

	$preparation = $bdd->prepare($phrase_sql);
	$preparation->bindParam(':task_id',$id,PDO::PARAM_INT);

	if ($preparation->execute()) {
		header('Location: index.php');
	} else {
		echo "OOOPS!";
	}
}


function addTask(){
	global $bdd;

	$phrase_sql = "INSERT INTO task (task_title, task_description, task_start_timestamp, task_end_timestamp)
    VALUES (:task_title, :task_description, :task_start_timestamp, :task_end_timestamp)";
	$preparation = $bdd->prepare($phrase_sql);

	$preparation->bindParam(':task_title',$_POST['task_title'],PDO::PARAM_STR);
	$preparation->bindParam(':task_description',$_POST['task_description'],PDO::PARAM_STR);
	$preparation->bindParam(':task_start_timestamp',$_POST['task_start_timestamp'],PDO::PARAM_STR);
	$preparation->bindParam(':task_end_timestamp',$_POST['task_end_timestamp'],PDO::PARAM_STR);

	if ($preparation->execute()) {
		header('Location: index.php');
	} else {
		echo "OOOPS!";
	}



}
 ?>
