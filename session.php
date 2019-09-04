

<?php session_start();
$username=$_SESSION['pseudo'];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Contour
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130706

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        body{
            background: url('tab.png') no-repeat center center fixed;

            background-size: cover;
            /* For older browsers */
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            min-height:800px;}

        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon go</title>
    <meta name="keywords" content="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <meta name="description" content="" />




</head>
   <body>

   <p>Cette page est faite pour aider Aurore (alias maman) à organiser les raids ex !</p>
   <p>Vous êtes connecté(e) en tant que <strong><?php echo ($_SESSION['pseudo']) ?></strong></p>
   <p>Cliquez sur le bouton suivant pour vous inscrire au prochain raid ex, ou vous supprimer</p>
   <button id="ajout" onclick="myFunction()">s'inscrire</button>
   <button id="supp" onclick="desinscription()">se désinscrire</button>
   <form action="desinscription.php" method="post" id="desinscription" style="display: none">
       <input type="hidden" name="pseudo" value="<?php echo ($_SESSION['pseudo']) ?>" >
       <input type="checkbox" name="arene" value="chaudron">chaudron</input><br><br>
       <input type="checkbox" name="arene" value="princesse">princesse pauline</input><br><br>
       <input type="checkbox" name="arene"value="mougins">mougins</input><br>

       <input type="submit" name="supprimer" value="supprimer">
   </form>


   <form style="display: none;" action="redirectionInscription.php" method="post" id="myForm">

       <input type="hidden" name="pseudo" value="<?php echo ($_SESSION['pseudo']) ?>">
       <input type="checkbox" name="arene" value="chaudron">chaudron</input><br><br>
       <input type="checkbox" name="arene" value="princesse">princesse pauline</input><br><br>
       <input type="checkbox" name="arene" value="mougins">mougins</input><br><br>

       <input type="submit" name="envoyer">
   </form>
  <p> <?php if($_SESSION['pseudo']=="dawn3785"){
       ?> <p>Vous êtes admin! (et maman)</p>
       <p>Vous avez le privilège de pouvoir rentrer la date et le nom de l'arène du prochain raid ex </p><br>
      <button onclick="organiser()">Organiser un raid ex</button><br><br>


       <form action="redirectionPlanification.php" method="post" id="organiser" style="display: none">
           <label for="jour">Jour:</label><br>
       <input type="text" name="jour"><br><br>
           <label for="appt">heure </label><br>
   <input type="time" id="appt" name="appt"
          min="9:00"  required><br><br>

           <input type="checkbox" name="arene" value="chaudron">chaudron</input><br><br>
           <input type="checkbox" name="arene" value="princesse">princesse pauline</input><br><br>
           <input type="checkbox" name="arene" value="mougins">mougins</input><br><br>
   <input type="submit" name="valider">
       </form>
   <button onclick="myFunctionSupp()">Supprimer un raid ex</button>
   <form action="supprimer.php" method="post" id="formSupp" style="display: none">
       <input type="checkbox" name="arene" value="chaudron">chaudron</input><br><br>
       <input type="checkbox" name="arene" value="princesse">princesse pauline</input><br><br>
       <input type="checkbox" name="arene"value="mougins">mougins</input><br><br>

       <input type="submit" name="supprimer" value="supprimer">
   </form>




   <?php } ?></p>


   <button onclick="show()">voir les inscrits</button><br><br>
   <form style="display: none;" action="tableau.php" method="post" id="myFormBis">


       <input type="checkbox" name="arene" value="chaudron">chaudron</input><br><br>
       <input type="checkbox" name="arene" value="princesse">princesse pauline</input><br><br>
       <input type="checkbox" name="arene" value="mougins">mougins</input><br><br>


       <input type="submit" name="envoyer"><br>
   </form>
   <button onclick="redirectBis()">ajouter un nouveau petit compte !</button><br><br><br>
   <button onclick="inscrirePetits()">inscrire mon petit compte à un raid ex</button><br><br><br>
   <form style="display: none;" action="ajoutPetitsComptes.php" method="post" id="PetitsComptes">


       <input type="checkbox" name="arene" value="chaudron">chaudron</input><br><br>
       <input type="checkbox" name="arene" value="princesse">princesse pauline</input><br><br>
       <input type="checkbox" name="arene" value="mougins">mougins</input><br><br>
       <input type="submit" name="envoyer">
   </form>
  <form method="post" action="supprimerCompte.php">
      <input type="text" name="compte" value="<?php echo($_SESSION['pseudo'])?>" style="display: none">
      <input type="submit" name="supprimer mon compte" value="supprimer mon compte">
  </form>
     

   <script>
       
       function desinscription(){
           var x = document.getElementById("desinscription");
           if (x.style.display === "none") {
               x.style.display = "block";
           } else {
               x.style.display = "none";
           }


       }
       function inscrirePetits(){
           var x = document.getElementById("PetitsComptes");
           if (x.style.display = "none") {
               x.style.display = "block";
           } else {
               x.style.display = "none";
           }

       }

   function redirect(){
       window.location.href='tableau.php';
   }

   function redirectBis(){
       window.location.href='second.php';
   }

   function ajout(){
       window.location.href='ajoutsPetits.php'
   }

  function myFunction() {
      var x = document.getElementById("myForm");
      if (x.style.display === "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }
  }

   function show() {
       var x = document.getElementById("myFormBis");
       if (x.style.display === "none") {
           x.style.display = "block";
       } else {
           x.style.display = "none";
       }
   }
   function myFunctionSupp() {
       var x = document.getElementById("formSupp");
       if (x.style.display === "none") {
           x.style.display = "block";
       } else {
           x.style.display = "none";
       }
   }
  function organiser(){
      var x = document.getElementById("organiser");
      if (x.style.display === "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }

  }




  </script>


   </body>
</html>