<link rel="stylesheet" href="/static/css/connexion.css" type="text/css">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<div id="body">
    <div class="connexion">
        <h1 class="title">JE ME CONNECTE</h1>
        <div class="form">
            <p>Email* <input type="email" class="email" required></p>
            <p>Mot de passe* <input type="password" class="password" required></p>
        </div>
        <div id="conditions">
            <input type="checkbox" class="conditions" name="conditions">
            <label for="conditions" class="text">Je confirme avoir lu et accepté les conditions<br>générales et la politique de confidentialité</label>
        </div>
        <input type="submit" class="btn-connexion" name="btn-connexion" value="Connexion"></input>
        </form> 
        <div id="to-home">
            <label for="to-home" class="text">J'ai oublié mon mot de passe</label>
            <br>
            <a href="/inscription" for="" class="text">Je n'ai pas de compte</a>
        </div>
        
    </div>
</div>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>