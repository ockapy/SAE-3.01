<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">

    <title><?= $eleve->getPrenom() + $eleve->getNom()?></title>
</head>
<body>
    <header>
        <div></div>
        <nav>
            <a  href="accueil.ctrl.php">Accueil</a>
            <a  id="playbutton" href="scenario.ctrl.php">Jouer !</a>
            <a class="selected" href="#">Groupe</a>
            <a href="menu-compte-prof.controler.php">Mon compte</a>
        </nav>
        <form action="logout.php"><button type="submit">Se Déconnecter</button></form>
    </header>
    <main>
        <h1><?= $eleve->getPrenom() + $eleve->getNom()?></h1>

        <div class='flex'>
            <div>
                <form action="pop_up.ctrl.php" method="get">
                    <button class="suppression" type="submit">
                        Réinitialiser le mot de passe
                    </button>
                </form>
                
                <form action="pop_up.ctrl.php" method="get">
                    <button class="suppression" type="submit">
                        Supprimer l'élève
                    </button>
                </form>
            </div>

            <div class='changeGroupe'>
                Changer de groupe :
                <select name="groupeEleve" id="select-group-eleve">
                    <?php foreach ($groupe as $groupes) {
                        if ($groupe == $eleve-> groupe) {
                            ?>
                            <option value="<?= $groupe?>" selected><?= $groupe?></option>
                        <?php
                        } else {?>
                            <option value="<?= $groupe?>"><?= $groupe?></option>
                        <?php
                        }
                    }?>
                </select>
            </div>
        </div>

        <div class="cardcontainer">
            <!-- dynamique -->
            <div class="card"><span>Temps total passé sur le jeu : X </span></div>
            <div class="card"><span>Temps moyen par scénario : X </span></div>
        </div>

        <h2>Statistiques par scénario</h2>

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
                                <li>nombre de tentatives pour salle 1 :</li>
                                <li>nombre de tentatives pour salle 2 :</li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li>nombre de tentatives :</li>
                                
                                <li>temps de complétion du scénario : </li>
                                <li>meilleur temps :</li>
                            </ul>
                            <form action="pop_up.ctrl.php" method="get">
                                <button class="suppression" type="submit">
                                    Réinitialiser la progression de ce scénario
                                </button>
                            </form>
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
        
        <h2>Statistiques par thème</h2>
        
        <div class="carousel border">
            <button onclick="rollcarousel('l')" type="button"><</button>
            <div class="carousel-el">
                <!--  dynamique -->
                <div class="slide ">
                    <?php foreach ($themes as $theme) {?>
                        <div>
                            <h1><?= $theme?></h1>
                            <div class="flex">
                                <ul>
                                    <li>temps pour salle 1 :</li>
                                    <li>temps pour salle 2 :</li>
                                </ul>
                                <ul>
                                    <li>nombre de tentatives pour salle 1 :</li>
                                    <li>nombre de tentatives pour salle 2 :</li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li>nombre d'indices utilisés : X</li>
                                    <li>taux de réussite : X/X</li>
                                </ul>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
            <button onclick="rollcarousel('r')" type="button">></button>
        </div>
        
        <div class = 'flex'>
            <form action="pop_up.ctrl.php" method="get">
                <button class="suppression" type="submit">
                    Réinitialiser toute la progression
                </button>
            </form>
        </div>

    </main>  
    <footer>
        
    </footer>
</body>
</html>