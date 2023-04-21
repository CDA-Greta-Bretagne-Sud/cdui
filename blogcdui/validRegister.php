<?php
//inclure le fichier de configuration  pour se connecter à la bdd
require_once('connexionBdd.php');
//recuperation des champs user et password
$login=$_POST['user'] ?? null;
$mdp= $_POST['password'] ?? null;
$email=$_POST['email'] ?? null;
// controle en BDD si login et pwd ok
if($login !=null && $mdp!=null && $email!=null){
//TODO requete sql
try{
$query="INSERT INTO utilisateur(login,pwd,email) VALUES (:l,:p,:e)";
//préparation et compilation de la requete SQL
$q=$pdo->prepare($query);
$q->bindValue(':l',$login);
//cryptage mot de passe
$mdpcrypte=sha1($mdp);
$q->bindValue(':p',$mdpcrypte);
$q->bindValue(':e',$email);
//exécution de la requete SQL 
$q->execute();
$q->closeCursor();
$q=null;
echo "<p> Insertion réussie en BDD!</p>";
echo "<p> Vous pouvez vous connecter en cliquant <a href='index.php'>ici</a></p>";
}catch(Exception $e){
echo "<p> Une erreur s'est produite, L'insertion de l'utisateur a échoué.</p>";
}	
}
?>





