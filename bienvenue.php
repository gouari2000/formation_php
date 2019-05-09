<?php
require 'session_check.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>bienvenue <?= $_SESSION['login'] ?></h1>
<h2>A propos de moi:</h2>
<form action="cookie.php" method="POST">
    <div>
        <label for="etat_civil">Votre état civil</label><br>
        <select name="etat_civil" id="etat_civil">
        <option value="celibataire">célibataire</option>
        <option value="marie">marié</option>
        <option value="divorce">divorcé</option>
        <option value="veuf">veuf</option>
        <option value="complique">compliqué</option>
        </select>
    </div>
    <div>
        <h2>Les animaux de compagnie</h2>
        <label>
            <input type="checkbox" value="chien" name="animaux[]">chien</label>
         <input type="checkbox" value="chat" name="animaux[]">chat</label>
        <input type="checkbox" value="poisson" name="animaux[]">poisson</label>
        <input type="checkbox" value="cochon" name="animaux[]">cochon </label>
        <input type="checkbox" value="renard" name="animaux[]">renard</label>
    </div>
    <input type="submit">
</form>
</body>
</html>