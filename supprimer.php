

<?php session_start();
?>

<?php

$db = new PDO('sqlite:pokemon.db');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['arene'])){

   if ($_POST['arene']=='chaudron'){





$reqChaudron = "DELETE FROM chaudron";
$stmtChaudron = $db->prepare($reqChaudron);

$stmtChaudron->execute();

$req = "DELETE FROM InscriptionPetitsChaudron ";
$stmt = $db->prepare($req);

$stmt->execute();

$reqInscrits="DELETE FROM inscritsChaudron";
$stmtInscrits = $db->prepare($reqInscrits);

$stmtInscrits->execute();


echo("<script>
    window.alert('raid supprimé !');
    window.location.href='session.php';





</script>");

}

elseif ($_POST['arene']=='princesse'){





$reqPrincesse = "DELETE FROM princesse";
$stmtPrincesse = $db->prepare($reqPrincesse);

$stmtPrincesse->execute();

$req = "DELETE FROM InscriptionPetitsPrincesse ";
$stmt = $db->prepare($req);

$stmt->execute();

$reqInscrits="DELETE FROM inscritsPrincesse";
$stmtInscrits = $db->prepare($reqInscrits);

$stmtInscrits->execute();


echo("<script>
    window.alert('raid supprimé !');
    window.location.href='session.php';





</script>");

}

elseif ($_POST['arene']=='mougins'){





$reqMougins= "DELETE FROM mougins";
$stmtMougins = $db->prepare($reqMougins);

$stmtMougins->execute();

$req = "DELETE FROM InscriptionPetitsMougins ";
$stmt = $db->prepare($req);

$stmt->execute();

$reqInscrits="DELETE FROM inscritsMougins";
$stmtInscrits = $db->prepare($reqInscrits);

$stmtInscrits->execute();


echo("<script>
   window.alert('raid supprimé !');
   window.location.href='session.php';

  
   
   
  
   </script>");

}} ?>


