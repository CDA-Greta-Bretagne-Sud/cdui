<?php
//demarrage de la session
session_start();
//on supprime le token dans le cas ou on se deconnecte
$_SESSION['user_token']='';
?>
<!doctype html>
<html lang="fr">
  <head>
  	<title>Connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<a href="index.html" class="logo">
						<span class="symbol"><img src="images/logo.svg" alt="" width="70"/></span>
					</a>
					<h2 class="heading-section">Connexion (login: toto, pwd: titi)</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Vous avez un compte ?</h3>
						<form action="auth.php" class="login-form" method="POST">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" name="user" placeholder="Nom d'utilisateur" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" name="password" placeholder="Mot de passe" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-100 text-center">
	   
				<a href="#">Mot de passe oublié</a>
				<br/>
				<a href="register.php">S'enregistrer</a>
								</div>
							
	            </div>
	            
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Se connecter</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

