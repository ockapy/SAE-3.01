<?php

?>

<!DOCTYPE html>
<html lang="">
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
          <a  href="#">Accueil</a>
          <a id="playbutton" href="#">Jouer !</a>
          <a  href="#">Statistiques</a>
          <a class="selected" href="">Groupes</a>
          <a href="#">Mon compte</a>
      </nav>
      <form action=""><button type="submit">Se Déconnecter</button></form>
    </header>
    <main>
      <form action="" method="get">
        <h1>Mon Compte</h1>
        <div>
          <label> Nom d'utilisateur : <input type="text" name="nomUtil" value="<?= $login?>" disabled> </label>
        </div>
        <div>
          <label> Nom : <input type="text" name="nom" value="<?= $nom?>" disabled> </label>
          <label>prenom : <input type="text" name="prenom" value="<?= $prenom?>" disabled> </label>
        </div>
        <div>
          <label> Professeur référent : <input type="text" name="profRef" value="<?=$profRef?>" disabled> </label>
        </div>
        <div>
          <label> Mot de passe : <input type="password" name="mdp" value="<?=$mdp?>" id="password"> </label>
          <button type="modifMdp">Changer de mot de passe</button>
        </div>
        <label for="eye"><input type="checkbox" onchange="eyeOFF()" name="" id="eye"><span>voir le mot de passe</span></label>
      </form>
    </main>
    <footer>

    </footer>
  </body>
</html>
