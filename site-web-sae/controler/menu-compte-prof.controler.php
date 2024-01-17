<?php
require_once('../model/DAO.class.php');
//require_once('../model/Prof.class.php');
require_once('../framework/view.class.php');

//ajout des fonctions de Prof.class.php pour se connecter au serveur et récupérer le professeur connecté dans la base de données ici
//et remplacer les valeurs des variables ci dessous 
$login = "default";
$nom = "default";
$prenom = "default";
$mail = "default";
$mdp =  "default";




$view = new View();

$view->assign('login', $login);
$view->assign('nom', $nom);
$view->assign('prenom', $prenom);
$view->assign('mail', $mail);
$view->assign('mdp', $mdp);
$view->display('menu-compte-prof.view.php');
?>