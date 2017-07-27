<?php
/**
 * Alfonso: pas de connexion PDO ici. Il faut que ça soit que dans les fonction.
 * En l'occurence dans la fonction connexion();
 */

try
{
$db = new PDO('mysql:host=localhost;dbname=myforum', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>