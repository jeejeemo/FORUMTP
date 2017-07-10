<?php

include_once("./model/fonctions.php");
$page = getPage();


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
 }