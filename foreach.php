<?php
$produit =  ['marque'=>"adidas",'modele'=>"Stan Smith",'prix_ht'=>55, 'description'=>"super basket adidas",'is_online'=>true];

$produit2 =  ['marque'=>"nike",'modele'=>"air max",'prix_ht'=>65, 'description'=>"super basket Nike",'is_online'=>true];

$produit3 = ['marque'=>'New Balance','modele'=>'MI373','prix_ht'=>75,
    'description'=>"super basket New Balance",'is_online'=>false];
$images = ['stan_smith.jpg','air_max.jpg','mi373.jpg'];

$produits = [$produit,$produit2,$produit3];

//Ex for each
foreach($produit as $cle=>$v){
    echo $cle.":".$v.PHP_EOL;
}
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
    <h1>Gestion des produits</h1>
    <table>
        <thead>
            <tr>
                <th>Marque</th>
                <th>Modele</th>
                <th>Prix HT</th>
                <th>Prix TTC</th>
                <th>Desc</th>
                <th>Photo</th>
                <th>En stock</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tbody>



    </table>
</body>
</html>

