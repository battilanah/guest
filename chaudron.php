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
    <meta name="description" content="" />


    <link rel="stylesheet" media="screen and (max-width: 400px)" href="tab.css" />
    <![endif]-->
</head>
<body>

<?php

$db = new PDO('sqlite:pokemon.db');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);






$reqBlue = "SELECT * FROM inscrits WHERE couleur='bleu' or couleur='Bleu' ";
$stmtBlue = $db->prepare($reqBlue);


$stmtBlue->execute();
$rowBlue = $stmtBlue->fetch();


$reqYellow = "SELECT * FROM inscrits WHERE couleur='jaune' or couleur='Jaune' ";
$stmtYellow = $db->prepare($reqYellow);


$stmtYellow->execute();
$rowYellow = $stmtYellow->fetch();

$reqRed = "SELECT * FROM inscrits WHERE couleur='rouge' or couleur='Rouge' ";
$stmtRed = $db->prepare($reqRed);


$stmtRed->execute();
$rowRed = $stmtRed->fetch();


$reqBlueBis = "SELECT * FROM inscriptionPetits WHERE couleurPetit='bleu'  or couleurPetit='Bleu' ";
$stmtBlueBis = $db->prepare($reqBlueBis);


$stmtBlueBis->execute();
$rowBlueBis = $stmtBlueBis->fetch();


$reqYellowBis = "SELECT * FROM inscriptionPetits WHERE couleurPetit='jaune' or couleurPetit='Jaune' ";
$stmtYellowBis = $db->prepare($reqYellowBis);


$stmtYellowBis->execute();
$rowYellowBis = $stmtYellowBis->fetch();

$reqRedBis = "SELECT * FROM inscriptionPetits WHERE couleurPetit='rouge' or couleurPetit='Rouge' ";
$stmtRedBis = $db->prepare($reqRedBis);



$stmtRedBis->execute();
$rowRedBis = $stmtRedBis->fetch();

var_dump($rowRedBis);




//AFFICHAGE DE TOUS LES UTILISATEURS
/*  $stmt = $db->prepare("SELECT * FROM users");
  $stmt->execute();
  $result = $stmt->fetchAll();
  print_r($result);
*/
$reqBis = "SELECT * FROM planification  WHERE   ID = (SELECT MAX(ID)  FROM planification);";
$stmtBis = $db->prepare($reqBis);


$stmtBis->execute();
$rowBis = $stmtBis->fetch();


if (isset($rowBis['jour']) and isset($rowBis['heure']) and isset($rowBis['arène'])) {
    echo "<p>" . $rowBis['arène'] . "</p>";
    echo "<p>" . $rowBis['jour'] . "</p>";
    echo "<p>" . $rowBis['heure'] . "</p>";
}
echo "<table border='1'>
<tr>
<th style='background-color: blue'>Bleu</th>


</tr>";




while ($testBlue = $stmtBlue->fetch()) {

    echo "<tr>";
    echo "<td>" . $testBlue['name'] . "</td>";
}

echo "</tr>";
while($testBlueBis = $stmtBlueBis->fetch()) {
    echo "<tr>";
    echo "<td>" . $testBlueBis['petitPseudo'] . "</td>";

    echo "</tr>";

}
echo "</table> </br>";

echo "<table border='1'>
<tr>
<th style='background-color: yellow'>Jaune</th>


</tr>";

while ($testYellow = $stmtYellow->fetch()) {

    echo "<tr>";
    echo "<td>" . $testYellow['name'] . "</td>";

    echo "</tr>";
}
while($testYellowBis = $stmtYellowBis->fetch()) {
    echo "<tr>";
    echo "<td>" . $testYellowBis['petitPseudo'] . "</td>";

    echo "</tr>";

}
echo "</table>  </br>";

echo "<table border='1'>
<tr>
<th style='background-color: red'>Rouge</th>


</tr>";

while($testRed = $stmtRed->fetch()) {

    echo "<tr>";
    echo "<td>" . $testRed['name'] . "</td>";

    echo "</tr>";
}

while ($testRedBis = $stmtRedBis->fetch()) {
    echo "<tr>";
    echo "<td>" . $testRedBis['petitPseudo'] . "</td>";

    echo "</tr>";

}
echo "</table>";

?>

<button onclick="myFunction()">Revenir à ma session</button>
<script>
    function myFunction(){
        window.location.href='session.php';
    }
</script>

</body>
</html>

