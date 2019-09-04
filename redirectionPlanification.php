<?php


if (isset($_POST['arene'])) {

    if ($_POST['arene'] == "chaudron") {

        $db = new PDO('sqlite:pokemon.db');

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $db->exec("CREATE TABLE IF NOT EXISTS chaudron (

          id INTEGER PRIMARY KEY AUTOINCREMENT,
          jour TEXT NOT NULL,
          heure TEXT NOT NULL,
          arene TEXT NOT NULL
         )
             ");


        $reqdeja = " SELECT * FROM chaudron";
        $stmtdeja = $db->prepare($reqdeja);

        $stmtdeja->execute();
        $rowdeja = $stmtdeja->fetchAll();
        $resdeja = count($rowdeja);

        if ($resdeja > 0) {
            echo("<script>
   window.alert('un raid existe déjà!');
   window.location.href='session.php';
  
   </script>");
        } else {
            if (!empty($_POST['jour']) and !empty($_POST['appt'])) {


                $db = new PDO('sqlite:pokemon.db');

                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $db->exec("CREATE TABLE IF NOT EXISTS chaudron (

          id INTEGER PRIMARY KEY AUTOINCREMENT,
          jour TEXT NOT NULL,
          heure TEXT NOT NULL,
          arene TEXT NOT NULL
         )
             ");

                $jour = $_POST['jour'];
                $heure = $_POST['appt'];
                $arene = $_POST['arene'];


                $req = "INSERT INTO chaudron (jour, heure, arene) VALUES(:jour, :appt, :arene )";
                $stmt = $db->prepare($req);
                $stmt->bindParam(':jour', $jour);
                $stmt->bindParam(':appt', $heure);
                $stmt->bindParam(':arene', $arene);
                $stmt->execute();
                echo("<script>
   window.alert('raid créé !');
   window.location.href='session.php';
  
   </script>");
            }
        }
    }

    if ($_POST['arene'] == "mougins") {

        $db = new PDO('sqlite:pokemon.db');

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $db->exec("CREATE TABLE IF NOT EXISTS mougins{
          id INTEGER PRIMARY KEY AUTOINCREMENT,
          jour TEXT NOT NULL,
          heure TEXT NOT NULL,
          arene TEXT NOT NULL
         )
             ");


        $reqdeja = " SELECT * FROM mougins";
        $stmtdeja = $db->prepare($reqdeja);

        $stmtdeja->execute();
        $rowdeja = $stmtdeja->fetchAll();
        $resdeja = count($rowdeja);

        if ($resdeja > 0) {
            echo("<script>
   window.alert('un raid existe déjà!');
   window.location.href='session.php';
  
   </script>");
        } else {


            if (!empty($_POST['jour']) and !empty($_POST['appt'])) {


                $db = new PDO('sqlite:pokemon.db');

                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $db->exec("CREATE TABLE IF NOT EXISTS mougins(

          id INTEGER PRIMARY KEY AUTOINCREMENT,
          jour TEXT NOT NULL,
          heure TEXT NOT NULL,
          arene TEXT NOT NULL
         )
             ");

                $jour = $_POST['jour'];
                $heure = $_POST['appt'];
                $arene = $_POST['arene'];


                $req = "INSERT INTO mougins (jour, heure, arene) VALUES(:jour, :appt, :arene )";
                $stmt = $db->prepare($req);
                $stmt->bindParam(':jour', $jour);
                $stmt->bindParam(':appt', $heure);
                $stmt->bindParam(':arene', $arene);
                $stmt->execute();
                echo("<script>
   window.alert('raid créé !');
   window.location.href='session.php';
  
   </script>");
            }
        }
    }

    if ($_POST['arene'] == "princesse") {

        $db = new PDO('sqlite:pokemon.db');

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $db->exec("CREATE TABLE IF NOT EXISTS princesse (

          id INTEGER PRIMARY KEY AUTOINCREMENT,
          jour TEXT NOT NULL,
          heure TEXT NOT NULL,
          arene TEXT NOT NULL
         )
             ");


        $reqdeja = " SELECT * FROM princesse";
        $stmtdeja = $db->prepare($reqdeja);

        $stmtdeja->execute();
        $rowdeja = $stmtdeja->fetchAll();
        $resdeja = count($rowdeja);

        if ($resdeja > 0) {
            echo("<script>
   window.alert('un raid existe déjà!');
   window.location.href='session.php';
  
   </script>");
        } else

        if (!empty($_POST['jour']) and !empty($_POST['appt'])) {


            $db = new PDO('sqlite:pokemon.db');

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $db->exec("CREATE TABLE IF NOT EXISTS princesse (

          id INTEGER PRIMARY KEY AUTOINCREMENT,
          jour TEXT NOT NULL,
          heure TEXT NOT NULL,
          arene TEXT NOT NULL
         )
             ");

            $jour = $_POST['jour'];
            $heure = $_POST['appt'];
            $arene = $_POST['arene'];


            $req = "INSERT INTO princesse (jour, heure, arene) VALUES(:jour, :appt, :arene )";
            $stmt = $db->prepare($req);
            $stmt->bindParam(':jour', $jour);
            $stmt->bindParam(':appt', $heure);
            $stmt->bindParam(':arene', $arene);
            $stmt->execute();
            echo("<script>
   window.alert('raid créé!');
   window.location.href='session.php';
  
   </script>");


        }
    }


}
?>