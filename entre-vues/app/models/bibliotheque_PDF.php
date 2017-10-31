<?php include '../views/parts/header.php' ?>	
<?php include '../views/parts/sidebar.php' ?>
<link href="../../public/asset/css/sidebar2.css" rel="stylesheet">	
	<div class="content">

		<div id="sidebar"></div>

		<h2>Librairie PDF libre de droit</h2>


		<table class="tabPDF">
				
				<tr>
						<th>Titre du pdf</th>
						<th>Description</th>
						<th>Langue</th>
						<th>Poids</th>
						<th>Téléchargement</th>
				</tr>
				<?php 
					while ($donnees = $tabPDF->fetch(PDO::FETCH_ASSOC))
						{
					// Je ferme php pour pouvoir mettre de l'html
					 ?>
					<tr>
				       <td>
				       	
				       	<h3><a href="<?php echo $donnees['pdf_url_pdf']; ?> " target="blank"><?php echo $donnees['pdf_titre']; ?></a></h3>
				       </td>
				       <td width="40%"><?php echo $donnees['pdf_resume']; ?></td>
				       <td ><?php echo $donnees['pdf_langue']; ?></td>
				       <td width="10%"><?php echo $donnees['pdf_poids']; ?> Mo</td>
				       <td width="5%">
					       	<div><a href="<?php echo $donnees['pdf_url_pdf']; ?>"><img src="../../public/asset/images/pdf.png" alt="<?php echo $donnees['pdf_titre']; ?>"></a>
					       	</div>
				       </td>
				    </tr>
				<?php
					}
					$tabPDF->closeCursor(); // Termine le traitement de la requête
					?>
			
			 
		</table>


		<div class="suite"><a href="">Précédent</a> l <a href="">Suivant</a></div>
		
	</div>

<?php include '../views/parts/footer.php' ?>