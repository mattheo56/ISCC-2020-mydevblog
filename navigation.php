<nav>
            <ul class="vertical-list centered">
                <a <?php if($page_title == "Accueil") { echo 'class="active"';} ?> href="accueil.php"> Accueil</a>
                <a <?php if($page_title == "Articles") { echo 'class="active"';} ?>href="articles.php">Articles</a>
                <a <?php if($page_title == "Contact") { echo 'class="active"';} ?>href="contacts.php">Contact</a>
                <a <?php if($page_title == "Connexion") { echo 'class="active"';} ?>href="connexion.php">Connexion</a>
            </ul>
        </nav>