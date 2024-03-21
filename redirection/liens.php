<?php 
try {
    $mysqlClient = new PDO("mysql:host=localhost;dbname=redirection;charest=utf8,root;");

}
catch (Exeption $e)
{
    die("Erreur : ".$e->getMessage())
}
$sqlQuery = "INSERT INTO maquette_html (acceuil) values (:acceuil)"

$insertdoc = $mysqlClient->prepare($sqlQuery);

$insertdoc->execute([

])
?>
