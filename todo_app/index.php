<?php
	echo "Hello world !";
?>

<!DOCTYpE html>
<html lang="fr">

<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style media="screen">

body {
font-family: sans-serif;
font-size: 1.5em;
color: grey;
margin:0;
background-color: white;
}
div.header{
border: solid 0.5px red;
background-color: white;
overflow: hidden;
position: fixed; /* Set the navbar to fixed position */
top: 0; /* position the navbar at the top of the page */
width: 100%; /* Full width */
}
div.container{
border: solid 0.5px yellow;
position: inherit;
width: 90%;
margin-left: 5%;
margin-top:150px;
margin-bottom:95px;
}
#container:after {
  content: "";
  display: table;
  clear: both;
}
.list-item{
border: solid 0.5px green;
width: 100%;
}
div.footer{
border: solid 0.5px blue;
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
li {
float: left;
width: 50%;
}
li.home {
width: 33.33%;
}
li a {
display: block;
color: grey;
text-align: center;
padding: 25px 16px;
text-decoration: none;
}
li a:hover {
background-color: #111;
}
li.menu-item  {
display: inline;
width: 50%;
color: grey;
text-align: center;
padding: 25px 0;
text-decoration: none;
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
		border: solid 0.5px pink;
		display: none;
	}
	footer:after {
	  content: "";
	  display: table;
	  clear: both;
	}
.item-footer span{
	display: block;
	float: right;
	border: solid 0.5px black;
	width: 33.33%;
	color: grey;
	text-align: center;
	padding: 25px 0;
	text-decoration: none;
}
li.menu-item:hover {
background-color: #b3e0ff;
}
.date{
float: right;
}
.plus {
	margin: 20px;
	border: solid 0.10em grey;
  border-radius:50%;
  -moz-border-radius:50%;
  -webkit-border-radius:50%;
	padding: 15px 20px;
}
.check {
	padding: 35px 15px;
}
.next{
	/*display: none;*/
}

  </style>

</head>

<body>


	<div class="header">

		<ul>
	<li class="name"><a href="#" id="name">MY TODOLIST</a></li>
	<li class="date"><a href="#" id="date"><span class="plus">+</span> ADD TASK</a></li>
	  </ul>

	</div>

	<div class="container" id="container">

                <ul class="list" id="todo">
                    <li class="list-item">
                        <span class="todo-check"></span>
                        <header class="item-header">
                            <h2><span class="check">&#9675;</span>To do...</h2>

                        </header>

                        <footer class="item-footer" id="footer">
													<ul class="menu">
															<li class="menu-item">Delete</li>
															<li class="menu-item">Edit</li>
													</ul>
													<div class="item-container">
	                            <p>item description</p>
	                        </div>
                            <span>start at</span>
                            <span>end at</span>
                        </footer>
                    </li>

                    <li class="list-item">
                        <span class="todo-check"></span>
                        <header class="item-header">
                            <h2><span class="check">&#x25CF;</span>To do...</h2>

                        </header>

                        <footer class="item-footer">
													<ul class="menu">
															<li class="menu-item">Delete</li>
															<li class="menu-item">Edit</li>
													</ul>
													<div class="item-container">
	                            <p>item description</p>
	                        </div>
                            <span>start at</span>
                            <span>end at</span>
                        </footer>
                    </li>
                </ul>

	</div>


	<div class="next-container">

	</div>


	<div class="footer">

		<ul>
	<li class="home"><a href="#home">All task</a></li>
	<li class="home"><a href="#home">Todo task</a></li>
	<li class="home"><a href="#home">Done task</a></li>

	  </ul>

	</div>

	<div class="next">


		<div class="header">

			<ul>
		<li class="name"><a href="#" id="name">MY TODOLIST</a></li>
		<li class="date"><a href="#" id="date"><span class="plus">+</span> ADD TASK</a></li>
			</ul>

		</div>



		<div class="footer">

			<ul>
		<li class="home"><a href="#home">All task</a></li>
		<li class="home"><a href="#home">Todo task</a></li>
		<li class="home"><a href="#home">Done task</a></li>

			</ul>

		</div>

	</div>



<script>

var montre = document.getElementsByTagName("h2")[0];

montre.onclick = function(){
var elem = document.getElementsByTagName("footer")[0];
if(elem.style.display == "block"){
    elem.style.display="none";
} else {
    elem.style.display="block";
}

}

var montre = document.getElementsByTagName("h2")[1];

montre.onclick = function(){
var elem = document.getElementsByTagName("footer")[1];
if(elem.style.display == "block"){
    elem.style.display="none";
} else {
    elem.style.display="block";
}

}

</script>

</body>

</html>
