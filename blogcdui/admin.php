<?php 
session_start();
include_once('util/util.php');
if(auth()=="OK"&& $_SESSION['user_role']==4){
include_once('layouts/header.php'); 

        //TODO  requete sql de selection d'article
        $resultat=$pdo->query("SELECT a.id,a.titre,a.contenu, a.image , a.icone,u.login,c.libelle
         FROM article a, utilisateur u, categories c WHERE a.id_categorie=c.id_categorie and a.id_user=u.id");
         $enteteTab=<<<'DEBUTENTETETAB'
        <table>
        <thead>
            <tr>  
                <th>Titre</th>
                <th>Contenu</th>
                <th>Image</th>
                <th>Icone</th>
                <th>Auteur</th>
                <th>Catégorie</th>
            </tr>
        </thead>
        <tbody >
        DEBUTENTETETAB;
        //affichage de l'entete du tableau
        echo $enteteTab;  
        // afficher les résultats du select
            while($donnees=$resultat->fetch()){ //début de la boucle
                 echo " <tr><td> ".$donnees['titre'] ."</td>";
                 echo "<td>" .$donnees['contenu'] ."</td>";
                 echo "<td>" .$donnees['image'] ."</td>";
                 echo "<td>" .$donnees['icone'] ."</td>"; 
                 echo "<td>" .$donnees['login'] ."</td>"; 
                 echo "<td>" .$donnees['libelle'] ."</td>"; 
                 echo "<td><a href='modifierArticle.php?id=".$donnees['id']."'><img src='images/modif.png'/></a>";
                 echo "<a href='supprimerArticle.php?id=".$donnees['id']."'><img src='images/sup.png'/></a></td>" ;    
                 echo '</tr>';
            
         } // fin de la boucle
        $resultat->closeCursor(); // termine le traitement de la requete
        $finTab=<<<'FINTAB'
        </tbody>
        </table>
        FINTAB;
        echo $finTab;
        ?>


				

<?php include_once('layouts/footer.php'); 
}
else 
header('Location: index.php');
?>