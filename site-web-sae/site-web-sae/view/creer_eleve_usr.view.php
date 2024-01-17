<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <title>Création élève</title>
</head>
<body>
    <form action="" method="post">
        <h2>Création de compte</h2>
        <h3>Groupe X</h3>
        <label for="lastname">Nom d'utilisateur</label>
        <input type="text" id="lastname" name="username" value="le user name" readonly required>
        <label for="firstname">Mot de passe</label>
        <input type="text" id="firstname" name="password" value="le mdp" readonly required>
        <button type="submit">Ok</button>
        <p>Attention ! Transmettez ces informations à l'élève concerné pour qu'il puisse se connecter.</p>
    </form>
</body>
</html>