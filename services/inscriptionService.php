<?php
session_start();
include("../model/fonctions.php");



if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])){
    $pseudo=$_POST['pseudo'];
    $email=$_POST['email'];
    $password=$_POST['password'];
                
    var_dump($_POST);        
    $verifPseudo=verifPseudo($pseudo);
    $verifEmail=verifEmail($email);
                    
    // var_dump(empty($verifPseudo));
    // var_dump($verifPseudo);               
        if(!empty($verifPseudo)){
            $erreur = "Ce nom d'utilisateur est déjà utilisé.";
            echo $erreur;
        }
        if(!empty($verifEmail)){
            $erreur = "Cette adresse de email est déjà utilisée.";
            echo $erreur;
        }
        else{
            $resultat=inscription($pseudo,$email,$password);
        }
    
}




// // else{SELECT pseudo FROM user
// //         WHERE pseudo=$pseudo AND email=$email; 
    
// // }


//             $reponse = $pdo->query('SELECT pseudo FROM utilisateur WHERE pseudo = "' . $pseudo . '" ');
//             $pseudo = $reponse->fetch();
             
//             $reponse = $pdo->query('SELECT email FROM utilisateur WHERE email = "' . $email . '" ');
//             $email = $reponse->fetch();

//             if (strtolower($pseudo) == strtolower($pseudo['pseudo']))
//             {
//                 $erreur = "Ce nom d'utilisateur est déjà utilisé.";
//             }
//             elseif (strtolower($email) == strtolower($email['email']))
//             {
//                 $erreur = "Cette adresse de email est déjà utilisée.";
//             }
//             else{
                

//                 $resultat=inscription($pseudo,$email,$password);
//             }
           
// }







?>