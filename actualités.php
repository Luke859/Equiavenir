<link rel="stylesheet" href="/static/css/actualités.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<div id="main-container">
    <div class="block_titre">
        <h1 class="title">Actualités</h1>  
    </div>
    <div class="block_actualites">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>
