<?php 
session_start();
include_once('util/util.php');
if(auth()=="OK"){

include_once('layouts/header.php'); ?>

<h2>Nous contacter</h2>
<form action="affiche-form.php" method="post">
        <input type="text" name="nom" placeholder="votre nom">
        <input type="email" name="email" placeholder="votre email">
        <textarea name="message" placeholder="votre message"></textarea>
        <input type="submit" class="button" value="Envoyer">
    </form>
<?php include_once('layouts/footer.php'); 

}
else 
header('Location: index.php');
?>