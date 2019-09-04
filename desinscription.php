<?php

if (isset($_POST['arene'])) {
    $db = new PDO('sqlite:pokemon.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if ($_POST['arene'] == "chaudron") {


        $req = "SELECT * FROM chaudron ";
        $stmt = $db->prepare($req);;

        $stmt->execute();
        $row = $stmt->fetchAll();
        $res = count($row);

        if ($res > 0) {


            $db->exec("CREATE TABLE IF NOT EXISTS inscritsChaudron (

  id INTEGER PRIMARY KEY AUTOINCREMENT,
          name TEXT NOT NULL,
          couleur TEXT NOT NULL
         )
             ");

            $pseudo = $_POST['pseudo'];


            $reqBis = "DELETE FROM inscritsChaudron WHERE name= :name ";
            $stmtBis = $db->prepare($reqBis);
            $stmtBis->bindParam(':name', $pseudo);


            $stmtBis->execute();


            $req = "DELETE FROM inscriptionPetitsChaudron WHERE pseudo= :pseudo ";
            $stmt = $db->prepare($req);
            $stmt->bindParam(':pseudo', $pseudo);


            $stmt->execute();



            echo("<script>
   window.alert('Vous allez être redirigé !');
   window.location.href='session.php';
  
   </script>");

        } else {
            echo("<script>
   window.alert('Aucun raid de prévu!');
   window.location.href='session.php';
  
   </script>");
        }
    }

    if ($_POST['arene'] == "princesse") {

        $req = "SELECT * FROM princesse ";
        $stmt = $db->prepare($req);;

        $stmt->execute();
        $row = $stmt->fetchAll();
        $res = count($row);

        if ($res > 0) {


            $db = new PDO('sqlite:pokemon.db');

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $db->exec("CREATE TABLE IF NOT EXISTS inscritsPrincesse (

  id INTEGER PRIMARY KEY AUTOINCREMENT,
          name TEXT NOT NULL,
          couleur TEXT NOT NULL
         )
             ");

            $pseudo = $_POST['pseudo'];


            $reqBis = "DELETE FROM inscritsPrincesse WHERE name= :name ";
            $stmtBis = $db->prepare($reqBis);
            $stmtBis->bindParam(':name', $pseudo);


            $stmtBis->execute();

            $req = "DELETE FROM inscriptionPetitsPrincesse WHERE name= :name ";
            $stmt = $db->prepare($req);
            $stmt->bindParam(':name', $pseudo);


            $stmt->execute();



            echo("<script>
   window.alert('Vous allez être redirigé !');
   window.location.href='session.php';
  
   </script>");

        } else {
            echo("<script>
   window.alert('aucun raid de prévu!');
   window.location.href='session.php';
  
   </script>");

        }
    }


    if ($_POST['arene'] == "mougins") {

        $req = "SELECT * FROM mougins ";
        $stmt = $db->prepare($req);;

        $stmt->execute();
        $row = $stmt->fetchAll();
        $res = count($row);

        if ($res > 0) {


            $db = new PDO('sqlite:pokemon.db');

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $db->exec("CREATE TABLE IF NOT EXISTS inscritsMougins (

  id INTEGER PRIMARY KEY AUTOINCREMENT,
          name TEXT NOT NULL,
          couleur TEXT NOT NULL
         )
             ");

            $pseudo = $_POST['pseudo'];


            $reqBis = "DELETE FROM inscritsMougins WHERE name= :name ";
            $stmtBis = $db->prepare($reqBis);
            $stmtBis->bindParam(':name', $pseudo);


            $stmtBis->execute();

            $req = "DELETE FROM inscriptionPetitsMougins WHERE name= :name ";
            $stmt = $db->prepare($req);
            $stmt->bindParam(':name', $pseudo);


            $stmt->execute();



            echo("<script>
   window.alert('Vous allez être redirigé !');
   window.location.href='session.php';
  
   </script>");
        } else {
            echo("<script>
   window.alert('aucun raid de prévu !');
   window.location.href='session.php';
   </script>");
        }
    }
}






