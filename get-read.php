<?php
//print_r($_GET);
$_GET;

//Cahier de charges
// >>Proposer l'achat de tutos en ligne à des utilisateurs en fonction de leurs langages préférés.
$prenom = null;
if(isset($_GET['prenom'])){
    $prenom = $_GET['prenom'];
}
//Mettre en place un form HTML pour collecter les données du user (pseudo,âge,ses langages préférés)
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : null ;
//Si form rempli à 100% > on affiche des produits tutos à vendre, en fonction des langages cochés.(ces produits doivent êtres stockés dans un tableau php> $produits. (à terme les produits proviendront d'une base de données)

// Si le champ pseudo est vide (afficher un message d'erreur)
// Si le champ âge est vide ou bien que l'âge saisi est invalide(sup. à 100 ou de type !integrer) > afficher message d'erreur

// les messages d'erreurs sont bloquants.Dès qu'un cas est déclenché on s'arrete là.Ex: pas de pseudo et pas de langage coché> on affiche que le message d'erreur lié au pseudo vide car c'est le premier problème rencontré.
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenu $prenom !</h1>

<h2>Voici les tutos que nous allons vous proposer</h2>


</body>
</html>
                          
