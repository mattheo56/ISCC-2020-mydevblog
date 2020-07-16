<?php
function connect_to_database() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "base-site-routing";
    try {
         $pdo = new PDO ("mysql:host=$servername;dbname=$databasename", $username, $password);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo "Connected successfully";
        return $pdo;
    } 
    catch (PDOException $e){
        echo "Connection failed" .$e->getMessage();
    }
}
$pdo = connect_to_database();
$query= $pdo->query("DELETE FROM utilisateurs WHERE Login LIKE '%".$_POST ['nom']."%' ");
header ('Location: listeutilisateurs.php');
?>