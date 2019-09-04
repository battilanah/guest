<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Contour
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130706

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        body{
            background: url('tab.png') no-repeat center center fixed;

            background-size: cover;
            /* For older browsers */
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            min-height:800px;}

        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon go</title>
    <meta name="keywords" content="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>

    <meta name="description" content="" />



    <![endif]-->
</head>
<body>

<?php




$db = new PDO('sqlite:pokemon.db');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pseudo=$_SESSION['pseudo'];


$reqBis = "SELECT petitPseudo,couleurPetit FROM petitsComptes WHERE pseudo=:pseudo";
$stmtBis = $db->prepare($reqBis);
$stmtBis->bindParam(':pseudo', $pseudo);
$stmtBis->execute();







?>


<form  action="inscriptionPetits.php" method="post" id="myForm"  >

    <?php

    $row = $stmtBis->fetchAll();
    $i=1;
     foreach ($row as $value) { ?>


    <input  type="checkbox" id="petit"  name="petitPseudo<?php echo($i);?>"  value="<?php echo(
        $value['petitPseudo'])
        ?>"><label for="petit" style="color: whitesmoke"><?php echo($value['petitPseudo']) ?></label>
       <!--  <input  type="checkbox" id="petit"  checked name="couleurPetit<?php echo($i);?>"  value="<?php echo(
         $value['couleurPetit'])
         ?>"><label for="petit" style="color: whitesmoke"><?php echo($value['couleurPetit']) ?></label>-->



         <?php  $i++; } ?>
    <input type = "submit" name = "envoyer" >
</form>




</body>
</html>