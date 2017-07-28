<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<form method="post" action="./services/connexionService.php" enctype="multipart/form-data">
	<fieldset><legend>Identifiants</legend>
	<label for="pseudo">* Pseudo :</label>  <input name="pseudo" type="text" id="" /> (le pseudo doit contenir entre 3 et 15 caractères)<br />
	<label for="password">* Mot de Passe :</label><input type="password" name="password" id="password" /><br />
	<p><input type="submit" value="Se connecter" /></p></form>
	
	</fieldset>	
</form>
	<a href="index.php?page=inscription">inscription</a>
	<br>
	<a href="index.php?page=deconnexion">deconnexion</a>
	

</body>
</html>
