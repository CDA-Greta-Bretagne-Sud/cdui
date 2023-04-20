<?php
try{
$pdo=new PDO('mysql:host=localhost;dbname=blogcdui','root','');
}catch(PDOException $e){
echo 'Connexion échouée: '.$e->getMessage();
}