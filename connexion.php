<link rel="stylesheet" href="/static/css/connexion.css" type="text/css">

<?php require('db_connect.php'); ?>
<?php ob_start(); ?>

<div id="body">
    <div class="connexion">
        <h1 class="title">JE ME CONNECTE</h1>
        <form method="POST">
            <div class="form">
                <p>Email* <input type="email" class="email" name="mail"  required></p>
                <p>Mot de passe* <input type="password" class="password" name="pwd" required></p>
            </div>
            <div id="conditions">
                <input type="checkbox" class="conditions" name="conditions">
                <label for="conditions" class="text">Je confirme avoir lu et accepté les conditions<br>générales et la politique de confidentialité</label>
            </div>
            <input type="submit" class="btn-connexion" name="submit" value="Connexion"></input>
        </form> 
        <div id="to-home">
            <label for="to-home" class="text">J'ai oublié mon mot de passe</label>
            <br>
            <a href="/inscription" for="" class="text">Je n'ai pas de compte</a>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?> <!-- Fin du template -->

<?php require('template.php'); ?>

<?php 
    if(isset($_POST['submit'])){
        echo "<script>console.log('test');</script>";
        $bdd_verif = 'SELECT UserEmail, UserPwd FROM user';
        $sql = $conn->prepare($bdd_verif);
        $sql->execute([]);
        $arr = $sql->fetchAll();
        $rand_token = openssl_random_pseudo_bytes(16);
        $token = bin2hex($rand_token);

        $user_email = $_POST['mail'];
        $user_pwd = $_POST['pwd'];
        $connected = false; 

        $bdd_token = 'SELECT UserToken FROM user WHERE UserEmail = ?';
        $sql = $conn->prepare($bdd_token);
        $sql->execute([$user_email]);
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        foreach($result as $tokenvalue){
            if($tokenvalue == null){
                $bdd_token = 'UPDATE user SET UserToken = ? WHERE UserEmail = ?';
                $sql = $conn->prepare($bdd_token);
                $sql->execute([$token, $user_email]);
            }
        }

        if (empty($user_email) || empty($user_pwd) ){
            $empty = "Please fill all the gaps";
            echo '<script type="text/javascript">window.alert("'.$empty.'");</script>';
        }else{
            $bdd_token = 'SELECT UserToken FROM user WHERE UserEmail = ?';
            $sql = $conn->prepare($bdd_token);
            $sql->execute([$user_email]);
            $result = $sql->fetch(PDO::FETCH_ASSOC);
            foreach($result as $tokenvalue){
                for ( $i = 0; $i < count($arr); $i++){
                
                    if ($user_email == $arr[$i][0] && password_verify($user_pwd, $arr[$i][1])){
                        
                        $connected = true;

                        setcookie(
                                'user_session',
                                "$tokenvalue",
                                [
                                    'expires' => time() + 3600,
                                    'path' => "/",
                                ]
                        );
                    }
                }
            }
            if ($connected == false)  {
                $error = "Wrong password or e-mail ! Please verify";
                echo '<script type="text/javascript">window.alert("'.$error.'");</script>';
            }else{
                header('Location:http://equiavenir/');
            }
        }
    }
?>