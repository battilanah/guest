<?php
 session_start();


$db = new PDO('sqlite:pokemon.db');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec("CREATE TABLE IF NOT EXISTS users (
         id INTEGER PRIMARY KEY AUTOINCREMENT,
         name TEXT NOT NULL,
         pwd TEXT NOT NULL)
            ");

$pseudo=$_POST['compte'];


$req="DELETE FROM users WHERE name=:name";
$stmt = $db->prepare($req);
$stmt->bindParam(':name', $pseudo);
$stmt ->execute();

$reqBis="DELETE FROM petitsComptes WHERE pseudo=:pseudo";
$stmtBis = $db->prepare($reqBis);
$stmtBis->bindParam(':pseudo', $pseudo);
$stmtBis ->execute();

$reqChaudron = "DELETE FROM inscritsChaudron WHERE name= :name ";
$stmtChaudron = $db->prepare($reqChaudron);
$stmtChaudron->bindParam(':name', $pseudo);


$stmtChaudron->execute();


$reqPetitsC = "DELETE FROM inscriptionPetitsChaudron WHERE pseudo= :pseudo ";
$stmtPetitsC = $db->prepare($reqPetitsC);
$stmtPetitsC->bindParam(':pseudo', $pseudo);


$stmtPetitsC->execute();

$reqPrincesse = "DELETE FROM inscritsPrincesse WHERE name= :name ";
$stmtPrincesse = $db->prepare($reqPrincesse);
$stmtPrincesse->bindParam(':name', $pseudo);


$stmtPrincesse->execute();


$reqPetitsP = "DELETE FROM inscriptionPetitsPrincesse WHERE name= :name ";
$stmtPetitsP = $db->prepare($reqPetitsP);
$stmt->bindParam(':name', $pseudo);


$stmtPetitsP->execute();

$reqMougins = "DELETE FROM inscritsMougins WHERE name= :name ";
$stmtMougins = $db->prepare($reqMougins);
$stmtMougins->bindParam(':name', $pseudo);


$stmtMougins->execute();


$reqPetitsM = "DELETE FROM inscriptionPetitsMougins WHERE name= :name";
$stmtPetitsM = $db->prepare($reqPetitsM);
$stmtPetitsM->bindParam(':name', $pseudo);


$stmtPetitsM->execute();




echo("<script>
   window.alert('Votre compte a bien été supprimé, ainsi que vos petits comptes!');
   window.location.href='index.php';
   </script>");