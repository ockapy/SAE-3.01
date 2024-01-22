<?php

// Ouverture de la session
session_start();

// Fermeture
session_destroy();

// Retourne au login
include("view/connect_eleve.view.php");

