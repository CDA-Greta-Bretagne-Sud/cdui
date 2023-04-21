<?php 
session_start();
include_once('header.php'); ?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Modèle de Blog </h1><h2>à partir d'un template html5</h2>
								<?php
					echo " <p> Bonjour". $_SESSION['user_login'] ."!</p>";
					echo "<p> votre token est :".$_SESSION['user_token'] ."</p>";
								?>
								<p>Logoden biniou degemer mat an penn ar bed lazhañ kemmañ levrioù Pempoull lost eget, yezh ur chal c’hwec’h peogwir seizhvet tasenn kontrol gwenan Ar Vouster berrloer.
									Veaj kurun Douarnenez bern Gwaien c’hoarzhin.</p>
							</header>
							<section class="tiles">
								<?php
								// je fais une requête qui va chercher les infos nécessaires
									$reponse=$pdo->query('SELECT id,titre,contenu, icone, image FROM article');
										$nbstyle=1;
								// afficher les resultats du select

								while($donnees=$reponse->fetch()){ // debut de boucle
								
								?>


								<article class="style<?php echo $nbstyle;?>">
									<span class="image">
										<img src="images/<?php echo $donnees['image']; ?>" alt="<?php $donnees['titre'];?>" />
									</span>
									<a href="article.php?id=<?php echo $donnees['id']; ?>">
										<h2><?php echo $donnees['titre'];?></h2>
										<h3><i class="<?php echo $donnees['icone'];?>"></i></h3>
										<div class="content">
											<p><?php echo $donnees['contenu'];?></p>
										</div>
									</a>
									<?php $nbstyle++; ?>
								</article>
							    <?php } // fin de boucle
										$reponse->closeCursor(); // terminer la requête
								?>

								
							</section>

							<div id="filtres-categories">
							<?php
								// je fais une requête qui va chercher les infos nécessaires
									$reponse=$pdo->query('SELECT id_categorie,libelle FROM categories');
						
								// afficher les resultats du select
							?>
								
							<ul>
							<?php
							while($donnees=$reponse->fetch()){ // debut de boucle
							?>

								<li><a href="categories.php?id=<?php echo $donnees['id_categorie'];?>" class='button'><?php echo $donnees['libelle'];?></a></li>

							<?php } // fin de boucle
									$reponse->closeCursor(); // terminer la requête
							?>
								
							</ul>

							

							</div>
								
						</div>

					</div>
					<?php include_once('footer.php'); ?>