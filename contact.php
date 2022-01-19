<link rel="stylesheet" href="/static/css/contact.css" type="text/css">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>
<h1>Nous contacter</h1>
<p>Vous avez une question précise ? Un problème ? Contactez-nous rapidement sur le chat ou par email à l'adresse equiavenir@gamil.com </p>

<div id="User">
    <input id="UserInfo" type="text" placeholder="Nom*" />
    <input id="UserInfo" type="text" placeholder="Prénom*" />
    <input id="UserInfo" type="text" placeholder="E-mail*" />
    <input id="UserInfo" type="text" placeholder="Téléphone*" />
</div>

<input id="inputMessage" type="text" placeholder="Message"/>
<button id="send"> Envoyer </button>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>