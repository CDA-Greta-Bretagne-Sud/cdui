<?php include_once('header.php'); ?>

<h2>Nous contacter</h2>
<form action="affiche-form.php" method="post">
        <input type="text" name="nom" placeholder="votre nom">
        <input type="email" name="email" placeholder="votre email">
        <textarea name="message" placeholder="votre message"></textarea>
        <input type="submit" class="button" value="Envoyer">
    </form>
<?php include_once('footer.php'); ?>