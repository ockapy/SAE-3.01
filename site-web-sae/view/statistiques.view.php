<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">

    <title>Mes Statistiques</title>
</head>
<body>
    <header>
        <div></div>
        <nav>
            <a  href="acceuil.ctrl.php">Accueil</a>
            <a id="playbutton" href="scenario.ctrl.php">Jouer !</a>
            <a class="selected">Statistiques</a>
            <a href="group_list.ctrl.php">Groupes</a>
            <a href="menu-compte-prof.controler.php">Mon compte</a>
        </nav>
        <form action="../logout.php" method="post">
            <button type="submit" name="submit" value="logout">Logout</button>
        </form>    </header>
    <main>
        <h1>Mes Statistiques</h1>
        <section class="">
            <div><span>Temps total passé sur le jeu </span><span></span></div>
            <div><span>Temps moyen par scénario </span><span></span></div>
        </section>

        <div class="carousel border">
            <button onclick="rollcarousel('l')" type="button"><</button>
            <div class="carousel-el">
                <!--  dynamique -->
                <div class="slide ">
                    <div>
                        <h1>Perdu dans les étoiles</h1>
                        <div class="flex">
                            <ul>
                                <li>temps pour salle 1 :</li>
                                <li>temps pour salle 2 :</li>
                            </ul>
                            <ul>
                                <li>temps pour salle 1 :</li>
                                <li>temps pour salle 2 :</li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li>nombre de tentatives :</li>
                                
                                <li>temps de complétion du scénario : </li>
                                <li>meilleur temps :</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>

            </div>
            <button onclick="rollcarousel('r')" type="button">></button>
        </div>

        <div class="cardcontainer">
            <!-- dynamique -->
            <div class="card"><span>Taux de réussite : X </span></div>
            
            <div class="card"><span>Progression total : X/X</span></div>
        </div>

    </main>  
    <footer>
        
    </footer>
</body>
</html>