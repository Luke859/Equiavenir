<link rel="stylesheet" href="/static/css/inscription.css" type="text/css">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<div id="body">
    <div id="inscription">
        <h1 class="title">INSCRIPTION</h1>
        <form onsubmit="return isValid(this)">
        <div class="form">
            <input type="email" class="mail" placeholder="E-mail">
            <input type="password" class="password" placeholder="Mot de passe" name="pwd">
            <input type="password" class="password" placeholder="Confirmez votre mot de passe" name="pwd2">
        </div>
        <div id="conditions">
            <input type="checkbox" class="conditions" name="conditions">
            <label for="conditions" class="text">Je confirme avoir lu et accepté les conditions<br>générales et la politique de confidentialité</label>
        </div>
        <input type="submit" class="btn-inscription" name="btn-inscription" value="Inscription"></inp>
        </form> 
        <div id="to-connexion">
            <label for="to-connexion" class="text">Vous avez déjà un compte ? </label>
            <a href="/connexion" name="to-connexion" class="to-connexion">Se connecter</a>
        </div>
        
    </div>
</div>
<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>