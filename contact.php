<link rel="stylesheet" href="/static/css/contact.css" type="text/css">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>
<h1>Nous contacter</h1>
<p>Vous avez une question précise ? Un problème ? Contactez-nous rapidement sur le chat ou par email à l'adresse equiavenir@gamil.com </p>

<form action="https://formsubmit.co/equiavenir@gmail.com" method="POST"  enctype="multipart/form-data">
    <input id="UserInfo" type="text" placeholder="Nom*" name="Nom" required/>
    <input id="UserInfo" type="text" placeholder="Prénom*" name="prenom" required/>
    <input id="UserInfo" type="text" placeholder="E-mail*" name="mail" required/>
    <input id="UserInfo" type="text" placeholder="Téléphone*" name="tel" required/>
    <input id="inputMessage" type="text" placeholder="Message" name="message" required/>
    <input type="hidden" name="_next" value="http://equiavenir/contact.php">
    <input type="submit" id="send" name="submit" value="Envoyer"/>
</form>


<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>


<?php
    if(isset($_POST['submit'])){
        $to = "equiavenir@gmail.com";
        $from = $_POST['mail'];
        $text = $_POST['prenom'] . " " . $_POST['nom'] . "a envoyé le message suivant : \n\n" . $_POST['message'] . "\n\nVous pouvez le recontacter au : " . $_POST['tel'];
        mail($to, $from, $text);
    }
?>