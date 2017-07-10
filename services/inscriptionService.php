<?php
session_start();
include("../model/fonctions.php");



if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])){

    $pseudo=$_POST['pseudo'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $resultat=inscription($pseudo,$email,$password);
    
}
else{
    
}












?>