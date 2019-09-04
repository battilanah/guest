<?php session_start();

$_SESSION['pseudo']='';

echo("<script>
   window.alert('deconnecté !');
   window.location.href='index.php';
   </script>")

?>
/**
 * Created by PhpStorm.
 * User: hugob
 * Date: 26/11/2018
 * Time: 12:35
 */