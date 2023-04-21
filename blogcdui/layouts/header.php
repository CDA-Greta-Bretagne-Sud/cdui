<?php include_once('connexionBdd.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <link rel="stylesheet" href="messtyles.css">
    </head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Mon Blog</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="accueil.php">Accueil</a></li>
							<li><a href="apropos.php">A propos</a></li>
							<li><a href="contact.php">Contact</a></li>
							<?php
							// si le role utiliszteur est un admin
							//on affiche l'item gestion des articles
							if($_SESSION['user_role']==4){?>
							<li><a href="admin.php">Gestion des Articles</a></li>
							<?php } ?>
							<li class="bouton"><a href="index.php">Se Déconnecter</a></li>
						</ul>
					</nav>
