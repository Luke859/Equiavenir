<link rel="stylesheet" href="/static/css/actualités.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<div id="main-container">

        <div class="block_titre">
            <h1 class="title">Actualités</h1>  
        </div>
        <div class="block_actualités">
            <div class="card_actualités">
                <div class="actualités_img">
                    <img src="/static/css/Image/cheval.jpg">
                </div>
                <div class="actualités_text">
                    <h1>Métiers & formations</h1>
                    <p>Tout savoir sur les metiers du cheval</p>
                </div>
            </div>
            <div class="card_actualités">
                <div class="actualités_img">
                    <img src="/static/css/Image/cheval.jpg">
                </div>
                <div class="actualités_text">
                    <h1>Sport étude équitation au Canada</h1>
                    <p>Un cursus scolaire qui associe cheval et enseignement</p>
                </div>
            </div>
            <div class="card_actualités">
                <div class="actualités_img">
                    <img src="/static/css/Image/cheval.jpg">
                </div>
                <div class="actualités_text">
                    <h1>ROUTINE DU CAVALIER</h1>
                    <p>Condition physique du cavalier, préparation, soins du cheval </p>
                </div>
            </div>
            <div class="card_actualités">
                <div class="actualités_img">
                    <img src="/static/css/Image/cheval.jpg">
                </div>
                <div class="actualités_text">
                    <h1>KINÉSIOLOGIE ÉQUINE</h1>
                    <p>Formation, initiation, bienfaits </p>
                </div>
            </div>
            <div class="card_actualités">
                <div class="actualités_img">
                    <img src="/static/css/Image/cheval.jpg">
                </div>
                <div class="actualités_text">
                    <h1> LE MONDE DU CHEVAL EN 2050 </h1>
                    <p>Ce que va devenir la filière équine au fil des années</p>
                </div>
            </div>
            <div class="card_actualités">
                <div class="actualités_img">
                    <img src="/static/css/Image/cheval.jpg">
                </div>
                <div class="actualités_text">
                    <h1>MONITEUR ÉQUESTRE</h1>
                    <p>Découvrez en profondeur le métier </p>
                </div>
            </div>
            <div class="card_actualités">
                <div class="actualités_img">
                    <img src="/static/css/Image/cheval.jpg">
                </div>
                <div class="actualités_text">
                    <h1>UN SECTEUR QUI RECRUTE</h1>
                    <p>La filière équine recrute de nouveaux talents</p>
                </div>
            </div>
            <div class="card_actualités">
                <div class="actualités_img">
                    <img src="/static/css/Image/cheval.jpg">
                </div>
                <div class="actualités_text">
                    <h1>JOURNÉE DE L’ÉTUDIANT DIGITALE</h1>
                    <p>Offre de formation, découverte des différents métiers</p>
                </div>
            </div>
            <div class="card_actualités">
                <div class="actualités_img">
                    <img src="/static/css/Image/cheval.jpg">
                </div>
                <div class="actualités_text">
                    <h1>PALEFRENIER SOIGNEUR</h1>
                    <p>Tout ce qu’il faut savoir </p>
                </div>
            </div>
        </div>
        <h1 class="suggestions_title">Vos suggestions</h1> 
        <div class="block_suggestions">
            <a href="contact.php" class="suggestions_button"> <img src="https://img.icons8.com/small/24/000000/light.png" color="YELLOW"/>SUGGEREZ VOS IDEES DE SUJETS </a>
        </div>

</div>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>
