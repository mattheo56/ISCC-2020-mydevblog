<html lang="fr">
<head>
    <title>My Beatmaking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style/cinema.css">
</head>
<body>
    <?php
    $page_title = "Accueil";
    include ("header.php")
    ?>
    <main>
    <h2>Liste d'utilisateur</h2>
    <?php


 
function connect_to_database() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "utilisateur";
    try {
         $pdo = new PDO ("mysql:host=$servername;dbname=$databasename", $username, $password);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } 
    catch (PDOException $e){
        echo "Connection failed" .$e->getMessage();
    }
}
$pdo = connect_to_database();
$utilisateur = $pdo->query("SELECT * FROM utilisateur")->fetchAll();
echo "<ul>";
foreach ($utilisateur as $query){
    echo "<li>";
    echo $query['Login'];
   echo "</li>";
   echo ("<form action=\"suppuser.php\" method=\"post\">
        <input name=\"nom\" type=\"hidden\" value=\"" . $query['Login'] . "\">
<input type=\"submit\" name=\"custId\" value=\"supprimer\"></form>") ;
}
echo "</ul>";
?>