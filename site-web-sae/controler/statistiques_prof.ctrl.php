<?php
require_once('../model/DAO.class.php');
require_once('../framework/view.class.php');

$log_eleve = $_GET['eleve'];
$eleve = Eleve::read($log_eleve);
$themes = array("Histoire de l'informatique", "Structures de donnée", "Bases de données",
    "Architectures matérielles, systèmes d'exploitation et réseaux", "Langages et programmation", "Algorithmique");
$groupes = Groupe::readGroupes($_SESSION['login']);

$view = new View();
$view->assign('eleve', $eleve);
$view->assign('themes', $themes);
$view->assign('groupes', $groupes);
$view->display('statistiques_prof.view.php');
?>