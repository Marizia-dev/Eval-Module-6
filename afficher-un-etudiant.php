<!-- 6 Créez un fichier PHP nommé afficher-un-etudiant.php : (3 points)
- Dans ce fichier, écrivez le code PHP nécessaire pour vous connecter à la base de données MySQL,
- récupérer les données de la table etudiants et filtrer via son id récupérer dans l'url via la super 
globale $_GET["id"], 
- puis les afficher dans la page l'étudiant sélectionné si il existant dans la base de données sinon un 
message d'erreur stipulant que l'étudiant n'est pas présent dans la base de données
- Testez votre page web dans votre navigateur web. -->

<?php

// http://192.168.15.19/afficher-un-etudiant.php?etudiant_id=7


require_once 'db_config.php';


$etudiant_id = $_GET["etudiant_id"];
$stmt = $connexion->query("SELECT * FROM etudiants WHERE id = $etudiant_id");
$table = $stmt->fetchAll(PDO::FETCH_ASSOC);


if (count($table) > 0) {
    echo "<table border='1'>
        <tr> 
            <th>id</th> 
            <th>nom</th> 
            <th>prenom</th> 
            <th>email</th> 
            <th> cv </th> 
            <th>dt_naissance </th> 
            <th> is_Admin</th> 
            <th>dt_mis_a_jour </th>   
        </tr>
";

    foreach ($table as $key => $value) {
        echo "
    <tr>
         <td> $value[id]</td> 
         <td>$value[nom] </td> 
        <td>$value[prenom]</td> 
        <td> $value[email]</td> 
        <td> $value[cv] </td> 
        <td>$value[dt_naissance] </td> 
        <td> $value[isAdmin]</td> 
        <td>$value[dt_mis_a_jour]</td>     
    </tr>";
    }

    echo "</table>";
} else {
    echo " l'étudiant n'est pas présent dans la base de données";
}
