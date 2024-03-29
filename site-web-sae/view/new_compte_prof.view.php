<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <title>Creer un nouveau compte</title>
</head>
<body>

    <form action="" method="post">
        <h2>Création de compte</h2>
        <label for="lastname">Nom</label>
        <input type="text" id="lastname" name="" placeholder="DUPOND" required>
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="" placeholder="Jean" required>
        <label for="mail">e-mail</label>
        <input type="email" id="mail" name="" placeholder="jean.dupond@exemple.fr" required>
        <label for="mailc">confirmez l'e-mail</label>
        <input type="email" id="mailc" name="" placeholder="jean.dupond@exemple.fr" required>

        <label for="password">mot de passe</label>
        <input type="password" name="" id="password" required>
        <label for="passwordc">confirmez le mot de passe</label>
        <input type="password" name="" id="passwordc" required>
        
        <label for="eye"><input onchange="eyeOFF()" type="checkbox" name="" id="eye"><span>afficher le mot de passe</span></label>

        <button type="submit">Créer un compte</button>

    </form>
    <script src="../js/login.js"></script>
</body>

</html>