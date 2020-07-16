<h2>Connexion</h2>

<head>
    <title>Connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vitrine.css">
</head>
<div style="width: 1000px;margin:0 auto; padding-top:10px; padding-bottom:10px;padding-left:50px;padding-right: 50px; border: 10px solid #EEB85A; text-align: center;background: #F6856C;">

<form action ='securite.php'method ='post'>
       <p>Login:
              <input type="text" name="login"/>
       </p>
       <p>password :
              <input type="text" name="password"/>
       </p>
       <p>
              <input type="submit" value="OK">
       </p>
</form>
<?php include ("footer.php") ?>
