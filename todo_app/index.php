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
<link rel="stylesheet" href="calendar.css">
<title>todo_app</title>
<style media="screen">
html {
  overflow:   scroll;
}
::-webkit-scrollbar {
    width: 0px;
    background: transparent; /* make scrollbar transparent */
}
body {
font-family: sans-serif;
font-size: 1em;
color: grey;
margin:0;
background-color: white;

}
div.header{
border: solid 0px red;
background-color: white;
overflow: hidden;
position: fixed; /* Set the navbar to fixed position */
top: 0; /* position the navbar at the top of the page */
width: 100%; /* Full width */
}
div.container{
border: solid 0px yellow;
position: inherit;
width: 90%;
margin-left: 5%;
margin-top:5.5%;
margin-bottom:95px;
}
#container:after {
  content: "";
  display: table;
  clear: both;
}
.list-item{
border: solid 0px green;
width: 100%;
}
div.footer{
border: solid 0px blue;
background-color: white;
position: fixed;
left: 0;
bottom: 0;
width: 100%;

}
ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: white;
}
a {
	text-decoration: none;
	color: grey;
	outline: 0;
}
li {
float: left;
width: 50%;
}
li.menu-footer  {
margin-top: 15px;
display: inline;
text-align: center;
padding: 20px 0px;
width: 33.33%;
}
li.menu-footer a:hover {
color: black;
}
li.menu a {
display: block;
color: grey;
text-align: center;
padding: 25px 16px;
}
li.menu-item  {
float: right;
display: inline;
width: 25%;
color: grey;
text-align: center;
padding: 25px 0;
text-decoration: none;
}
li.menu-item:hover {
background-color: #b3e0ff;
}
button.menu-item  {
float: right;
display: inline;
width: 25%;
color: grey;
text-align: center;
padding: 25px 0;
text-decoration: none;
border: none;
background: none;
}
button.menu-item:hover {
background-color: #b3e0ff;
}
.item-container{
display: inline-block;
	width: 100%;
	color: grey;
	text-align: center;
	padding: 25px 0;
	text-decoration: none;
	}
	footer {
		width: 100%;
		border: solid 0px pink;
		display: none;
	}
	footer:after {
	  content: "";
	  display: table;
	  clear: both;

	}
.item-footer span{
	display: block;
	float: left;
	border: solid 0px black;
	width: 25%;
	color: grey;
	text-align: center;
	padding: 25px 0;
	text-decoration: none;
}
.date{
float: right;
}
.plus {
	margin: 1.5%;
	border: solid 0.10em grey;
  border-radius:50%;
  -moz-border-radius:50%;
  -webkit-border-radius:50%;
	padding: 15px 20px;
}
.plus:hover {
	color: lightgreen;
	border: solid 0.10em lightgreen;
}
.moins {
	margin: 1.5%;
	border: solid 0.10em grey;
  border-radius:50%;
  -moz-border-radius:50%;
  -webkit-border-radius:50%;
	padding: 15px 20px;
}
.moins:hover {
	color: rgba(255, 99, 71, 0.8);
	border: solid 0.10em rgba(255, 99, 71, 0.8);
}
.check {
	padding: 35px 15px;
}
.done{
	margin-right: 22.5%;
	font-size: 1.5em;
	line-height: 0.8em;
}
.done a:hover{
	color: lightgreen;
}
.ligne{
	margin-left:5%;
	margin-right: 5%;
	margin-top: 1%;
	width: 90%;
border-bottom: solid 2px lightgrey;
}
.ligne-item{
	float: left;
	margin-left:5%;
	margin-right: 5%;
	width: 90%;
border-bottom: solid 2px lightgrey;
}
.ligne-footer{
	margin-left:5%;
	margin-right: 5%;
	width: 90%;
border-bottom: solid 2px lightgrey;
}
.ligne-task{
	float: left;
	margin-left:5%;
	margin-right: 5%;
	width: 100%;
border-bottom: solid 2px lightgrey;
}
s.late {
	text-decoration-color: red;
}
.check-late{
	color: red;
	padding: 35px 15px;
}

