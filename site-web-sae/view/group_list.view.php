<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">
    <title>Groupes</title>
</head>
<body>
    <header>
        <div></div>
        <nav>
            <a  href="acceuil.ctrl.php">Accueil</a>
            <a id="playbutton" href="scenario.ctrl.php">Jouer !</a>
            <a href="statistiques.ctrl.php">Statistiques</a>
            <a class="selected">Groupes</a>
            <a href="menu-compte-prof.controler.php">Mon compte</a>
        </nav>
        <form action="../logout.php" method="post">
            <button type="submit" name="submit" value="logout">Logout</button>
        </form>
    </header>
    <main>

        <form class="search-bar" action="">
            <input type="text" name="" id="groupsearch" placeholder="">
            <button type="">rechercher !</button>
        </form>


        

        <!-- à générer avec PHP -->
        <div class="groupe">
            <div>
               <span>Groupe 1 <a href="groupe_option.ctrl.php" title="Éditer le groupe"> <img src="../img/pen.png" class="pen"> </a></span>
               <span class="dropdown">x membres  <img onclick="display(event)" src="../img/arrowdropdown.png"> </span>
            </div>

            <div class="eleve">
                <span>eleve 1 <a href=""> <img src="../img/engrenage.png" class="engrenage"> </a></span>
                <hr>
                <span>eleve 2 <a href=""> <img src="../img/engrenage.png" class="engrenage"> </a></span>
                <hr>
                <span><a href="creer_eleve_usr.ctrl.php" title="Créer et ajouter un élève au groupe"><img src="../img/plus.svg" alt="nada" class="plus"></a></span>
            </div></div> <!-- attention a l'espace  -->

            <!-- à générer avec PHP -->
            <div class="groupe">
                <div>
                <span>Groupe 2 <a href="groupe_option.ctrl.php" title="Éditer le groupe"> <img src="../img/pen.png" class="pen"> </a></span>
                <span class="dropdown">x membres <img src="../img/arrowdropdown.png" onclick="display(event)"></span> 
                </div>
    
                <div class="eleve">
                    <span>eleve 1 <a href=""> <img src="../img/engrenage.png" class="engrenage"> </a></span>
                    <hr>
                    <span>eleve 2 <a href=""> <img src="../img/engrenage.png" class="engrenage"> </a></span>
                    <hr>
                    <span><a href="creer_eleve_usr.ctrl.php" title="Créer et ajouter un élève au groupe"><img src="../img/plus.svg" alt="nada" class="plus"></a></span>
                </div></div> <!-- attention a l'espace  -->
                <div class="flex">
                <a href="creation_groupe.ctrl.php"><button type="button">Créer un groupe</button></a>
                </div>
    </main>
    <script src="../js/main.js"></script>


</body>
</html>