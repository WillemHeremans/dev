<!DOCTYPE html>
<html lang="fr">
<body>
	<head>
		<meta charset="UTF-8"/>
		<title>Exo DB PHP</title>
	</head>

	<?php
	echo "<table style='border: solid 1px black;'>";


	class TableRows extends RecursiveIteratorIterator {
	    function __construct($it) {
	        parent::__construct($it, self::LEAVES_ONLY);
	    }

	    function current() {
	        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
	    }

	    function beginChildren() {
	        echo "<tr>";
	    }

	    function endChildren() {
	        echo "</tr>" . "\n";
	    }
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "colyseum";


	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $stmt = $conn->prepare("SELECT * FROM clients ORDER BY id ASC");
	    $stmt->execute();


	    // set the resulting array to associative
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

	    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
	        echo $v;
	    }
	}
	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}
	$conn = null;
	echo "</table>";
	?>

	<h1>formulaire post : </h1>
	  <!-- Formulaire méthode POST-->
	<p>
	    Veuillez taper votre prénom et nom :
	</p>

	<form method="post">
	<p>
	            <input type="text" name="prenom" id="prenom" />
	    <!--L'attribut name va définir une variable à utiliser dans utilisateur.php -->
	            <input type="text" name="nom" id="nom" />

	 </p>
	    <input type="submit" value="Valider" />

	</form>


	<?php

	/* Attempt MySQL server connection. Assuming you are running MySQL

	server with default setting (user 'root' with no password) */

	$link = mysqli_connect("localhost", "root", "", "colyseum");



	// Check connection

	if($link === false){

			die("ERROR: Could not connect. " . mysqli_connect_error());

	}


	// Escape user inputs for security

	$prenom = mysqli_real_escape_string($link, $_REQUEST['prenom']);

	$nom = mysqli_real_escape_string($link, $_REQUEST['nom']);


	// attempt insert query execution

	$sql = "INSERT INTO clients (firstname, lastname) VALUES ('$prenom', '$nom')";

	if(mysqli_query($link, $sql)){

			echo "Records added successfully.";

	} else{

			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

	}



	// close connection

	mysqli_close($link);

	?>

</body>
</html>
