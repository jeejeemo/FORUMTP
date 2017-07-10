<?php
var_dump($_POST);

//$variables = $_POS

if(isset($_POST['pseudo']) && isset($_POST['password'])){


    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    connexion();

    
    
    // $_SESSION['connexion'][]=
    // [
    //         'pseudo'=>$pseudo,
    //         'password'=>$password ,
    //      
    // ];

}
else{
    header("location: index.php?page=inscription");
}

