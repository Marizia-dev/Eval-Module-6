<?php

// http://192.168.15.19/afficher-tout-etudiant.php

// <!-- 5 Créez un fichier PHP nommé afficher-tout-etudiant.php : (3 points)
// - Dans ce fichier, écrivez le code PHP nécessaire pour vous connecter à la base de données MySQL,
// - récupérer les données de la table etudiants, 
// - puis les afficher à l’écran sous forme de tableau html
// – Testez votre page web dans votre navigateur web. -->

require_once 'db_config.php';

$stmt = $connexion->query("SELECT * FROM etudiants");

$table = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($table);


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
