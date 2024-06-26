<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOLFR</title>
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>

    <div class="user-card">
        <div class="box-log">
            <form class="form-log" id="login-form" method="post">
                <input type="text" class="username" id="username-login" name="username-login" placeholder="Email ou Nom d'utilisateur" autocomplete="username" required/>
                <input type="password" class="mdp" id="password-login" name="mdp-login" placeholder="Votre mot de passe" autocomplete="current-password" required/>
                <input type="submit" value="Se Connecter" class="login" />                
            </form>
        </div>

        <div class="box-sign">
            <form class="form-sign" id="signup-form" method="post">
                <input type="text" name="username" id="username-signup" class="username" placeholder="Nom d'utilisateur" autocomplete="username" required/>
                <input type="email" name="email" id="email-signup" class="email" placeholder="Email" autocomplete="email" required/>
                <input type="password" name="mdp" id="password-signup" class="mdp" placeholder="Votre mot de passe" autocomplete="new-password" required/>
                <input type="password" name="confirm-mdp" class="confirm-mdp" placeholder="Confirmez votre mot de passe" autocomplete="new-password" required/>
                <input type="submit" value="Sign Up" class="signup" />                             
            </form>
        </div>
        
	<div class="footer">
		<span> or </span> 
        <a class="switch" href="#">Sign Up</a>
	</div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <script src="./javascript/index.js"></script>
    

</body>
</html>

<?php
include ("./php/signup.php");
include ("./php/login.php");
?>
