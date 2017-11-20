<?php 

include_once 'config.php';

include_once 'connexion.php';

include_once 'request.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>TODO2</title>
 </head>
 <body>
 	<ul>
 		<?php foreach ($tasks as $task): ?>
 			<li>
 				<?php echo $task['id'] ?> -
 				<?php echo $task['title'] ?> -
 				<?php echo $task['description'] ?>
				<!-- <a href="index.php?delete=<?php echo $task['id'] ?>">Effacer!!!!</a> -->
 				<form action="" method="POST">
 					<button type="submit" name="delete" value="<?php echo $task['id'] ?>">Delete</button>
 				</form>
 			</li>
 		<?php endforeach ?>
 		 	<li>
 		 		<form action="" method="POST">
 		 			<input type="text" name="title">
 		 			<input type="text" name="description">
 					<button type="submit" name="addTask" value="addTask">Ajouter</button>
 		 		</form>
 		 	</li>

 	</ul>
 </body>
 </html>