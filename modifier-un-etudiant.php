<!-- 9 Créer un fichier PHP nommé modifier-un-etudiant.php (3 points)
- Dans ce fichier, écrivez le code PHP nécessaire pour vous connecter à la base de données MySQL,
- de fichier réalise un requête SELECT permettant de sélectionner un profil étudiant dans la base de 
données via son id et va remplir un formulaire contenant les champs suivants :
 - prenom
 - nom
 - email
 - cv
 - dt_naissance
 - isAdmin
- une fois que le formulaire est soumis, écrire une requête SQL permettant de mettre à jour profil 
etudiant sélectionné dans la table "etudiants"
- Testez votre page web dans votre navigateur web. -->


<!-- MALIK, JE SUIS DESOLEE, MAIS JE N'AI PAS REUSSI A LE FAIRE -->

<?php

// http://192.168.15.19/modifier-un-etudiant.php?id=1

require_once 'db_config.php';



$id = $prenom = $nom = $email = $cv = $dt_naissance = $isAdmin = "";
$etudiant_id = $_GET["id"];

$stmt = $connexion->query("SELECT * FROM etudiants WHERE id = $etudiant_id");

// 3 exécuter ma requete => tableau associatif 
$table = $stmt->fetchAll(PDO::FETCH_ASSOC);

$etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
$id = $etudiant['id'];
$prenom = $etudiant['prenom'];
$nom = $etudiant['nom'];
$email = $etudiant['email'];
$cv = $etudiant['cv'];
$dt_naissance = $etudiant['dt_naissance'];
$isAdmin = $etudiant['isAdmin'];



if (!empty($_POST)) { // si la super globale $_POST n'est pas vide 


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
</head>

<body>

    <h2>Modifier un étudiant</h2>

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