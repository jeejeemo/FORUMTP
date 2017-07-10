<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=tpmyforum', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>