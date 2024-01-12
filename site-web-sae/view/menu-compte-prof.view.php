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
            <a href="#">Accueil</a>
            <a id="playbutton" href="#">Jouer !</a>
            <a href="#">Statistiques</a>
            <a href="">Groupes</a>
            <a class="selected" href="#">Mon compte</a>
        </nav>
        <form action=""><button type="submit">Se Déconnecter</button></form>
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
          <label for="eye"><input type="checkbox" onchange="eyeOFF()" name="" id="eye"><span>voir le mot de passe</span></label>
          <button class="button-45" type="suppCompte">Supprimer le compte</button>
      </form>
    </main>
    <footer>

    </footer>
  </body>
</html>
