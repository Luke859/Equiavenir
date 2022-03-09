<link rel="stylesheet" href="/static/css/share.css" type="text/css">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<?php 
$job = $conn->prepare("SELECT * FROM job"); 
$job->execute();
$jobs = $job->fetchAll();
?>

<div id="main-container">
    <div>
        <h1>Partager une offre</h1>
        <div class="share-offer">
            <form class="form" action="share.php" method="POST" autocomplete="off">
                <input placeholder="Titre" type="text" name="title" required/>
                <input placeholder="Date" type="date" name="date" required/>
                <input placeholder="Durée" type="date" name="time" required/>
                <input placeholder="Remuneration" type="text" name="money" required/>
                <input placeholder="Localisation" type="text" name="location" required/>
                <textarea placeholder="Description" name="description" required></textarea>
                <input type="file" accept="image/png, image/jpeg" name="image">
                <button type="submit" class="btn" name="add"> + Add</button>
            </form>
        </div>
        <?php foreach($jobs as $job) { ?>
            <div class="job-offer">
                <form class="message" action="delete_post.php" method="POST">
                    <input class="id" type="hidden" name="id" value="<?php echo $job['JobId'] ?>"/>
                    <input class="delete" type="image" src="images/poubelle.png" height="30" width="30"/>
                    <p><?php echo $job['JobName'] ?></p>
                    <p><?php echo $job['JobDate'] ?></p>
                    <p><?php echo $job['JobDuration'] ?></p>
                    <p><?php echo $job['JobRemuneration']?></p>
                    <p><?php echo $job['JobLocation'] ?></p>
                    <p><?php echo $job['JobDescription'] ?></p>
                    <p><?php echo $job['JobImage'] ?></p>
                </form>
            </div>
        <?php } ?>
</div>

<?php
if(isset($_POST['add'])){

    $titre = $_POST['title'];
    $date = $_POST['date'];
    $duree = $_POST['time'];
    $remuneration = $_POST['money'];
    $localisation = $_POST['location'];
    $description = $_POST['description'];
    $image = $_POST['image'];


    $insertText = $conn->prepare("INSERT INTO job(JobName, JobDate, JobDuration, JobRemuneration, JobLocation, JobDescription, JobImage) VALUES(:JobName, :JobDate, :JobDuration, :JobRemuneration, :JobLocation, :JobDescription, :JobImage)");
    $insertText->execute(array(
        'JobName' => $titre,
        'JobDate' => $date,
        'JobDuration' => $duree,
        'JobRemuneration' => $remuneration,
        'JobLocation' => $localisation,
        'JobDescription' => $description,
        'JobImage' => $image,
    ));

    if($insertText){
        header('Location: http://equiavenir/share.php');
    } else {
        header('Location: http://equiavenir/share.php');
        $message = "Error votre text n'a pas été envoyé !";
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>'; 
    }
}
?>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>

