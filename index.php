<link rel="stylesheet" href="/static/css/index.css" type="text/css">

<?php $title = 'Equiavenir'; ?>

<?php require('db_connect.php'); ?>

<?php ob_start(); ?>
<div class="fond-Accueil">
    <h1>Equiavenir</h1>
    <p>La 1ère agence d'intérim en ligne dans la filière équine</p>
    <div class="buttons">
        <button><a href="/" class="btn_offre"> Offres d'emploi</a></button>
        <button><a href="/" class="btn_partage"> Partager une offre</a></button>
    </div>
</div>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>
