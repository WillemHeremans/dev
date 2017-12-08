//****************************************DANS MON FICHIER JS***************************************

function start () {
	ajax = new XMLHttpRequest();
	ajax.open('POST', 'core/request.php', true);
	ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	//J'ENVOIE A MON FICHIER PHP
	ajax.send('start'); //J'envoie le message 'start'

	//JE RECOIT DE MON FICHIER PHP
	ajax.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {

			let tasks = JSON.parse(this.responseText); //Je reçoit un tableau Json que je dois parser (Avec JSON.parse()) et mets dans ma variable tasks

			for (i in tasks) {
				App.setTask(tasks[i]); // Pour chaque élément de mon tableau j'appelle la fonction setTask qui va la placer dans mon fichier html
			}
		}
		else {
			console.log('ALL YOUR BASES ARE BELONG TO US'); // I see you are a man of culture aswell
		}
	};
}




//MA FONCTION SETTASK
function setTask (task) {

	// Creation de mon li que je met dans une variable listItem
	let listItem 	= document.createElement('li');
	listItem.classList.add('list-item'); // Je donne une classe à mon li

	//Je remplis mon li avec tous les élements html nécessaire à afficher ma tache. 
	//J'utilise la méthode innerHTML sur listItem parce qu'elle me permet de créer du html sous forme de texte
	listItem.innerHTML = 	'<div class="item-inner">' + 

						 		'<div class="title">' + task.task_title +'</div>' + //Je place le titre de ma tache

						 		'<div class="content">' + task.task_description +'</div>' + //Je place la description de ma tache

						 		'<div class="infos">' +
						 			'Started on: ' + App.getHumanTime(task.task_start_timestamp) + //Je place le début de ma tache
									' End Time: '  + App.getHumanTime(task.task_end_timestamp) + //Je place la deadline de ma tache
								'</div>' +

								'<ul class="menuaction">' +

									//Je crée les élements done edit et delete à qui je donne l'id de ma tache
									'<li><a href="#" class="done" 	id="' + task.task_id +'">Done</a></li>' +
									'<li><a href="#" class="edit" 	id="' + task.task_id +'">Edit</a></li>' +
									'<li><a href="#" class="delete" id="' + task.task_id +'">Delete</a></li>' +

								'</ul>' + 

							'</div>';


	// EventListener qui s'occupe de faire apparaitre et disparaitre les infos de ma tache
	listItem.querySelector('.item-inner').addEventListener('click', 
		function (e) {
			e.preventDefault();

			// We select all the clildren of the clicked div
			let children = this.children;

			//If visible
			if (this.id == 'clicked') {
				this.style.backgroundColor = '#FEF9F4'; // background color is back to normal

				for (j = 0; j < children.length; j++) {
					if(j != 0) {
						children[j].style.display = 'none'; // Except for the title everything disappears
					}
				}
				this.id = 'hidden'; // The div changes id
			}
			else { // If invisible

				this.style.backgroundColor = '#EEEAEA'; // Background color goes to slighthy grey

				for (j = 0; j < children.length; j++) {
					if (children[j].className != 'menuaction') {
						children[j].style.display = 'block'; //	Make the divs visible
					}
					else {
						children[j].style.display = 'flex';  // Make the options links visible
					}
				}
				this.id = 'clicked'; // The div changes id
			}
		}
	);

	// eventListener sur done
	listItem.querySelector('.done').addEventListener('click', 
		function (e) {
			e.preventDefault();

			App.doneTask(this.id);
		}
	);

	// eventListener sur edit
	listItem.querySelector('.edit').addEventListener('click', 
		function (e) {
			e.preventDefault();

			App.goToNext();
			App.singleTaskById(this.id, App.setEditTask);
			document.getElementById('update').dataset.id = this.id;
		}
	);

	// eventListener sur delete
	listItem.querySelector('.delete').addEventListener('click', 
		function (e) {
			e.preventDefault();

			App.deleteTask(this.id);
		}
	);


	 
	// if qui détermine où ma tache va se placer dans mon html
	var location = '';

	if (task.task_ended_on_timestamp == null) { // Si la tache n'est pas encore terminée
		location = 'todolist';
	}
	else {

		if (task.task_ended_on_timestamp < task.task_end_timestamp) {// si la tache est finie à temps
			location = 'donelist';
		}
		else {
			location = 'tolatelist'; // Si la tache est finie en retard
		}
	}

	//Même if mais en version ternaire
	/*	let location = task.task_ended_on_timestamp == null ? 'todolist' : (task.task_ended_on_timestamp < task.task_end_timestamp ? 'donelist' : 'tolatelist');*/


	//Place la tache dans mon fichier html là où l'id = la valeur de la variable locatioN
	document.getElementById(location).appendChild(listItem);
}



//**********************************DANS MON FICHIER PHP*********************************************


// START
if (isset($_POST['start'])) {// Si mon php reçoit un message 'start'

	$response = $database->query("SELECT * FROM task"); //Prendre tout dans ma table task de ma database

	$response = $response->fetchAll(PDO::FETCH_ASSOC); //Mettre tout dans ma variable $response

	echo json_encode($response); //Envoyer tout à mon fichier Js sous format Json avec echo

}



//**********************************DANS MON FICHIER HTML*********************************************




<ul class="list" id="donelist">
	
	//Si tache pas finie

</ul>

<ul class="list" id="todolist">                      
 
	//Si tache finie à temps

</ul>

<ul class="list" id="tolatelist">

	//Si tache finie mais trop tard
    
</ul>