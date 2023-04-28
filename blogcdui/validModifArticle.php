<?php
session_start();
require_once('connexionBdd.php');
require_once('util/util.php');
//on controle l'authentification si admin (4) et présence du token
if(auth()=="OK" && $_SESSION['user_role']==4){
    require_once('layouts/header.php');
    try{
    //récupération des valeurs du tableau en saisissant les indexes (nom, prenom, dateNaiss numero rue ...)
     $id=($_POST['id_article']) ?? null;
    $titre=($_POST['titre']) ?? null;
    $contenu=($_POST['contenu']) ?? null;
    $image=($_POST['image']) ?? null;
    $icone=($_POST['icone']) ?? null;
    $categorie=($_POST['categorie']) ?? null;
    $auteur=($_SESSION['user_id'])?? null;

    //préparation de requete sql
    if($titre!=null && $contenu!=null && $image!=null && $icone!=null && $categorie!=null){
    $query="UPDATE article set titre=:t ,contenu=:c,image=:im,icone=:ic,id_categorie=:ca,id_user=:a where id=:i";
    //préparation et compilation de la requete SQL
    $stmt=$pdo->prepare($query);
    $stmt->bindValue(':t',$titre);
    $stmt->bindValue(':c',$contenu);
    $stmt->bindValue(':im',$image);
    $stmt->bindValue(':ic',$icone);
    $stmt->bindValue(':ca',$categorie);
    $stmt->bindValue(':a',$auteur);
    $stmt->bindValue(':i',$id);
        //exécution de la requete SQL 
    $stmt->execute();
    $stmt->closeCursor();
    echo "<h3><img src='images/check.png'>L'article a été mis à jour en  BDD!</h3>";
    }
    else {
    echo"<p>Une erreur s'est produite, la saisie des champs est obligatoire! </p>";
    }
    }catch(Exception $e){
    echo "C'est quoi ce bordel! detail de l'erreur $e";
    }
    require_once('layouts/footer.php');
}
else 
header('Location: accueil.php');
?>

?>
