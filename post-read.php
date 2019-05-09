<?php
// Récupérer les datas du formulaire
$login = isset($_POST['login']) ? trim($_POST['login']) : null;
$password = isset($_POST['password']) ? password_hash( $_POST['password'],PASSWORD_ARGON2I) : null;

//die($password);

//Si login vide > redirectpost.php + e
if(empty($login)){
    header('Location: post.php?error=1');
    exit();
}
//Si password vide > redirect post.php + e
if(empty($password)|| !password_verify("poulpe2000",$password)){
    header('Location: post.php?error=2');
}
//Démarrage de session
session_start();
// Si password != "poulpe2000" > redirect post.php + e
//print_r($_SESSION);
// Si tout est ok > redirect vers bienvenu.php avec affichage du login
$_SESSION['login']= $login;
header('Location: bienvenue.php');