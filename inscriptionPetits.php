<?php session_start();

?>

<?php



    $db = new PDO('sqlite:pokemon.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE IF NOT EXISTS inscriptionPetits (
         id INTEGER PRIMARY KEY AUTOINCREMENT,
         
         petitPseudo TEXT NOT NULL,
         couleurPetit TEXT NOT NULL )
            ");


    $keys = array_keys($_POST);
    $patternPseudo = '/petitPseudo/';

    $result = preg_grep($patternPseudo, $keys);





    foreach ($result as $res) {

        $i = 0;
        $num = $res[-1];
        $col1 = $_POST['petitPseudo' . $num];

        $reqBis = "SELECT couleurPetit FROM petitsComptes  WHERE petitPseudo=:petitPseudo";
        $stmtBis = $db->prepare($reqBis);;
        $stmtBis->bindParam(':petitPseudo', $col1);
        $stmtBis->execute();
        $row = $stmtBis->fetchAll();

        foreach ($row as $resBis) {
        $col2=$resBis['couleurPetit'];


        $req = "INSERT INTO inscriptionPetits ( petitPseudo, couleurPetit) VALUES( :petitPseudo, :couleurPetit)";
        $stmt = $db->prepare($req);
        $stmt->bindParam(':petitPseudo', $col1);
        $stmt->bindParam(':couleurPetit', $col2);
        $stmt->execute();
        $i++;
    }
    }


    echo("<script>
   window.alert('Vous êtes inscrit !');
   window.location.href='session.php';
  
   </script>");




/**
 * Created by PhpStorm.
 * User: hugob
 * Date: 27/11/2018
 * Time: 15:27
 */