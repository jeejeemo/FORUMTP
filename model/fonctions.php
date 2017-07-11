<?php
function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<div id="error"><p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></div></body></html>');
}

function getPage(){
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = "connexion";
  }
  return $page;
}
function connexion(){

    $connexion = new PDO('mysql:host=localhost;dbname=tpmyforum;charset=UTF8','root','');
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $connexion;
}
function verifPseudo($pseudo){
    $connexion=connexion();
    $pdo=$connexion->prepare('SELECT * FROM utilisateur WHERE pseudo=:utpseudo');
    $pdo->execute(array(
    'utpseudo'=>$pseudo
    ));
   $utilisateur = $pdo->fetchAll(PDO::FETCH_ASSOC);
   return $utilisateur;
}

function verifEmail($email){
    $connexion=connexion();
    $pdo=$connexion->prepare('SELECT * FROM utilisateur WHERE email=:email');
    $pdo->execute(array(
    'email'=>$email
    ));
   $utilisateur = $pdo->fetchAll(PDO::FETCH_ASSOC);
   return $utilisateur;
}

function inscription($pseudo,$email,$password){
    $connexion=connexion();
    $pdo = $connexion->prepare('INSERT INTO utilisateur SET pseudo=:moi, email=:email, uPassword=:password ');
 $pdo->execute(array(
   'moi'=>$pseudo,
   'email' => $email,
   'password'=>$password
 ));
 $result = $pdo->rowCount();
  return $result;
}
function verifLogin($password,$pseudo){
    $connexion=connexion();
    $pdo=$connexion->prepare('SELECT * FROM utilisateur WHERE uPassword=:password AND pseudo=:pseudo');
    $pdo->execute(array(
    'password'=>$password,
    'pseudo'=>$pseudo
    ));
   $utilisateur = $pdo->fetchAll(PDO::FETCH_ASSOC);
   return $utilisateur;
}
?>  


