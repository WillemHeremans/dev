<?php include '../views/parts/header.php' ?>
<?php include '../views/parts/sidebar.php' ?>
<link href="../../public/asset/css/sidebar2.css" rel="stylesheet">
	<div class="content">

		<div id="sidebar"></div>

		<h2>Galerie photos</h2>

				<?php
					while ($donnees = $imgGalerie->fetch(PDO::FETCH_ASSOC))
						{
					// Je ferme php pour pouvoir mettre de l'html
					 ?>
					 <div class="photo">
						<img id="myImg" src="../../public/asset/images/<?php echo $donnees['photo_url']; ?>" alt="<?php echo $donnees['photo_title']; ?>">
						<div class="titre_photo"><?php echo $donnees['photo_title']; ?> </div>
						<div><?php echo $donnees['photo_download']; ?> téléchargement(s)</div>
					</div>

					<!-- The Modal -->
					<div id="myModal" class="modal">

					  <!-- The Close Button -->
					  <span class="close">&times;</span>

					  <!-- Modal Content (The Image) -->
					  <img class="modal-content" id="img01">

					  <!-- Modal Caption (Image Text) -->
					  <div id="caption"></div>
					</div>

					<script type="text/javascript">
	// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementsByTagName("img");
// var i;
//
// for (i = 0; i < img.length; i++) {
// img[i].onclick = function(){
// 	var modalImg = document.getElementsByClassName("modal-content");
// 	var captionText = document.getElementsByTagName("img");
// 	var modal = document.getElementById('myModal');
// 	modal.style.display = "block";
// 	modalImg.src = this.src;
// 	captionText.innerHTML = this.alt;
//   }
// }

var img = document.getElementsByTagName("img")[1];
var modalImg = document.getElementsByClassName("modal-content")[0];
var captionText = document.getElementsByTagName("img")[1];
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var img = document.getElementsByTagName("img")[3];
var modalImg = document.getElementById("img01");
var captionText = document.getElementsByTagName("img")[3];
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var img = document.getElementsByTagName("img")[5];
var modalImgFive = document.getElementById("img01");
var captionText = document.getElementsByTagName("img")[5];
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
		modalImgFive.height = "800";
}


var img = document.getElementsByTagName("img")[7];
var modalImg = document.getElementById("img01");
var captionText = document.getElementsByTagName("img")[7];
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var img = document.getElementsByTagName("img")[9];
var modalImg = document.getElementById("img01");
var captionText = document.getElementsByTagName("img")[9];
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var img = document.getElementsByTagName("img")[11];
var modalImg = document.getElementById("img01");
var captionText = document.getElementsByTagName("img")[11];
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}




// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
	</script>


				<?php
					}
					$imgGalerie->closeCursor(); // Termine le traitement de la requête
					?>

		<div class="suite"><a href="">Précédent</a> l <a href="">Suivant</a></div>

	</div>



<?php include '../views/parts/footer.php' ?>
