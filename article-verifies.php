<?php
include('header.php');
function connect_to_database(){
$databasename="articles";
$servername= "localhost";
$username= "root";
$password= "";
try{
    $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"connected successfully";
    return $pdo;
} catch (PDOException $e){
    echo "connection failed:" . $e->getMessage();
}}
$pdo = connect_to_database();
$bak= $pdo->prepare("INSERT INTO `articles`(`titre`, `image`, `date`, `auteur`, `texte`,`extrait`) VALUES (?,?,?,?,?,?)");
$bak-> execute(array($_POST['user_titre'], $_POST['user_image'], $_POST['user_date'], $_POST['user_auteur'], $_POST['user_texte'], $_POST['user_extrait']));
echo"<p> Votre article vient d'être publié</p>";
echo "<a href=ajout-articles.php> Ajouter un autre article</a>";
include('footer.php');
?>