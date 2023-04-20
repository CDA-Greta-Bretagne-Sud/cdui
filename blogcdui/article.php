<?php include_once('header.php'); ?>

<?php $id=$_GET['id'];
echo $id;
?>
				<!-- Main -->
			
					<div id="main">
					<?php $reponse=$pdo->query("SELECT titre,contenu, image FROM article WHERE id=$id");
					$nbstyle=1;

					while($donnees=$reponse->fetch()){
						
						?>

						<div class="inner">
							<h1><?php echo $donnees['titre'];?></h1>
							<span class="image main"><img src="images/<?php echo $donnees['image']; ?>" alt="<?php $donnees['titre'];?>" /></span>
							<p><?php echo $donnees['contenu'];?></p>
							<p>Plegad-Gwerann kant barzh bag nemet  forzh sec’hed aour dreist dall nijal, c’hwec’hvet Ar Releg-Kerhuon pegoulz mirout menoz nadoz den wenodenn fest gwin, brudet reas pep pesk wechoù Pempoull c’hav egistañ kelenner.</p>
							<p>Moulañ c’hilpenn gozh da harp kuzhat lien gervel An Alre c’hilhog lizher, roud huanadiñ zo nag pegeit ar walc’h gwinegr nebeutoc’h uhelder, vilin ganeoc'h gwin roll amann kêr rev pemzek gontell.</p>
						</div>

					</div>

					<?php } // fin de boucle
										$reponse->closeCursor(); // terminer la requête
								?>

<?php include_once('footer.php'); ?>