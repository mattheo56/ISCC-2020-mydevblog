<html lang="fr">
<head>
    <title>Le beatmaking l'art du temps</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vitrine.css">
</head>
<body>
<div style="width: 1000px;margin:0 auto; padding-top:10px; padding-bottom:10px;padding-left:50px;border: 3px solid #A0A0A0; text-align: center;background: #F6856C;">

    <?php 
    $page_title = "Programme";
    include ("header.php") ?>
            <?php
function connect_to_database(){
$databasename="articles";
$servername= "localhost";
$username= "root";
$password= "";
try{
    $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
} catch (PDOException $e){
    echo "connection failed:" . $e->getMessage();
}}
$pdo = connect_to_database();
$users = $pdo->query("SELECT `titre`, `image`, `texte` FROM `articles` ORDER BY `date` DESC")->fetchAll();
foreach ($users as $user){
    $image = $user['image'];

echo "<div><p>";
echo $user['titre'];
echo "</p><br><p>";
echo $user['texte'];
echo"</p><image src=" . $image . ">";
echo "</div>";
}
?>
        <?php include ("footer.php") ?>     
</body>
</html>