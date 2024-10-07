<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="inscription" method="POST" action="traitement/valid_inscription.php">
        <label for="fname">Nom</label>
        <input type="text" name="fname" id="fname" require>
        <label for="name">Prenom</label>
        <input type="text" name="name" id="name" require>
        <label for="mail">Email</label>
        <input type="mail" name="mail" id="mail" require>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" require>
        <input type="submit" value="M'inscrire" name="valid">
</body>
</html>