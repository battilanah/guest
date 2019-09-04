<?php session_start();
$_SESSION['pseudo']=$_POST['pseudo'];

?>

<?php
if( empty($_POST['pseudo']) or empty($_POST['mot_de_passe']) or  empty($_POST['couleur']) ) {

    echo ("<script>
   window.alert('un champ est vide!');
   window.location.href='create.php';
   </script>"); }

   else {

       $db = new PDO('sqlite:pokemon.db');

       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $db->exec("CREATE TABLE IF NOT EXISTS users (
          id INTEGER PRIMARY KEY AUTOINCREMENT,
          name TEXT NOT NULL,
          pwd TEXT NOT NULL,
          couleur TEXT NOT NULL)
             ");

       $pseudo = $_POST['pseudo'];
       $pass = $_POST['mot_de_passe'];
       $couleur = $_POST['couleur'];

       $reqBis = "SELECT * FROM users WHERE name=:name";
       $stmtBis = $db->prepare($reqBis);;
       $stmtBis->bindParam(':name', $pseudo);
       $stmtBis->execute();
       $row = $stmtBis->fetchAll();
       $res = count($row);

       if ($res > 0) {
           echo("<script>
   window.alert('ce pseudo est déjà pris !');
   window.location.href='create.php';
   </script>");

       } else {


           $req = "INSERT INTO users (name, pwd, couleur) VALUES(:pseudo , :pass, :couleur)";
           $stmt = $db->prepare($req);
           $stmt->bindParam(':pseudo', $pseudo);
           $stmt->bindParam(':pass', $pass);
           $stmt->bindParam(':couleur', $couleur);
           $stmt->execute();

           /*  //AFFICHAGE DE TOUS LES UTILISATEURS
             $stmt = $db->prepare("SELECT * FROM users");
             $stmt->execute();
             $result = $stmt->fetchAll();
             print_r($result);*/
           echo("<script>
   window.alert('Vous êtes inscrit !');
   window.location.href='second.php';
   </script>");

       }


}

?>




