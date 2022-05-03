<link rel="stylesheet" href="/static/css/inscription.css" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

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

            <div class="infos">
                <h2>Mon adresse</h2>
                <div class="inputs">
                    <span>
                        <label>Pays*</label>
                        <select>
                            <option>----</option>
                            <option>France</option>
                            <option>England</option>
                            <option>Italia</option>
                            <option>España</option>
                            <option>Belgique</option>
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Россия</option>
                            <option>Österreich</option>
                            <option>Suomi</option>
                            <option>Deutschland</option>
                            <option>Scotland</option>
                        </select>
                    </span>
                    <span><label>Code Postal*</label><input type="text"></span>
                </div>
            </div>
            
            <div class="infos">
                <h2>Mon espace candidat</h2>
                <div class="inputs">
                    <span><label>Mot de passe*</label><input type="password"></span>
                    <span><label>Confirmer le mot de passe*</label><input type="password"></span>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Je confirme avoir lu et accepté les conditions générales et la politique de confidentialité </label>
                    </div>
                </div>
            </div>
            
            <input type="submit" value="Créer un compte" class="submit"></input>
        </form>
    </div>

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