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
            <a  href="#">Accueil</a>
            <a id="playbutton" href="#">Jouer !</a>
            <a  href="#">Statistiques</a>
            <a class="selected" href="">Groupes</a>
            <a href="#">Mon compte</a>
        </nav>
        <form action=""><button type="submit">Se Déconnecter</button></form>
    </header>
    <main>

        <form class="search-bar" action="">
            <input type="text" name="" id="groupsearch" placeholder="">
            <button type="">rechercher !</button>
        </form>


        

        <!-- à générer avec PHP -->
        <div class="groupe">
            <div>
               <span>Groupe 1 <a href="" title="Éditer le groupe"> <img src="../img/pen.png" class="pen"> </a></span>
               <span class="dropdown">x membres  <img onclick="display(event)" src="../img/arrowdropdown.png"> </span>
            </div>

            <div class="eleve">
                <span>eleve 1 <a href=""> <img src="../img/engrenage.png" class="engrenage"> </a></span>
                <hr>
                <span>eleve 2 <a href=""> <img src="../img/engrenage.png" class="engrenage"> </a></span>
                <hr>
                <span><a href="" title="Créer et ajouter un élève au groupe"><img src="../img/plus.svg" alt="nada" class="plus"></a></span>
            </div></div> <!-- attention a l'espace  -->

            <!-- à générer avec PHP -->
            <div class="groupe">
                <div>
                <span>Groupe 2 <a href="" title="Éditer le groupe"> <img src="../img/pen.png" class="pen"> </a></span>
                <span class="dropdown">x membres <img src="../img/arrowdropdown.png" onclick="display(event)"></span> 
                </div>
    
                <div class="eleve">
                    <span>eleve 1 <a href=""> <img src="../img/engrenage.png" class="engrenage"> </a></span>
                    <hr>
                    <span>eleve 2 <a href=""> <img src="../img/engrenage.png" class="engrenage"> </a></span>
                    <hr>
                    <span><a href="" title="Créer et ajouter un élève au groupe"><img src="../img/plus.svg" alt="nada" class="plus"></a></span>
                </div></div> <!-- attention a l'espace  -->
                <div class="flex">
                    <button type="button">Créer un groupe</button>
                </div>
    </main>
    <script src="../js/main.js"></script>


</body>
</html>