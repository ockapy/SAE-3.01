<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>Accueil</title>
</head>
<body>
    <header>
        <div></div>
        <nav>
            <a class="selected"  id="accueilbtn">Accueil</a>
            <a id="playbutton" href="controler/scenario.ctrl.php">Jouer !</a>
            <a href="controler/statistiques.ctrl.php">Statistiques</a>
            <a href="controler/group_list.ctrl.php">Groupes</a>
            <a href="controler/menu-compte-prof.controler.php">Mon compte</a>
        </nav>
        <form action="logout.php" method="post">
            <button type="submit" name="submit" value="logout">Logout</button>
        </form>
    </header>
    <main>
        <div >
            <h1>Bienvenue dans The Game</h1>
            <img src="img/banner_space.jpeg" class="banner_space">
            <div class="description_jeu">
                <div>
                    <h2>Un jeu d'apprentissage</h2>
                    <span>Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca.</span>
                </div>
                <div>
                    <h2>Une difficulté adaptée</h2>
                    <span>Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca.</span>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
