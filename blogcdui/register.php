<!doctype html>
<html lang="fr">
  <head>
  	<title>Register</title>
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
					<h2 class="heading-section">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Créer un compte</h3>
						<form action="validRegister.php" class="login-form" method="POST">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" name="user" placeholder="Selectionnez un nom d'utilisateur" required>
		      		</div>
	            <div class="form-group">
	              <input type="password" class="form-control rounded-left" name="password" placeholder="Selectionnez un Mot de passe" required>
	            </div>
                <div class="form-group">
	              <input type="email" class="form-control rounded-left" name="email" placeholder="Selectionnez un Email" required>
	            </div>
	            <div>
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">S'enregistrer</button>
                    <button type="reset" class="btn btn-primary rounded p-3 px-5">Effacer</button>
                </div>
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

