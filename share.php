<link rel="stylesheet" href="/static/css/share.css" type="text/css">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<?php 
$job = $conn->prepare("SELECT * FROM job"); 
$job->execute();
$jobs = $job->fetchAll();
?>

<div id="main-container">
    <h1>Partager une offre</h1>
    <div class="share-offer">
        <form class="form" action="share.php" method="POST" autocomplete="off">
            <li>Nom de l'entreprise <br><input class="inputText" placeholder="Votre nom d'entreprise" type="text" name="nom" required/></li>
            <li>Titre de l'entreprise  <br><input class="inputText" placeholder="Titre" type="text" name="title" required/></li>
            <li>Ville de travail  <br><input class="inputText" placeholder="Entrer la Ville/Région" type="text" name="location" required/></li>
            <li>Date de début  <br><input class="inputText" placeholder="Date" type="date" name="date" required/></li>
            <li>Date de fin  <br><input class="inputText" placeholder="Durée" type="date" name="time" required/></li>

            <div class="checkbox">
                <li>Type d'emploi </li>
                <input type="checkbox"  name="tempsPlein" value="tempsPlein">
                <label for="tempsPlein">À temps plein</label><br>
                <input type="checkbox" name="tempsPartiel" value="tempsPartiel">
                <label for="tempsPartiel">À temps partiel</label><br>
                <input type="checkbox" name="temporaire" value="temporaire">
                <label for="temporaire">Emploi temporaire</label><br>
                <input type="checkbox" name="domicile" value="domicile">
                <label for="domicile">Travail à domicile / à distance</label><br>
                <input type="checkbox" name="stage" value="stage">
                <label for="stage">Stage</label><br>
            </div>
            <li>Décrivez l'offre<textarea placeholder="Description" name="description" required></textarea></li>
            <button type="submit" class="btn" name="add">Publier</button>
        </form>
    </div>
</div>

<?php
if(isset($_POST['add'])){

    $nom = $_POST['nom'];
    $titre = $_POST['title'];
    $date = $_POST['date'];
    $duree = $_POST['time'];
    $localisation = $_POST['location'];
    $description = $_POST['description'];


    $insertText = $conn->prepare("INSERT INTO job(JobName, JobDate, JobDuration, JobTitle, JobLocation, JobDescription) VALUES(:JobName, :JobDate, :JobDuration, :JobTitle, :JobLocation, :JobDescription)");
    $insertText->execute(array(
        'JobName' => $nom,
        'JobTitle' => $titre,
        'JobDate' => $date,
        'JobDuration' => $duree,
        'JobLocation' => $localisation,
        'JobDescription' => $description,
    ));

    if($insertText){
        $messageSuccess = "Votre offre a été partagé!";
        echo '<script>alert('.$messageSuccess.')</script>';
        header('Location: http://equiavenir/share.php');
    } else {
        header('Location: http://equiavenir/share.php');
        $messageError = "Error votre text n'a pas été envoyé !";
        echo '<scriptalert type="text/javascript">window.alert("'.$messageError.'");</scriptalert>'; 
    }
}
?>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>


