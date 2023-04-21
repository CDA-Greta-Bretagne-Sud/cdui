<?php
session_start();
//inclure le fichier de configuration  pour se connecter à la bdd
require_once('connexionBdd.php');
require_once('util/util.php');
//recuperation des champs user et password
$login=$_POST['user'] ?? null;
$mdp= $_POST['password'] ?? null;
// controle en BDD si login et pwd ok
if($login !=null && $mdp!=null){
//requete sql

$query=("SELECT login,id_role,email  FROM utilisateur WHERE login like :l and pwd like :p ");
$q = $pdo->prepare($query);
//on crypte le mot de passe 
$mdpcrypte=sha1($mdp);
	$q->bindValue(':l',$login);
    $q->bindValue(':p',$mdpcrypte);
			$q->execute();
		$res = $q->fetch(PDO::FETCH_ASSOC);
        $role=$res['id_role'];
        $email=$res['email'];
        $q->closeCursor();
        $q = NULL;
		//si pas de login 
		if(empty($res)){
            //on supprime la session
            logout();
			// SI NOK-> on redirige vers la page index.php (page de connexion)
            header('Location: index.php');
		}
        else {
           
            //generation du token
            $token=generateToken(40);
            $_SESSION['user_token']=$token;
            $_SESSION['user_login']=$login;
            $_SESSION['user_role']=$role;
            $_SESSION['user_email']=$email;
            // si OK -> on redirige vers la page accueil.php
            header('Location: accueil.php');
        }
}
?>





