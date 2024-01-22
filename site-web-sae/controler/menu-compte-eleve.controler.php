<?php
require_once('../model/DAO.class.php');
//require_once('../model/Eleve.class.php');
require_once('../framework/view.class.php');

//ajout des fonctions de Eleve.class.php pour récupérer l'élève connecté dans la base de données ici
//et remplacer les valeurs des variables ci dessous 
$login = "default";
$nom = "default";
$prenom = "default";
$profRef = "default";
$mdp =  "default";




$view = new View();

$view->assign('login', $login);
$view->assign('profRef', $profRef);
$view->assign('mdp', $mdp);
$view->display('menu-compte-eleve.view.php');
?>