.next{
	display: none;
}

.main{
  display: block;
}

input {
border:none;
font-size: 1.25em;
color: grey;
padding: 0.5%  5%;
}

h3{
  margin-top: 2.5%;
}

.container-calendar{

}

div.panel{
  display: none;
}

  </style>

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
													<h2 class="item-title"><a href="#"><span class="check">&#x25CF;</span><?php echo $task['task_title'] ?></a></h2>
											</header>
											<footer class="item-footer">
												<ul class="menu">
                          <form action="" method="POST">
        <button class="menu-item" type="submit" name="delete" value="<?php echo $task['task_id'] ?>">Delete</button>

														<button class="menu-item">Edit</button>

												</ul>
												<div class="item-container">
														<p><?php echo $task['task_description'] ?></p>
												</div>
													<span class="done"><a href="#">&#10004;</a></span>
													<span><?php echo $task['task_start_timestamp'] ?></span>
													<span><?php echo $task['task_end_timestamp'] ?></span>
													<div class="ligne-item"></div>
											</footer>
<?php endforeach ?>
									</li>


<!--

									<li class="list-item">
											<span class="todo-check"></span>
											<header class="item-header">
													<h2 class="item-title"><a href="#"><span class="check">&#x25CF;</span><s>To DO</s></a></h2>
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
									</li>



                    <li class="list-item">
                        <span class="todo-check"></span>
                        <header class="item-header">
                            <h2 class="item-title"><a href="#"><span class="check">&#9675;</span>To DO</a></h2>
                        </header>

                        <footer class="item-footer" id="footer">
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
                    </li>



										<li class="list-item">
                        <span class="todo-check"></span>
                        <header class="item-header">
                            <h2 class="item-title"><a href="#"><span class="check">&#9675;</span>To DO</a></h2>
                        </header>

                        <footer class="item-footer" id="footer">
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
                    </li>



										<li class="list-item">
                        <span class="todo-check"></span>
                        <header class="item-header">
                            <h2 class="item-title"><a href="#"><span class="check">&#9675;</span>To DO</a></h2>
                        </header>

                        <footer class="item-footer" id="footer">
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
                    </li>



										<li class="list-item">
                        <span class="todo-check"></span>
                        <header class="item-header">
                            <h2 class="item-title"><a href="#"><span class="check">&#9675;</span>To DO</a></h2>
                        </header>

                        <footer class="item-footer" id="footer">
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
                    </li>



										<li class="list-item">
												<span class="todo-check"></span>
												<header class="item-header">
														<h2 class="item-title"><a href="#"><span class="check-late">&#x25CF;</span><s class="late"><? echo $task['task_title'];?></s></a></h2>

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

            <input type="text" name="task_title" value="My todo title">


        <div class="ligne-item"></div>

        <h3>DESCRIPTION</h3>

          <input type="text" name="task_description" value="My todo description">


      <div class="ligne-item"></div>

      <!-- <h3>START AT</h3>

        <input type="text" name="title" value="December 12, 2 PM">


<div class="ligne-item"></div>

      <h3>END AT</h3>

        <input type="text" name="title" value="December 12, 2 PM"> -->



</div>




<div class="footer">
<div class="ligne-footer"></div>
    <ul>
  <li class="menu-footer"><a href="#">&nbsp;</a></li>
  <li class="menu-footer"><a href="#">&nbsp;</a></li>
  <button type="submit" name="addTask" value="addTask">ADD TASK</button>

    </ul>

  </div>
</form>

	</div>



<script>

var acc = document.getElementsByClassName("list-item");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].onclick = function(){

    var panel = this.querySelector("footer");

    if (panel.style.display === "block") {
    panel.style.display = "none";
 } else {
        panel.style.display = "block";
  }
}

}

// var montre = document.getElementsByTagName("h2")[0];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[0];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[1];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[1];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[2];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[2];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[3];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[3];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[4];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[4];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[5];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[5];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[6];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[6];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }

</script>


</body>

</html>
