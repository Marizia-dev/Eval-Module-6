<?php
$dsn = "mysql://host=localhost;dbname=module6;charset=utf8";  //

$login = "root";
$password = "demo";

$connexion = new PDO($dsn, $login, $password);
var_dump($connexion);
?>