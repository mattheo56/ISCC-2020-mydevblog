<html lang="fr">
<head>
    <title>contacts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vitrine.css">
</head>
<body>
    <?php 
    $page_title = "Contact";
    include ("header.php") ?>
            <main>
                    <h2>contact</h2>
                     <div class="containerbis">
                         <form action="action_page.php">
                             <label for="nom"></label>
                             <input type="text" id="name" name="name" placeholder="Votre nom">
                             <label for="mail"></label>
                             <input type="text" id="email" name="email" placeholder="Votre email">
                             <label for="sujet"></label>
                             <textarea type="subject" id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>
                             <input type="submit" value="Envoyer">
                         </form>
                     </div>

                    
    </main>
          <?php include ("footer.php")?>  
</body>
</html>