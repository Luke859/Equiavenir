<link rel="stylesheet" href="/static/css/share.css" type="text/css">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<?php 
$job = $conn->prepare("SELECT * FROM job"); 
$job->execute();
$jobs = $job->fetchAll();
?>

<div id="main-body">
    <div class="share-post">
        <h1>Partager une offre</h1>
        <form action="share.php" method="POST" autocomplete="off">
            <input placeholder="Enter text" type="text" name="input_text"/> 
            <button type="submit" class="btn" name="add"> + Add</button>
            <label for="avatar">Choose a profile picture:</label>
            <input type="file" accept="image/png, image/jpeg">
        </form>
    </div>
    <?php foreach($jobs as $job) { ?>
        <div class="job-item">
            <form class="message" action="delete_post.php" method="POST">
                <input class="id" type="hidden" name="id" value="<?php echo $job['JobId'] ?>"/>
                <input class="delete" type="image" src="images/poubelle.png" height="30" width="30"/>
                <p><?php echo $job['JobName'] ?></p>
            </form>
        </div>
    <?php } ?>
</div>

<?php
if(isset($_POST['add'])){

    $addtext = $_POST['input_text'];

    if(empty($addtext)){

        $message = "Veuillez renseigner ce champ!";
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    } else{

        $insertText = $conn->prepare("INSERT INTO job(JobName) VALUE(?);");
        $insert = $insertText->execute([$addtext]);

        if($insert){
            header('Location: http://equiavenir/share.php');
        } else {
            header('Location: http://equiavenir/share.php');
            $message = "Error votre text n'a pas été envoyé !";
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>'; 
        }
    }



}
?>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>