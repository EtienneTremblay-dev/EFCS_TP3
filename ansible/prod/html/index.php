<?php

$host="mysql";
$db="web";
$user="web";
$pass="password";

echo "<h2>Connexion MySQL</h2>";

try{
    $pdo=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    echo "Connexion réussie";
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}

phpinfo();

?>