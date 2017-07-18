<?php

include_once("./model/fonctions.php");
$page = getPage();


/***
 * Alfonso: Je vois que tu as eu des difficulté à appréhender la structure MVC.
 * Il faut encore s'entrainer pour voir comment les fichiers intéragissent entre eux
 * il est évident qu'il faut un peut d'entrainement pour absorber tout ça.
 *
 * Je pense que tu as compris le SQL mais il faut travailler le modèle MVC pour visualiser
 * et ainsi être plus productif.
 *
 * Tu n'es pas le seul. Quelques personnes ont eu du mal avec ça. Il faut encore travailler!
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
      
      case 'debut':
      include("views/debut.php");
      break;
 }