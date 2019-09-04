<?php session_start();
$_SESSION['pseudo']=$_POST["pseudo"];
?>

<?php
if(!empty($_POST['pseudo']) && !empty($_POST['mot_de_passe']) ) {
    $pseudo=$_POST['pseudo'];
    $pass=$_POST['mot_de_passe'];

    $db = new PDO('sqlite:pokemon.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE IF NOT EXISTS users (
         id INTEGER PRIMARY KEY AUTOINCREMENT,
         name TEXT NOT NULL,
         pwd TEXT NOT NULL)
            ");

    $reqHash="SELECT pwd FROM users WHERE name=:name";
    $stmtHash = $db->prepare($reqHash);
    $stmtHash->bindParam(':name', $pseudo);
    $stmtHash ->execute();
    $rowHash = $stmtHash->fetch();



    $mdp=$rowHash['pwd'];



    $bool=password_verify($pass,$mdp);





    if ($bool){
        echo ("<script>
   window.alert('connexion réussie!');
   window.location.href='session.php';
   </script>");

    }                                                 /*avec HASHAGE*/

    else{
        echo ("<script>
   window.alert('mdp ou pseudo invalide !');
   window.location.href='index.php';
   </script>");
    }



}





/*
    $req = "SELECT * FROM users WHERE name=:name AND pwd=:pwd";
    $stmt = $db->prepare($req);
    $stmt->bindParam(':name', $pseudo);
    $stmt->bindParam(':pwd', $pass);
    $stmt->execute();
    $row = $stmt->fetchAll();


    $res= count($row);
                                                                           SANS HASHAGE
    header('location:protection.php');

    if($res>0) {
        header("Location: session.php");
    }
    else {
        echo ("<script>
   window.alert('ce compte n\'existe pas !');
   window.location.href='index.php';
   </script>");


    }


}*/
else{

    echo ("<script>
   window.alert('un champ est vide !');
   window.location.href='index.php';
   </script>");

}

$_SESSION['pseudo']=$_POST['pseudo'];







