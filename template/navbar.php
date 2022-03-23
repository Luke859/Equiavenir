<link rel="stylesheet" href="/static/css/navbar.css" type="text/css">
<div id="nav">
    <a href="/" class="navbar_links"> Menu </a>
    <a href="offre.php" class="navbar_links">Offres d'emploi</a>
    <div class="logo">
      <img src="../static/css/Image/logoEquiavenir.png">
    </div>
    <a href="share.php" class="navbar_links">Partager</a>
    <a href="contact.php" class="navbar_links"> Contact </a>
    <?php if(isset($_COOKIE['user_session']) == false){ ?>
        <button><a href="connexion.php" class="navbar_links2"> <img src="https://img.icons8.com/small/24/000000/user-male-circle.png" color="white"/> Se connecter </a></button>
    <?php } ?>
    <?php if(isset($_COOKIE['user_session'])){ ?>
        <button><a href="profil.php" class="navbar_links2"> <img src="https://img.icons8.com/small/24/000000/user-male-circle.png" color="white"/> Mon compte </a></button>
        <!-- <form method="POST"> -->
            <!-- <input type="submit" class="disconnect" value="disconnect" name="disconnect"> -->
        <!-- </form> -->
    <?php } ?>
</div>
<!-- <script src="/static/js/navbar animation.js"></script> -->