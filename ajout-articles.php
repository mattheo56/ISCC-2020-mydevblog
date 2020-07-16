<!DOCTYPE html>
<html>
<link rel="stylesheet" href="vitrine.css">
<?php
$page_title= "Ajout article";
 include('header.php'); ?>
<main >
<div style="width: 1000px;margin:0 auto; padding-top:10px; padding-bottom:10px;padding-left:50px;border: 3px solid #A0A0A0; text-align: center;background: #F6856C;">

<form class="divv" action="article-verifies.php" method="post">
    <div>
        <label for="titre">Titre:</label>
        <input type="text" id="text" name="user_titre">
    </div>
    <div>
        <label for="image">image:</label>
        <input type="text" id="text" name="user_image">
    </div>
    <div>
        <label for="date">date:</label>
        <input id="text" name="user_date">
</div>
<div>
        <label for="auteur">auteur:</label>
        <input type="text" id="text" name="user_auteur">
    </div>
<div>
        <label for="texte">texte:</label>
        <textarea id="text" id="text" name="user_texte"></textarea>
</div>
<div>
        <label for="extrait">Extrait:</label>
        <textarea id="text" id="text" name="user_extrait"></textarea>
</div>
    <p>
    <div class="styled">
    <button type="submit">Envoyer</button> 
  </div>
</p>
</form>
</main>
<?php include('footer.php'); ?>
</body>
</html>
<?php
function connect_to_database(){}
$servername = "localhost";
$user = "root";
$password = "";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=articles', $user, $password);
} catch (PDOException $e) {
    print "Error : ".$e->getMessage();
    die();
}
$stmt = $dbh->query("INSERT INTO `articles`(`titre`, `image`, `date`, `auteur`, `texte`, `extrait`)");
?>