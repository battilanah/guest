
<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">
    <meta charset="utf-8" />
    <title>Mon Compte</title>
    <meta charset="utf-8" />
    <link href="main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="responsiveform.css">
    <link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
    <link rel="stylesheet" media="screen and (max-width: 380px)" href="responsiveform3.css" />
</head>
<body>






        <p style="color:whitesmoke;">Veuillez entrer un nom d'utilisateur, votre couleur et un mot de passe:</p>
        <form action="ajoutCompteDb.php" method="post">
            <p><label for="pseudo" style="color: whitesmoke;">Votre pseudo de joueur</label><br>
                <input type="text" name="pseudo" placeholder="Votre pseudo de joueur"><br>

               <!--<input type="text" name="couleur" placeholder="rouge, bleu ou jaune (respecter cette orthographe :p)" />
               --> <br>
                <label for="mot_de_passe" style="color: whitesmoke">Votre mdp</label>
                <br>
                <input type="password" name="mot_de_passe" placeholder="Votre mdp" /><br>

                <label for="couleur" style="color: black">votre couleur</label><br>

                <input type="radio" id="premier" name="couleur" value="bleu" ><label for="premier" style="color: whitesmoke">bleu</label><br>
                <input type="radio" id="deuxieme" name="couleur" value="rouge" ><label for="deuxieme" style="color: whitesmoke">rouge</label><br>
                <input type="radio" id="troisieme" name="couleur" value="jaune" ><label for="troisieme" style="color: whitesmoke">jaune</label><br><br>



            <input type="submit" value="Valider" style="width: 50%;" />
            </p>
        </form>


    </body>
</html>

