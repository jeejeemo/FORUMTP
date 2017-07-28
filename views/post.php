

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
    <textarea name="sujet" rows="1" cols="45"></textarea><br>
    <textarea name="post" rows="8" cols="45"></textarea></br></form>
    <p><input type="submit" value="Envoyer" action="" method="services/new_post.php"/></p> <br>
    

    <?php
        var_dump($post_cat);
    //die();

        if (!empty($_GET['mess'])): ?>
        <h2>Votre post a bien été remis</h2>
        <?php endif; ?>

    <?php    
        if(!empty($_GET['error'])): ?>
        <h2>votre post n'a pas été remis</h2>
        <?php endif; ?>

    <h1> LISTE DES POSTS </h1>
        <?php 
        
        foreach($post_cat as $post_cat) {?>
            <td><?=$post_cat['category'];?></td><td><?=$post_cat['sujet'];?></td>
            
            
        
        <?php }; ?>
            
   
              

</html> 