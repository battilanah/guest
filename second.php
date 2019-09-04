
<?php
session_start();

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       

        <title>Mes petits comptes</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="responsiveform.css">
        <link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
        <link rel="stylesheet" media="screen and (max-width: 380px)" href="responsiveform3.css" />


    </head>
    <body>


    <div id="envelope">
        <p style="color: whitesmoke">Possédez vous des petits comptes?</p>
        <button onclick="myFunction()">oui</button>
        <button onclick="Redirect()">non</button>
        <form id="myForm" action="creationetitsComptes.php" method="post" style="display: none">

                <label for="petits" style="color: whitesmoke">Combien de petits comptes possédez-vous?</label>
                <input type="text" name="petits"/>
            <input type="submit" name="valider"/>

        </form>
        </div>
            <!--   <input type="submit" value="Valider"  id="validate" onclick="openModal()"/>



           <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display : none" >
               <div class="modal-dialog" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                       <p>hey</p>

                       </div>
                       <div class="modal-footer">

                       </div>
                   </div>
               </div>
           </div>-->

        <script>



            function myFunction() {
                let x = document.getElementById("myForm");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }

            function Redirect(){
                window.location.href='index.php';
            }



        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    </body>
</html>
