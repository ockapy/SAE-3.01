<?php
require_once(__DIR__.'/model/DAO.class.php');
require_once(__DIR__.'/model/Eleve.class.php');

$compteur = Eleve::count();
var_dump($compteur);

?>