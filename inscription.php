<link rel="stylesheet" href="/static/css/inscription.css" type="text/css">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<div id="body">

    <H1>Créez votre compte</H1>

    <div id="inscription">
        <h1>JE CRÉE MON ESPACE CANDIDAT</h1>
        <div class="CV">
            <h2>Mon CV</h2>
            <div class="dragNdrop">
                <h3>Glissez ou cliquez pour ajouter un CV</h3>
                <p>Sont acceptés les CV maximum au format PDF, JPEG, PNG, Word</p>
            </div>
        </div>

        <form method="POST" action="inscription.php">
            <div class="infos">
                <h2>Mes informations</h2>
                <div class="inputs">
                    <div class="radioInput">
                        <label>Civilité*</label>
                        <input type="radio" id="Madame" name="civilite"><label for="Madame" >Madame</label>
                        <input type="radio" id="Monsieur" name="civilite" ><label for="Monsieur" >Monsieur</label>
                    </div>
                    <span><label>Nom*</label><input type="text"></span>
                    <span><label>Prénom*</label><input type="text"></span>
                    <span><label>Email*</label><input type="mail"></span>
                    <span><label>Mobile</label><input type="text"></span>
                </div>
            </div>
        </form>
    </div>















    <!-- <div id="inscription">
        <h1 class="title">INSCRIPTION</h1>
        <form method="POST" action="inscription.php" id="form">
        <div class="form">
            <input type="email" class="mail" placeholder="E-mail" name="mail" required>
            <input type="password" class="password" placeholder="Mot de passe" name="pwd" required>
            <input type="password" class="password" placeholder="Confirmez votre mot de passe" name="pwd2" required>
        </div>
        <div id="conditions">
            <input type="checkbox" class="conditions" name="conditions" required>
            <label for="conditions" class="text">Je confirme avoir lu et accepté les conditions<br>générales et la politique de confidentialité</label>
        </div>
        <input type="submit" class="btn-inscription" name="btn-inscription" value="Inscription"></inp>
        </form> 
        <div id="to-connexion">
            <label for="to-connexion" class="text">Vous avez déjà un compte ? </label>
            <a href="/connexion" name="to-connexion" class="to-connexion">Se connecter</a>
        </div>
        
    </div> -->
</div>
<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>


<?php
    // if(isset($_POST['btn-inscription'])){
    //     $email = $_POST['mail'];
    //     $pwd = $_POST['pwd'];
    //     $pwdVerif = $_POST['pwd2'];

    //     if($pwd == $pwdVerif){
    //         $pwd = password_hash($pwd, PASSWORD_BCRYPT);
    //         try{
    //             $result = $conn->prepare("INSERT INTO user (UserEmail, UserPwd) VALUES (?, ?);");
    //             $result->execute(array($email, $pwd));
    //         }catch(PDOException $e){
    //             echo $e;
    //         }
    //         header('Location:http://equiavenir/connexion.php');
    //     } else {
    //         echo '<script>alert("Confirmation du mot de passe incorrect")</script>';
    //     }

    // }

?>