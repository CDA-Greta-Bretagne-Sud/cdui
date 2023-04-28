<?php
session_start();
require_once('util/util.php');
//on controle l'authentification si admin (4) et présence du token
if(auth()=="OK" && $_SESSION['user_role']==4){
    require_once('layouts/header.php');
?>
      
        <section id="lesposts" style="margin:20px auto 0">
     <div class="container-fluid">
    <form method='POST' action='validAjoutArticle.php'>
    <div class='form-group'>
        <div class='form-row'>
            <label class='col-md-3' for='titre'>Titre</label>
            <input type='text' class='form-control' name='titre' placeholder="Veuillez rentrer le titre de l'article" required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='contenu'>Contenu</label>
            <input type='text' class='form-control' name='contenu' placeholder="Veuillez rentrer le contenu de l'article" required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='image'>Image</label>
            <input type='text' class='form-control' name='image' placeholder="Veuillez rentrerle nom de l'image" required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='icone'>Icone</label>
            <input type='text' class='form-control' name='icone' placeholder="Veuillez rentrer le nom de l'icone" required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='categorie'>Catégorie</label>
            <select name="categorie" required>
        <option value="">--Choisissez une catégorie--</option>
        <option value="1">News</option>
        <option value="2">Tutoriel</option>
        <option value="3">Information</option>
        </select>
        </div>
    </div>
    <button class='btn btn-primary' type='submit'>Ajouter</button>
    </form>
     </div>
    </section>
        </div>
        <?php
    require_once('layouts/footer.php');
}
else 
header('Location: accueil.php');
?>