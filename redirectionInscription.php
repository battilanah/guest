<?php

if (isset($_POST['arene'])) {
    $db = new PDO('sqlite:pokemon.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pseudo=$_POST['pseudo'];


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


        $reqInscrit = "SELECT * FROM inscritsChaudron where name=:name ";
        $stmtInscrit = $db->prepare($reqInscrit);
        $stmtInscrit->bindParam(':name', $pseudo);
        $stmtInscrit->execute();

        $rowInscrit = $stmtInscrit->fetchAll();
        $resInscrit = count($rowInscrit);

        if ($resInscrit >0) {
            echo("<script>
   window.alert('Vous vous êtes déjà inscrit !');
   window.location.href='session.php';
  
   </script>");

        }
        else {
            $db->exec("CREATE TABLE IF NOT EXISTS inscritsChaudron (

  id INTEGER PRIMARY KEY AUTOINCREMENT,
          name TEXT NOT NULL,
          couleur TEXT NOT NULL
         )
             ");

            $pseudo = $_POST['pseudo'];


            $reqBis = "SELECT couleur FROM users WHERE name= :name ";
            $stmtBis = $db->prepare($reqBis);
            $stmtBis->bindParam(':name', $pseudo);


            $stmtBis->execute();
            $rowBis = $stmtBis->fetch();
            $couleur = $rowBis['couleur'];

            $req = "INSERT INTO inscritsChaudron (name, couleur) VALUES(:pseudo, :couleur )";
            $stmt = $db->prepare($req);
            $stmt->bindParam(':pseudo', $pseudo);
            $stmt->bindParam(':couleur', $couleur);
            $stmt->execute();


            echo("<script>
   window.alert('Vous allez être redirigé !');
   window.location.href='ajoutsPetitsChaudron.php';
  
   </script>");
        }

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

            $db->exec("CREATE TABLE IF NOT EXISTS inscritsPrincesse (

  id INTEGER PRIMARY KEY AUTOINCREMENT,
          name TEXT NOT NULL,
          couleur TEXT NOT NULL
         )
             ");


            $reqInscrit = "SELECT * FROM inscritsPrincesse where name=:name ";
            $stmtInscrit = $db->prepare($reqInscrit);
            $stmtInscrit->bindParam(':name', $pseudo);


            $stmtInscrit->execute();
            $rowInscrit = $stmtInscrit->fetchAll();
            $resInscrit = count($rowInscrit);

            if ($resInscrit >0) {
                echo("<script>
   window.alert('Vous vous êtes déjà inscrit !');
   window.location.href='session.php';
  
   </script>");

            }
            else {


                $db = new PDO('sqlite:pokemon.db');

                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $db->exec("CREATE TABLE IF NOT EXISTS inscritsPrincesse (

  id INTEGER PRIMARY KEY AUTOINCREMENT,
          name TEXT NOT NULL,
          couleur TEXT NOT NULL
         )
             ");

                $pseudo = $_POST['pseudo'];


                $reqBis = "SELECT couleur FROM users WHERE name= :name ";
                $stmtBis = $db->prepare($reqBis);
                $stmtBis->bindParam(':name', $pseudo);


                $stmtBis->execute();
                $rowBis = $stmtBis->fetch();
                $couleur = $rowBis['couleur'];

                $req = "INSERT INTO inscritsPrincesse (name, couleur) VALUES(:pseudo, :couleur)";
                $stmt = $db->prepare($req);
                $stmt->bindParam(':pseudo', $pseudo);
                $stmt->bindParam(':couleur', $couleur);
                $stmt->execute();


                echo("<script>
   window.alert('Vous allez être redirigé !');
   window.location.href='ajoutsPetitsPrincesse.php';
  
   </script>");
            }

        } else {
            echo("<script>
   window.alert('aucun raid de prévu!');
   window.location.href='session.php';
  
   </script>");

        }
    }


    if ($_POST['arene'] == "mougins") {

        $req = "SELECT * FROM mougins  ";
        $stmt = $db->prepare($req);;

        $stmt->execute();
     ;
        $row = $stmt->fetchAll();
        $res = count($row);

        if ($res > 0) {

            $db->exec("CREATE TABLE IF NOT EXISTS inscritsMougins (

  id INTEGER PRIMARY KEY AUTOINCREMENT,
          name TEXT NOT NULL,
          couleur TEXT NOT NULL
         )
             ");


            $reqInscrit = "SELECT * FROM inscritsMougins where name=:name ";
            $stmtInscrit = $db->prepare($reqInscrit);
            $stmtInscrit->bindParam(':name', $pseudo);


            $stmtInscrit->execute();
            $rowInscrit = $stmtInscrit->fetchAll();
            $resInscrit = count($rowInscrit);

            if ($resInscrit > 0) {
                echo("<script>
   window.alert('Vous vous êtes déjà inscrit !');
   window.location.href='session.php';
  
   </script>");

            } else {

                $db = new PDO('sqlite:pokemon.db');

                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $db->exec("CREATE TABLE IF NOT EXISTS inscritsMougins (

  id INTEGER PRIMARY KEY AUTOINCREMENT,
          name TEXT NOT NULL,
          couleur TEXT NOT NULL
         )
             ");

                $pseudo = $_POST['pseudo'];


                $reqBis = "SELECT couleur FROM users WHERE name= :name ";
                $stmtBis = $db->prepare($reqBis);
                $stmtBis->bindParam(':name', $pseudo);


                $stmtBis->execute();
                $rowBis = $stmtBis->fetch();
                $couleur = $rowBis['couleur'];

                $req = "INSERT INTO inscritsMougins (name, couleur) VALUES(:pseudo, :couleur )";
                $stmt = $db->prepare($req);
                $stmt->bindParam(':pseudo', $pseudo);
                $stmt->bindParam(':couleur', $couleur);
                $stmt->execute();


                echo("<script>
   window.alert('Vous allez être redirigé !');
   window.location.href='ajoutsPetitsMougins.php';
  
   </script>");
            }
        }
        else {
                echo("<script>
   window.alert('aucun raid de prévu !');
   window.location.href='session.php';
   </script>");
        }
        }
        }






?>