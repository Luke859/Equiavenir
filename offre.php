<link rel="stylesheet" href="/static/css/offre.css" type="text/css">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<?php 
$job = $conn->prepare("SELECT * FROM job"); 
$job->execute();
$jobs = $job->fetchAll();
?>

<div id="main-container">
    <div class = "recherche">
        <h1>Offre emploi</h1>
    </div>
        <?php foreach($jobs as $job) { ?>
            <div class="job-offer">
                <form class="message" action="delete_post.php" method="POST">
                    <input class="id" type="hidden" name="id" value="<?php echo $job['JobId'] ?>"/>
                    <input class="delete" type="image" src="images/poubelle.png" height="30" width="30"/>
                    <p><?php echo $job['JobName'] ?></p>
                    <p><?php echo $job['JobTitle']?></p>
                    <p><?php echo $job['JobDate'] ?></p>
                    <p><?php echo $job['JobDuration'] ?></p>
                    <p><?php echo $job['JobLocation'] ?></p>
                    <p><?php echo $job['JobDescription'] ?></p>
                </form>
            </div>
        <?php } ?>
</div>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>
