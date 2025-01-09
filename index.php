<?php

require 'Personne.php';
require 'PersonneCRUD.php';

$PCRUD = new PersonneCRUD();

$personnes = $PCRUD->getAll();

var_dump($personnes);

