<?php
session_start();
include("../model/fonctions.php");

// var_dump($_POST); 

if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $pseudo=$_POST['pseudo'];
    $email=$_POST['email'];
    $password=$_POST['password'];
                

    $verifPseudo=verifPseudo($pseudo);
    $verifEmail=verifEmail($email);                
    // var_dump($verifPseudo);
    // var_dump($verifEmail);
    // die();
        if(empty($verifPseudo)==false){
            header("location:../index.php?page=inscription&mess=1");
            // $erreur = "Ce nom d'utilisateur est déjà utilisé.";
            // echo $erreur;
        }
        if(empty($verifEmail)==false){
            header("location:../index.php?page=inscription&error=1");
            // $erreur = "Cette adresse de email est déjà utilisée.";
            // echo $erreur;
        }else{
            $resultat=inscription($pseudo,$email,$password);
            header("location:../index.php?page=inscription&success=1");
        }
    
}else{
            header("location:../index.php?page=inscription&champ=1");
        
    
}





?>