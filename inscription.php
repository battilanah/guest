

<?php session_start();
?>

<?php

$db = new PDO('sqlite:pokemon.db');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec("CREATE TABLE IF NOT EXISTS planification (
          id INTEGER PRIMARY KEY AUTOINCREMENT,
          jour TEXT NOT NULL,
          heure TEXT NOT NULL,
          arène TEXT NOT NULL
         )
             ");
$pseudo=$_POST['pseudo'];

$reqArene = "SELECT arène FROM planification ";
$stmtArene = $db->prepare($reqArene);
$stmtArene->execute();


$rowArene = $stmtArene->fetchAll();
$res = count($rowArene);


if ($res > 0) {



    $reqDeja = "SELECT name FROM inscrits WHERE name= :name ";
    $stmtDeja = $db->prepare($reqDeja);
    $stmtDeja->bindParam(':name', $pseudo);
    $stmtDeja->execute();


    $rowDeja = $stmtDeja->fetchAll();
    $resDeja = count($rowDeja);


    if ($resDeja  > 0) {
        echo("<script>
   window.alert('vous êtes déjà inscrit !');
   window.location.href='session.php';
   </script>");
    } else {


        $db = new PDO('sqlite:pokemon.db');

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $db->exec("CREATE TABLE IF NOT EXISTS inscrits (
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

        $req = "INSERT INTO inscrits (name, couleur) VALUES(:pseudo, :couleur )";
        $stmt = $db->prepare($req);
        $stmt->bindParam(':pseudo', $pseudo);
        $stmt->bindParam(':couleur', $couleur);
        $stmt->execute();

        /*  //AFFICHAGE DE TOUS LES UTILISATEURS
          $stmt = $db->prepare("SELECT * FROM users");
          $stmt->execute();
          $result = $stmt->fetchAll();
          print_r($result);*/
        echo("<script>
   window.alert('Vous êtes inscrit !');
   window.location.href='session.php';
  
   </script>");

    }

}

else {echo("<script>
   window.alert('aucun raid prévu  !');
   window.location.href='session.php';
  
   </script>");}


?>