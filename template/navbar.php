<link rel="stylesheet" href="/static/css/navbar.css" type="text/css">
<header>
    <div class="logo">  
        <img class="logo" src="../static/css/Image/logoEquiavenir.png">
    </div>
    <nav>
        <ul class="navbar_links">
            <li><a href="/"> Accueil </a></li>
            <li><a href="/"> Annonces</a></li>
            <li><a href="offre.php">Offres d'emploi</a></li>
            <li><a href="actualités.php">Actualités</a></li>
            <li><a href="share.php">Partager</a></li>
            <li><a href="contact.php"> Contact </a></li>
        </ul>

    </nav>
    <div class="connect">
        <?php if(isset($_COOKIE['user_session']) == false){ ?>
            <a href="connexion.php" class="navbar_button"> <img src="https://img.icons8.com/small/24/000000/user-male-circle.png" color="white"/> Se connecter </a>
        <?php } ?>
        <?php if(isset($_COOKIE['user_session'])){ ?>
            <a href="profil.php" class="navbar_button"> <img src="https://img.icons8.com/small/24/000000/user-male-circle.png" color="white"/> Mon compte </a>
            <!-- <form method="POST"> -->
                <!-- <input type="submit" class="disconnect" value="disconnect" name="disconnect"> -->
            <!-- </form> -->
        <?php } ?>
    </div>
</header>
<!-- <script src="/static/js/navbar animation.js"></script> -->