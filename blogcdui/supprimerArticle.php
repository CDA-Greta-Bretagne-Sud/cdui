<?php
session_start();
require_once('util/util.php');
//on controle l'authentification si admin (4) et présence du token
if(auth()=="OK" && $_SESSION['user_role']==4){
    require_once('layouts/header.php');

   //on récupere l'id de l'url 
   $id_article=($_GET['id']) ?? null;
?>
     <div class="container">
  <?php
   //requete SQL
   try{
    //préparation de requete sql
    $query="delete from article where id=:id";
    //préparation et compilation de la requete SQL
    $stmt=$pdo->prepare($query);
    //association du placeholder avec le parametre $id_artile
    $stmt->bindValue(':id',$id_article);
    //exécution de la requete SQL 
    $stmt->execute();
    //on enleve le verrou de la table pour rendre la table de nouveau accessible
    $stmt->closeCursor();
    //je libere les ressources pour gagner des ressources sur le serveur
    $stmt=null;
    echo "<h3><img src='images/check.png'>L'enregistrement numero $id_article est supprimé de la BDD!</h3>";

    }catch(Exception $e){
        echo "C'est quoi ce bordel! detail de l'erreur $e";
    }
  ?>
  </div>
<?php
    require_once('layouts/footer.php');
}
else 
header('Location: accueil.php');
?>
