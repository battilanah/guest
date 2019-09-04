<?php
if( isset($_POST['jour']) AND isset($_POST['appt'] )AND isset($_POST['arene'] )) {

    $db = new PDO('sqlite:pokemon.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE IF NOT EXISTS planification (
          id INTEGER PRIMARY KEY AUTOINCREMENT,
          jour TEXT NOT NULL,
          heure TEXT NOT NULL,
          arène TEXT NOT NULL
         )
             ");

    $jour=$_POST['jour'];
    $heure=$_POST['appt'];
    $arene=$_POST['arene'];




             $req = "INSERT INTO planification (jour, heure, arène) VALUES(:jour, :appt, :arène )";
             $stmt = $db->prepare($req);
             $stmt->bindParam(':jour', $jour);
             $stmt->bindParam(':appt', $heure);
             $stmt->bindParam(':arène', $arene);
             $stmt->execute();

             header('location:session.php');

         }


?>