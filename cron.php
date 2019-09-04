<?php

if($_POST['action'] == 'call_this') {
    $db = new PDO('sqlite:pokemon.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $pseudo = $_POST['pseudo'];

    $reqArene = "DELETE * FROM inscrits ";
    $stmtArene = $db->prepare($reqArene);
    $stmtArene->execute();
}

?>