<?php

//Récupérer la session
session_start();
//Vérification des données stockées ds la session  c à d: le user est il bien passé par l 'identification
$is_logged = isset($_SESSION['login']) ? true: false;
//Si $is_logged > false > redirect post.php + erreur
if($is_logged == false){
header('Location: post.php?error=3');
exit();
}
?>