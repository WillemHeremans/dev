  <link href="../../public/asset/css/sidebar.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("a.toggle").click(function(){
      $("div.toggle").toggle();
  });
});

$(document).ready(function(){
  $("a.show").click(function(){
      $("div.swow").show();
  });
});

$(document).ready(function(){
  $("a.hide").click(function(){
      $("div.hide").hide();
  });
});

</script>


<div class="moteur toggle">
	<form action="">
    	<div class="right">
	    	<a class="toggle"><i class="fa fa-2x fa-times-circle slide-toggle" aria-hidden="true"></i></a>
    	</div>

      <div class="toggle">


		<h2>Moteur de recherche</h2>
			<input type="text" class="moteurinput" placeholder="Mot clé">
		<select name="" id="" class="moteurinput">
			<option value="">Catégories</option>
			<option value="">Toutes</option>
			<option value="">Films</option>
			<option value="">Romans</option>
			<option value="">Jeunesse</option>
			<option value="">Mode d'emploi</option>
			<option value="">Instructions</option>
			<option value="">Educations</option>
		</select>
		<div class="block">
			Choix des langues :
			</div>
			<input type="checkbox" name="langue" value="en"> English<br>
			<input type="checkbox" name="langue" value="en"> French<br>
			<input type="checkbox" name="langue" value="en"> Dutch<br>
			<input type="checkbox" name="langue" value="en"> Espagnol<br>
			<input type="checkbox" name="langue" value="en"> Allemand<br>
			<input type="checkbox" name="langue" value="en"> Autre<br>

		<button class="btn_valid">Rechercher</button>

		<a href="" class="block">Plus de critères ></a>
 </form>
 </div>
</div>
