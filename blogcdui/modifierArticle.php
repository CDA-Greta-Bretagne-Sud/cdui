<?php
session_start();
require_once('util/util.php');
//on controle l'authentification si admin (4) et présence du token
if(auth()=="OK" && $_SESSION['user_role']==4){
    require_once('layouts/header.php');
       //on récupere l'id de l'url 
   $id_article=($_GET['id']) ?? null;
//on recupere les valeurs de l'article par l'id
$query="SELECT titre,contenu ,image, icone,id_categorie FROM article  WHERE id=:i";
$q =$pdo->prepare($query);

	$q->bindValue(':i',$id_article);
	$q->execute();
	$res = $q->fetch(PDO::FETCH_ASSOC);
//si pas d'enregistrement, on leve une exception
if(empty($res)){
    throw new Exception(); 
}			
$q->closeCursor();
$q = NULL;
//affichage de la catégorie
$nomcat=null;
switch($res['id_categorie']){
        case 1: $nomcat= "News";
        case 2: $nomcat= "Tutoriel";
        case 3: $nomcat= "Information";
}
?>
      
        <section id="lesposts" style="margin:20px auto 0">
     <div class="container-fluid">
    <form method='POST' action='validModifArticle.php'>
    <div class='form-group'>
        <div class='form-row'></div>
            <label class='col-md-3' for='titre'>Titre</label>
            <input type='text' class='form-control' name='titre' value="<?php echo $res['titre'] ?>" placeholder="Veuillez rentrer le titre de l'article" required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='contenu'>Contenu</label>
            <input type='text' class='form-control' name='contenu' value="<?php echo $res['contenu'] ?>"  placeholder="Veuillez rentrer le contenu de l'article" required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='image'>Image</label>
            <input type='text' class='form-control' name='image' value="<?php echo $res['image'] ?>" placeholder="Veuillez rentrerle nom de l'image" required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='icone'>Icone</label>
            <input type='text' class='form-control' name='icone' value="<?php echo $res['icone'] ?>"placeholder="Veuillez rentrer le nom de l'icone" required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='categorie'>Catégorie</label>
            <select name="categorie" required>
        <option value="<?php echo $res['id_categorie'] ?>"><?php echo $nomcat;?></option>
        <option value="1">News</option>
        <option value="2">Tutoriel</option>
        <option value="3">Information</option>
        </select>
        </div>
    </div>
    <input type="hidden" name="id_article" value="<?php echo $id_article;?>">
    <button class='btn btn-primary' type='submit'>Modifier</button>
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