<link rel="stylesheet" href="/static/css/offre.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<?php 
$job = $conn->prepare("SELECT * FROM job ORDER BY JobId DESC"); 
$job->execute();
$jobs = $job->fetchAll();

if(isset($_GET['srch']) AND !empty($_GET['srch'])){
    $recherche =htmlspecialchars($_GET['srch']);
    $job = $conn->prepare('SELECT * FROM job WHERE JobName LIKE "%'.$recherche.'%" ORDER BY JobId DESC');
    $job->execute();
}

// if(isset($_GET['location']) AND !empty($_GET['location'])){
//     $location =htmlspecialchars($_GET['location']);
//     $job = $conn->prepare('SELECT * FROM job WHERE Joblocation LIKE "%'.$location.'%" ORDER BY JobId DESC');
//     $job->execute();
// }
?>

<div id="main-container">
    <div class="block_recherche">
        <h1 class="title">Offres d'emploi</h1>  
        <form class="recherche" method="GET">
        <select name="offre" class="form-select" aria-label="Default select example">
                <option selected>Type de contrat</option>
                <option value="1">CDI</option>
                <option value="2">Stage</option>
                <option value="3">CDD</option>
                <option value="4">Alternance</option>
            </select>
            <select name="location" class="form-select" aria-label="Default select example">
                <option selected>Localisation</option>
                <option value="1">Nantes</option>
                <option value="2">Bordeaux</option>
                <option value="3">Lyon</option>
            </select>
            <input class="input_search" type="search" name="srch" placeholder="recherche">
            <input class="input_button" type="submit" name="envoyer">
        </form>
    </div>
    <?php if($job->rowCount() > 0){?>
        <?php while($jobs = $job->fetch()){ ?>
            <div class="job-offer">
                <form class="message" action="delete_post.php" method="POST">
                    <input class="id" type="hidden" name="id" value="<?php echo $jobs['JobId'] ?>"/>
                    <input class="delete" type="image" src="./static/css/Image/croix.png" height="30" width="30"/>
                    <h1><?php echo $jobs['JobName'] ?></h1>
                    <h4><?php echo $jobs['JobLocation'] ?></h4>
                    <br>
                    <h2>Type de contrat : <?php echo $jobs['JobTitle']?></h2>
                    <br>
                    <h2>Temps : <?php echo $jobs['JobDate']?> au <?php echo $jobs['JobDuration'] ?></h2>
                    <p><?php echo $jobs['JobDescription'] ?></p>
                </form>
            </div>
        <?php } ?>
    <?php } else {?>
        <h2 class="result">Aucun résultat ...</h2>
        <h3 class="list">Voici une liste d'offre disponible :</h3>
        <?php foreach($jobs as $job) { ?>
            <div class="job-offer">
                <form class="message" action="delete_post.php" method="POST">
                    <input class="id" type="hidden" name="id" value="<?php echo $job['JobId'] ?>"/>
                    <input class="delete" type="image" src="./static/css/Image/croix.png" height="30" width="30"/>
                    <h1><?php echo $job['JobName'] ?></h1>
                    <h4><?php echo $job['JobLocation'] ?></h4>
                    <br>
                    <h2>Type de contrat : <?php echo $job['JobTitle']?></h2>
                    <br>
                    <h2>Temps : <?php echo $job['JobDate']?> au <?php echo $job['JobDuration'] ?></h2>
                    <!-- <p><?php echo $job['JobDescription'] ?></p> -->
                </form>
            </div>
        <?php } ?>
    <?php } ?>
    <ul id="pagination-clean">
        <li class="previous-off">« Précédent</li>
        <li class="active">1</li>
        <li><a href="/?page=2">2</a></li>
        <li><a href="/?page=3">3</a></li>
        <li><a href="/?page=4">4</a></li>
        <li class="next"><a href="/?page=2">Suivant »</a></li>
    </ul>
</div>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>
