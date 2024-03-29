<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">
    <title>Jouer !</title>
</head>
<body>
    <header>
        <div></div>
        <nav>
            <a  href="acceuil.ctrl.php">Accueil</a>
            <a class="selected"id="playbutton">Jouer !</a>
            <a href="statistiques.ctrl.php">Statistiques</a>
            <a href="group_list.ctrl.php">Groupes</a>
            <a href="menu-compte-prof.controler.php">Mon compte</a>
        </nav>
        <form action="../logout.php" method="post">
            <button type="submit" name="submit" value="logout">Logout</button>
        </form>    </header>
    <main>
        <h1>Scénarios</h1>
        <div class="carousel border">
            <button onclick="rollcarousel('l')" type="button"><</button>
            <div class="carousel-el">
                <!--  dynamique -->
                <div class="slide "><a href="../controler/new_compte_prof.ctrl.php"><img src="../img/galaxy.jpg" alt="" ></a><div><h1>Perdu dans les étoiles</h1><p>le vaisseau rencontre des problèmes</p></div></div>
                <div class="slide "><img src="" alt=""><span>titre & description 2</span></div>
                <div class="slide "><img src="" alt=""><span>titre & description 3</span></div>
            </div>
            <button onclick="rollcarousel('r')" type="button">></button>
        </div>

        <form class="search-bar" action="">
            <input type="text" name="" id="groupsearch" placeholder="">
            <button type="">rechercher !</button>
        </form>
        <div>
            <h2>Solo</h2>
            <div class="cardcontainer">
                <!-- dynamique -->
                <div class="card"><img src="../img/placeholder-image.webp" alt=""></div>
                <div class="card"><img src="../img/placeholder-image.webp" alt=""></div>
                <div class="card"><img src="../img/placeholder-image.webp" alt=""></div>
                <div class="card"><img src="../img/placeholder-image.webp" alt=""></div>
                <div class="card"><img src="../img/placeholder-image.webp" alt=""></div>

            </div>
        </div>
        <div>
            <h2>Coop</h2>
            <div class="cardcontainer ">
                <!-- dynamique -->
                <div class="card"><img src="../img/placeholder-image.webp" alt=""></div>
                <div class="card"><img src="../img/placeholder-image.webp" alt=""></div>
            </div>
        </div>



    </main>
    <footer></footer>
    <script src="../js/main.js"></script>


</body>
</html>