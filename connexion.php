<link rel="stylesheet" href="/static/css/connexion.css" type="text/css">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<div id="tableauLogIn">
    <div id="UserLogin">
        <input id="emailInput" type="text" placeholder="Email" />
        <input id="passwordInput" type="text" placeholder="Password" />
    </div>
    <div id="help"> 
        <a href="inscription.php" id="create">Je n'ai pas de compte</a>
        <a href="#" id="mdp">Mot de passe oublier</a>
    </div>
    <button id="logIn" type="submit" >Connexion</button>
</div>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>