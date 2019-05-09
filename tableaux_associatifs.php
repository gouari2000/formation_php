<?php
$notes_eleves = ['alain'=>15,
                    'marie'=>12,
                    'marc'=>1,
                    'bob'=>4,
                    'pierre'=>5];
$infos = ['prenom'=>'alain','nom'=>'gouari','age'=>40];

//Afficher la note d'un élève
echo $notes_eleves['marc'];
//affiche 1

$notes = [12,4,6,9,14];

$infos_eleve = ['prenom'=>'alain',
                'nom'=>'gouari',
                'age'=>40,
                "notes"=>$notes];

$infos_eleve2 = ['prenom'=>'marie',
    'nom'=>'ubeda',
    'age'=>35,
    "notes"=>$notes];


//2 function
print_r($infos_eleve);

var_dump($infos_eleve);

$eleves = [$infos_eleve,$infos_eleve2];
print_r($eleves);