

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>FORUM</h1>
    
    <form method="POST" action="services/new_post.php" enctype="multipart/form-data">
    <select name="categorie" rows="1" cols="45">Categorie
    <option value ="1">Auto
    <option value ="2">Moto
    <option value ="3">Informatique
    <option value ="4">Maison
    </select><br>
    <textarea name="sujet" rows="1" cols="45">Sujet</textarea><br>
    <textarea name="post" rows="8" cols="45">Votre message ici.</textarea></br>
    <p><input type="submit" value="Envoyer" action="" method="services/new_post.php"/></p>

    <?php
    /**
     * Alfonso: essaie d'utiliser les tag php que j'utilise dans mon exemple
     * plutôt que les accolades
     * exemple: <?php if(empty($_GET['mess']): ?>
     *          <?php endif; ?>
     */
        if (!empty($_GET['mess']))
{
    echo "<h2>votre post a été remis</h2>";
}
        if(!empty($_GET['error']))
{
    echo "<h2>votre post n'a pas été remis</h2>";

}
        ?>
</html>