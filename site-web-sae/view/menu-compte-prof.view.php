<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mon Compte</title>
    <link rel="stylesheet" href="../style/mon-compte.css">
    <title></title>
  </head>
  <body>
    <script src="../js/login.js"></script>
    <header>
      <div></div>
        <nav>
        <a  href="acceuil.ctrl.php">Accueil</a>
            <a id="playbutton" href="scenario.ctrl.php">Jouer !</a>
            <a href="statistiques.ctrl.php">Statistiques</a>
            <a href="group_list.ctrl.php">Groupes</a>
            <a class="selected">Mon compte</a>
        </nav>
        <form action="../logout.php" method="post">
            <button type="submit" name="submit" value="logout">Logout</button>
        </form>
    </header>
    <main>
      <form action="" method="post">
        <h1>Mon Compte</h1>
        <div>
          <label> Nom d'utilisateur : <input type="text" name="nomUtil" value="<?= $login?>" disabled> </label>
        </div>
        <div>
          <label> Nom : <input type="text" name="nom" value="<?=$nom?>" disabled> </label>
          <label>prenom : <input type="text" name="prenom" value="<?= $prenom?>" disabled> </label>
        </div>
        <div>
          <label> Mail : <input type="text" name="mail" value="<?=$mail?>"> </label>
          <button type="modifMdp">Modifier le mail</button>
        </div>
        <div>
          <label for="password">Mot de passe : </label> 
          <input type="password" name="mdp" id="password" value="<?=$mdp?>">
          <button type="modifMdp">Changer de mot de passe</button>
        </div>
        <div class="fin">
          <label for="eye"><input type="checkbox" onchange="eyeOFF()" name="" id="eye"><span>voir le mot de passe</span></label>
          <a href="../view/consentement.view.php">Modifier mes préférences</a>
        </div>
        <button class="button-45" type="suppCompte">Supprimer le compte</button>
      </form>
    </main>
    <footer>

    </footer>
  </body>
</html>
