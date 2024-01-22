<?php
//var_dump($_POST);
// Récupération des données du formulaire
$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';
$submit = $_POST['submit'] ?? '';

// Ouverture de la session
session_start();
//var_dump($_SESSION);

// Si la session connaît le login alors on s'est déjà connecté, on va sur la page principale
if (isset($_SESSION['login'])) {
  // Récupère le login pour la vue
  $login = $_SESSION['login'];
  // Charge la page de l'application et termine
  include("view/main.view.php");
  // C'est terminé !
  exit(0);
}

// On n'est pas déjà connecté, on examine ce qu'on doit faire
switch($submit) {
  case 'login':
    // Vérification du login et du mot de passe
    if (($login == 'vivarat') && ($password == '1')) {
      $_SESSION['login'] = $login;
      // Charge la page de l'application
      include("view/main.view.php");
      // Sort du switch après la connexion réussie
      break;
    } else {
      // Retourne sur le login en cas d'échec de connexion
      include("view/connect_eleve.view.php");
      // Sort du switch après l'échec de connexion
      break;
    }

  case 'eleve':
    include("view/connect_eleve.view.php");
    // Sort du switch après l'inclusion de la vue eleve
    break;

  case 'prof':
    include("view/connect_enseignant.view.php");
    // Sort du switch après l'inclusion de la vue enseignant
    break;

  default:
    // Envoi sur le login par défaut
    include("view/connect_eleve.view.php");
    // Sort du switch après l'inclusion du login par défaut
    break;
}
?>
