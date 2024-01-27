<!-- 7 Créer un fichier PHP nommé supprimer-un-etudiant.php (3 points)
- Dans ce fichier, écrivez le code PHP nécessaire pour vous connecter à la base de données MySQL,
- créer une requête SQL qui permet de supprimer un profil etudiant via son id 
- puis afficher dans la page un message de confirmation qui annonce que le profil étudiant a bien été
supprimer sinon un message d'erreur stipulant que l'étudiant n'est pas présent dans la base de 
données;
- Testez votre page web dans votre navigateur web. -->

<!-- // http://192.168.15.19/supprimer-un-etudiant.php?etudiant_id=123 -->

<?php
require_once 'db_config.php';


$etudiant_id = $_GET["etudiant_id"];
$rowCount = $connexion->exec("DELETE FROM etudiants WHERE id = $etudiant_id");

if (
    $rowCount > 0
) {
    echo "Le profil étudiant a bien été supprimé.";
} else {
    echo " L'étudiant n'est pas présent dans la base de données.";
}
