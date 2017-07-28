<?php

include_once("./model/fonctions.php");
$page = getPage();


/***
 * Alfonso: Je vois que tu as eu des difficultés à appréhender la structure MVC.
 * Il faut encore s'entrainer pour voir comment les fichiers intéragissent entre eux
 * il est évident qu'il faut un peu d'entrainement pour absorber tout ça.
 *
 * Je pense que tu as compris le SQL mais il faut travailler le modèle MVC pour visualiser
 * et ainsi être plus productif.
 *
 * Tu n'es pas le seul. Quelques personnes ont eu du mal avec ça. Il faut encore travailler!
 */


/**
 * Alfonso: je vois que tu veux contrôler la session. et faire un redirect si la session
 * n'existe pas en effet c'est ce qu'il faut faire mais que à certaines pages....
 */
// if(!isset($_SESSION[id])){
//     header('location:views/inscription.php');
// }
// else{

// }
    
 switch ($page) {
      case 'connexion':
        //1) dans un premier temps avoir nos données
        //2) remplir notre template avec ces données
        // 2) on complete le template avec nos variables

        
        

        include("views/connexion.php");
        break;

      case 'inscription':
        // $user = getUser();
        // $description = getDescription();
        include("views/inscription.php");
        break;
      
      case 'post':
        $sujet = "Couleur Moto";
        $post_cat = getPostByCateg($sujet);
        
        include("views/post.php");
      break;
      
      case 'acceuil':
        include("views/acceuil.php");
      break;

      case 'viewpost':
        include("views/viewPost.php");
      break;
      
 }