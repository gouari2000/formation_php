<?php
/**
 * En vous référent à la documentation en ligne de PHP (php.net), transformer les chaines de caractères suivantes
 * selon les directives indiquées
 *
 *
 * 1_ Transformer une chaîne en majuscule en minuscule
 * 2_ Transformer en majuscule le premier caractère d'une chaîne
 * 3_ Transformer en majuscule le premier caractère de chaque mot d'une chaîne
 * 4_ Calculer le nombre de caractère présent dans une chaîne
 * 5_ Supprimer les espaces en début et fin d'une chaîne
 * 6_ Supprimer la première lettre d'une chaîne
 * 7_ Remplacer des caractères présents dans une chaîne par d'autres caractères
 *
 *
 *
 */
?>
1-

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<p>
<?php
$str_maj = "NEXT FORMATION";
$str_min = strtolower($str_maj);
?>

<p>la chaîne en maj <?php echo $str_maj ?> devient <?php echo $str_min ?> </p>

<?php
$foo_prl = 'next formation';
$foo_prm = ucfirst($foo_prl);


?>
 <p>en majuscule la premiere lettre <?php echo $foo_prl ?> devient <?php echo $foo_prm ?></p>

<?php
$foo_tt = 'next formation';
$foo_chmo = ucwords($foo_tt);
?>

<p>premier caractere de chaque mot d une chai <?php echo $foo_tt ?> devient <?php echo $foo_chmo ?></p>




</body>
</html>
