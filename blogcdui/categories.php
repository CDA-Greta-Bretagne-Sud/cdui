<?php 
session_start();
include_once('util/util.php');
if(auth()=="OK"){
 include_once('layouts/header.php'); ?>

<?php
    $id=$_GET['id'];
    echo $id;
    ?>


<!-- Main -->
<div id="main">
<div class="inner">
<?php
		// je fais une requête qui va chercher les infos nécessaires
	$reponse=$pdo->query("SELECT libelle FROM categories WHERE categories.id_categorie=$id");
?>
<?php while($donnees=$reponse->fetch()){ // debut de boucle							
?>
<h2><?php echo $donnees['libelle'];?></h2>
<?php } // fin de boucle
        $reponse->closeCursor(); // terminer la requête
                        ?>

<section class='tiles'>
<?php
		// je fais une requête qui va chercher les infos nécessaires
	$reponse=$pdo->query("SELECT libelle,titre,contenu, image FROM article, categories WHERE categories.id_categorie=article.id_categorie AND categories.id_categorie=$id");
?>
        

    
   <?php while($donnees=$reponse->fetch()){ // debut de boucle
								
        ?>
        <article>
            <h3><?php echo $donnees['titre'];?></h3>
							<span class="image main"><img src="images/<?php echo $donnees['image']; ?>" alt="<?php $donnees['titre'];?>" /></span>
							<p><?php echo $donnees['contenu'];?></p>


        </article>
        <?php } // fin de boucle
        $reponse->closeCursor(); // terminer la requête
                        ?>
    </section>
</div>
</div>
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


<?php include_once('layouts/footer.php'); 
}
else 
header('Location: index.php');
?>
