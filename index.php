<?php

require 'Personne.php';
require 'PersonneCRUD.php';

$PCRUD = new PersonneCRUD();

// $p1 = new Personne();
// $p1->setNom("bakkali");
// $p1->setPrenom("imad");
// $p1->setEmail("bakkali@gmail.com"); 
// $PCRUD->create($p1);

// $personnes = $PCRUD->getAll();
// var_dump($personnes);

// $p1 = $personnes[0];
// $p1->setNom("ITAHRIOUAN");
// $p1->setPrenom("ZAKARIA");
// $PCRUD->update($p1);
// echo "après modification";
//  var_dump($personnes);

 $personnes = $PCRUD->getAll();
 var_dump($personnes);
 $p1 = $personnes[1];
 $PCRUD->delete($p1);
 echo "après suppression";
 $personnes = $PCRUD->getAll();
 var_dump($personnes);
