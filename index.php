<?php
session_start();?>




<!DOCTYPE html>
<html>
<head>
    <title>Raid EX - Guests</title>
    <!-----Including CSS for different screen sizes----->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="responsiveform.css">
    <link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css" />
    <link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
    <link rel="stylesheet" media="screen and (max-width: 380px)" href="responsiveform3.css" />

</head>
<body>

<div id="envelope">
    <form action="secret.php" method="post">
        <header>
            <h2>Guest - Raids ex</h2>
            <p>C'est parti pour un raid ex!</p>
        </header>
        <label style="color: whitesmoke">Votre pseudo</label>
        <input name="pseudo" placeholder="Votre pseudo" type="text" width="100px;">
        <label style="color: whitesmoke">Votre mot de passe</label>
        <input name="mot_de_passe" placeholder="password" type="password">

        <div id="validation">
        <input id="submit" type="submit" value="Se connecter">

        </div>
    </form>

</div>
<button onclick="Redirect()">Pas encore inscrit?</button>
<script>
    function Redirect(){
        window.location.href='create.php';

    }

</script>
</body>
</html>