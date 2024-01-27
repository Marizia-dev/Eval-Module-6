<!-- 8 Créer un fichier PHP nommé modifier-un-etudiant.php (3 points)
- Dans ce fichier, écrivez le code PHP nécessaire pour vous connecter à la base de données MySQL,
- ce fichier contient un formulaire avec les champs suivants :
 - prenom
 - nom
 - email
 - cv
 - dt_naissance
 - isAdmin
- une fois que le formulaire est soumis, écrire une requête SQL permettant d'ajouter un nouveau 
profil etudiant dans la table "etudiants"
- Testez votre page web dans votre navigateur web. -->


<?php

// http://192.168.15.19/ajouter-un-etudiant.php

// 1 établir une connexion à la base données 


if (!empty($_POST)) { // si la super globale $_POST n'est pas vide 

    require_once 'db_config.php';

    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $cv = $_POST["cv"];
    $dt_naissance = $_POST["dt_naissance"];
    $isAdmin = isset($_POST["isAdmin"]) ? 1 : 0;

    // Requête SQL pour ajouter un nouveau profil étudiant
    $sql = "INSERT INTO etudiants (prenom, nom, email, cv, dt_naissance, isAdmin) VALUES ('$prenom', '$nom', '$email', '$cv', '$dt_naissance', $isAdmin)";

    $connexion->exec($sql);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un profil étudiant</title>
    <link rel="stylesheet" href="./style.css">


</head>

<body>

    <h1>Ajouter un nouveau profil étudiant</h1>

    <form method="post">
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br>

        <label for="nom">Nom:</label>
        <input type="text" name="nom">

        <label for="nom">email:</label>
        <input type="email" name="email">


        <label for="cv">CV:</label>
        <textarea name="cv" rows="4"></textarea><br>

        <label for="dt_naissance">Date de Naissance:</label>
        <input type="date" name="dt_naissance" required><br>

        <label for="isAdmin">isAdmin:</label>
        <input type="checkbox" name="isAdmin"><br>

        <input type="submit" value="Ajouter">
    </form>

</body>

</html>