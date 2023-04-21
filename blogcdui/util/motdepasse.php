<!doctype html>
<html lang="fr">
<head>
    <title> Tools Password</title>
</head>
<body>
    <form action="#" method="POST">
<label> Saisissez un mot de passe pour crypter votre password:</label>
    <input type="text" name="pwd"/>
<input type="submit" value="crypter"/>
</form>
<?php
$pwd=$_POST['pwd'] ?? null;
if($pwd!=null){
echo "<p> mot de passe crypté en md5:".md5($pwd)."</p>";
echo "<p> mot de passe crypté en sha1:".sha1($pwd)."</p>";

}
?>

</body>
</html>

