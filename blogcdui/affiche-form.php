<?php include_once('header.php'); ?>

<?php 
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $message=$_POST['message'];
?>

<div id="main" style="width:60%margin:0 auto;">
    <h2>votre demande</h2>
    <?php
        echo "nom : $nom <br>";
        echo "email : $email <br>";
        echo "message : $message <br>";
    ?> 



<?php include_once('footer.php'); ?>