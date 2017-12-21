<?php

include_once './core/config.php';

include_once './core/connexion.php';

include_once './core/request.php';
 ?>

<!DOCTYpE html>
<html lang="fr">

<head>

<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>todo_app</title>

</head>

<body>

<div class="main" id="first">

	<div class="header">

		<ul>
	<li class="menu"><a href="#" id="title">MY TODOLIST</a></li>
	<li class="menu"><a href="#" id="more" onclick="document.getElementById('first').style.display = 'none';document.getElementById('second').style.display = 'block'" ><span class="plus">+</span></a></li>

	  </ul>

		<div class="ligne"></div>

	</div>

	<div class="container" id="container">

                <ul class="list" id="todo">
<?php foreach ($task as $task): ?>
									<li class="list-item">
											<span class="todo-check"></span>
											<header class="item-header">
													<h3 class="item-title"><a href="#"><span class="check">&#x25CF;</span><span class="span-item-title"><?php echo $task['task_title'] ?></span></a></h3>
											</header>
											<footer class="item-footer">
												<ul class="menu">
                          <form action="" method="POST">
        <button class="menu-item" type="submit" name="delete" value="<?php echo $task['task_id'] ?>">Delete</button>

														<li class="menu-item edit" id="edit">Edit</li>

												</ul>
												<div class="item-container">
														<p><?php echo $task['task_description'] ?></p>
												</div>
													<span class="done"><a href="#">&#10004;</a></span>
													<span><?php echo $task['task_start_timestamp'] ?></span>
													<span><?php echo $task['task_end_timestamp'] ?></span>
													<div class="ligne-item"></div>
											</footer>

									</li>

</form>

<?php endforeach ?>
<!--

										<li class="list-item">
												<span class="todo-check"></span>
												<header class="item-header">
														<h2 class="item-title"><a href="#"><span class="check-late">&#x25CF;</span><s class="late">todo</s></a></h2>

												</header>

												<footer class="item-footer">
													<ul class="menu">
															<li class="menu-item">Delete</li>
															<li class="menu-item">Edit</li>
													</ul>
													<div class="item-container">
															<p>item description</p>
													</div>
														<span class="done"><a href="#">&#10004;</a></span>
														<span>start at</span>
														<span>end at</span>
														<div class="ligne-item"></div>
												</footer>
										</li> -->

                </ul>

	</div>





	<div class="footer">
<div class="ligne-footer"></div>
			<ul>
		<li class="menu-footer"><a href="#">All task</a></li>
		<li class="menu-footer"><a href="#">Todo task</a></li>
		<li class="menu-footer"><a href="#">Done task</a></li>

			</ul>

		</div>

	</div>

	<div class="next" id="second">


    <div class="header">

  		<ul>
  	<li class="menu"><a href="#" id="title">MY TODOLIST</a></li>
  	<li class="menu"><a href="#" id="add" onclick="document.getElementById('second').style.display = 'none';document.getElementById('first').style.display = 'block'" ><span class="moins">x</span></a></li>

  	  </ul>

  		<div class="ligne"></div>

  	</div>


<div class="container" id="container-next">

<form action="" method="POST">

          <h3 class="title">TITLE</h3>

            <input size="100%" type="text" name="task_title" placeholder="My todo title">


        <div class="ligne-item"></div>

        <h3>DESCRIPTION</h3>

          <input size="100%" type="text" name="task_description" placeholder="My todo description">


      <div class="ligne-item"></div>

      <h3>START AT</h3>

        <input size="100%" type="date" name="task_start_timestamp" placeholder="December 12, 2 PM">


<div class="ligne-item"></div>

      <h3>END AT</h3>

        <input size="100%" type="date" name="task_end_timestamp" placeholder="December 12, 2 PM">

<div class="ligne-item"></div>




</div>




<div class="footer">
<div class="ligne-footer"></div>
    <ul>
  <li class="menu-footer"><a href="#">&nbsp;</a></li>
  <li class="menu-footer"><a href="#">&nbsp;</a></li>
  <button class="menu-footer" type="submit" name="addTask" value="addTask">ADD TASK</button>

    </ul>

  </div>
</form>

	</div>

<!-- form update -->

  <div class="next-update" id="third">


    <div class="header">

  		<ul>
  	<li class="menu"><a href="#" id="title">MY TODOLIST</a></li>
  	<li class="menu"><a href="#" id="add" onclick="document.getElementById('third').style.display = 'none';document.getElementById('first').style.display = 'block'" ><span class="moins">x</span></a></li>

  	  </ul>

  		<div class="ligne"></div>

  	</div>


<div class="container" id="container-next">

<form action="" method="POST">

          <h3 class="title">TITLE</h3>

            <input id="taskTitle" size="100%" type="text" name="task_title">


        <div class="ligne-item"></div>

        <h3>DESCRIPTION</h3>

          <input size="100%" type="text" name="task_description" value="<?php echo $task['task_description']; ?>">


      <div class="ligne-item"></div>

      <h3>START AT</h3>

        <input size="100%" size="100%" type="date" name="task_start_timestamp" value="<?php echo $task['task_start_timestamp']; ?>">


<div class="ligne-item"></div>

      <h3>END AT</h3>

        <input size="100%" size="100%" type="date" name="task_end_timestamp" value="<?php echo $task['task_end_timestamp']; ?>">

<div class="ligne-item"></div>

</div>


<div class="footer">
<div class="ligne-footer"></div>
    <ul>
  <li class="menu-footer"><a href="#">&nbsp;</a></li>
  <li class="menu-footer"><a href="#">&nbsp;</a></li>
  <button class="menu-footer" type="submit" name="addTask" value="addTask">ADD TASK</button>

    </ul>

  </div>
</form>

	</div>



<script type="text/javascript"  src="script.js"></script>

<script type="text/javascript">
// var todo = document.getElementById('edit');
// var main = document.getElementById('first');
// var update = document.getElementById('third');
//
// todo.onclick = function(){
//    main.style.display = 'none';
//    update.style.display = 'block';
// }
</script>
</body>

</html>
