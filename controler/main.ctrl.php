<script type="text/javascript" src="../framework/phaser.js"></script>

<?php
// 

// Partie principale

// Inclusion du framework
include_once(__DIR__."/../framework/view.class.php");



////////////////////////////////////////////////////////////////////////////
// Construction de la vue
////////////////////////////////////////////////////////////////////////////
$view = new View();

// Charge la vue

$view->display("index.view.php");

?>

<script src="./main.ctrl.js"></script>
