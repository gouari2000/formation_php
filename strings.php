<?php
//include "commentaire.php";
require "commentaire.php";
//require_
$prenom = "Alain";
$nom = "Gouari";
$age =40;
$ville= "Paris";
$resultat = somme(4,23);
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
    <?php echo "<h1>Salut Alain</h1>"; ?>
    <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
        Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
        quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
        Il n'a pas fait que survivre cinq siècles,<?php echo $ville ?> mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.
        Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment,
        par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>

<?php if($age >=40) {
    echo "<h2>salut tu as quel age requis</h2><h2>";
}
?>

<?php if($age==40){ ?>
    <p>salut<?php echo $prenom?>. <br>Bienvenu sur notre site !</p>
<?php } ?>

<?php if($age <40) : ?>
<h4> Tu es trop petit !</h4>
<?php else :?>

    <h1>Bienvenu <?php echo $prenom ?></h1>
    <p>ville: <?= $ville ?></p>
<?php endif ?>

</body>
</html>
