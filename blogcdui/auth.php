<?php
//inclure le fichier de configuration  pour se connecter à la bdd
require_once('connexionBdd.php');
//recuperation des champs user et password
$login=$_POST['user'] ?? null;
$mdp= $_POST['password'] ?? null;
// controle en BDD si login et pwd ok
if($login !=null && $mdp!=null){
//requete sql

$query=("SELECT login  FROM utilisateur WHERE login like :l and pwd like :p ");
$q = $pdo->prepare($query);

	$q->bindValue(':l',$login);
    $q->bindValue(':p',$mdp);

			$q->execute();
		$res = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();
        $q = NULL;
		//si pas de login 
		if(empty($res)){
			// SI NOK-> on redirige vers la page index.php (page de connexion)
            header('Location: index.php');
		}
        else {
            // si OK -> on redirige vers la page accueil.php
            header('Location: accueil.php?login='.$login);
        }
}
?>





