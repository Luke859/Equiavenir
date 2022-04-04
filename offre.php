<link rel="stylesheet" href="/static/css/offre.css" type="text/css">

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
?>

<div id="main-container">
    <h1>Offre emploi</h1>  
    <div class="block_recherche">
        <form class="recherche" method="GET">
            <input  type="search" name="srch" placeholder="recherche">
            <input  type="submit" name="envoyer">
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
        Aucun résultat ...
        <br>
        Voici une liste d'offre disponible :
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
</div>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>
