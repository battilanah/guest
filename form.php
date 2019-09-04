<?php session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Mes petits comptes</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="responsiveform.css">
        <link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
        <link rel="stylesheet" media="screen and (max-width: 380px)" href="responsiveform3.css" />


    </head>
    <body>


        <form method="post"  action="petitsComptes.php" >
            <input type="text" name="pseudo" placeholder="pseudo du compte principal">
    <?php



$nb=$_POST['petits'];


for (  $i=1; $i<=2*$nb -$i  ; $i++){ ?>
<input  type='text'  name="petitPseudo<?php echo ($i); ?>" placeholder='<?php echo htmlspecialchars('pseudo ' . $i . ''); ?>'>
    <input type='text'  name="petitCouleur<?php echo ($i); ?>" placeholder='<?php echo htmlspecialchars('couleur ' . $i . ''); ?>'>
</br>

<?php } ?>
            <input hidden value="<?php echo($nb) ;?>")/>
        <input type="submit" name="valider" style="width: 20%"/>

        </form>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    </body>
</html>
