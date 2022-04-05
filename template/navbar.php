<link rel="stylesheet" href="/static/css/navbar.css" type="text/css">
<header>
    <nav>
        <ul class="navbar_links">
            <li><a href="/"> Accueil </a></li>
            <li><a href="/"> Annonces</a></li>
            <li><a href="offre.php">Offres d'emploi</a></li>
            <li><img class="logo" src="../static/css/Image/logoEquiavenir.png"></li>
            <li><a href="actualités.php">Actualités</a></li>
            <li><a href="share.php">Partager</a></li>
            <li><a href="contact.php"> Contact </a></li>
        </ul>

    </nav>

    <?php if(isset($_COOKIE['user_session']) == false){ ?>
        <button><a href="connexion.php" class="navbar_button"> <img src="https://img.icons8.com/small/24/000000/user-male-circle.png" color="white"/> Se connecter </a></button>
    <?php } ?>
    <?php if(isset($_COOKIE['user_session'])){ ?>
        <button><a href="profil.php" class="navbar_button"> <img src="https://img.icons8.com/small/24/000000/user-male-circle.png" color="white"/> Mon compte </a></button>
        <!-- <form method="POST"> -->
            <!-- <input type="submit" class="disconnect" value="disconnect" name="disconnect"> -->
        <!-- </form> -->
    <?php } ?>
</header>
<!-- <script src="/static/js/navbar animation.js"></script> -->