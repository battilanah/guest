
<?php session_start();
$_SESSION['pseudo']=$_POST['pseudo'];
?>

<?php
if(!empty($_POST['petitPseudo1'])  ) {
    $pseudo = $_SESSION['pseudo'];


    $db = new PDO('sqlite:pokemon.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE IF NOT EXISTS petitsComptes (
         id INTEGER PRIMARY KEY AUTOINCREMENT,
         pseudo TEXT NOT NULL,
         petitPseudo TEXT NOT NULL,
         couleurPetit TEXT NOT NULL )
            ");




    $keys = array_keys($_POST);
    $patternPseudo='/petitPseudo/';
 /*   var_dump($keys);*/
$result = preg_grep($patternPseudo, $keys);
/*var_dump($result);*/


    $patternCouleur='/petitCouleur/';
   /*  var_dump($keys);*/
    $result = preg_grep($patternCouleur, $keys);

  /*  var_dump($result);*/

    foreach ($result as $res){
      $num = $res[-1];
      $col1 = $_POST['petitPseudo'.$num];
      $col2 = $_POST['petitCouleur'.$num];
        $req = "INSERT INTO petitsComptes (pseudo, petitPseudo, couleurPetit) VALUES(:pseudo , :petitPseudo, :couleurPetit)";
        $stmt = $db->prepare($req);
        $stmt->bindParam(':pseudo', $pseudo);
        $stmt->bindParam(':petitPseudo', $col1);
        $stmt->bindParam(':couleurPetit', $col2);
        $stmt->execute();
    }










        echo("<script>
   window.alert('Vous êtes inscrit !');
   window.location.href='session.php';
   </script>");




}
