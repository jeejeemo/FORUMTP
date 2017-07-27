<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=myforum', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>