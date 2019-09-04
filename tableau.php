<?php

if (isset($_POST['arene'])) {

    if ($_POST['arene'] == "chaudron") {


        echo("<script>
   window.alert('Vous allez être redirigé !');
   window.location.href='tableauChaudron.php';
   </script>");

    }

    if ($_POST['arene'] == "mougins") {


        echo("<script>
   window.alert('Vous allez être redirigé !');
   window.location.href='tableauMougins.php';
   </script>");

    }
    if ($_POST['arene'] == "princesse") {


        echo("<script>
   window.alert('Vous allez être redirigé !');
   window.location.href='tableauPrincesse.php';
   </script>");

    }
}
