<?php
session_start();
$nom = $_SESSION['nom'];
$ps = $_SESSION['ps'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <title>Document</title>
    <style>
body {
	color: red;
}
center {
    font-size: 140%;
	color: #3D979D;
}

</style>
</head>
<body class="bg-dark">
<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3"> PLATFORM ENSAT</h3>
                    </div>
                    <div class="card-body ">
                    <center >
         Bienvenue à la platforme ENSAT
        </center>

     
     <table align="right">
     
     <tr> <a href="liste.php"> Liste </a></tr> <br>
     <tr> <a href="deconnexion.php"> Deconnexion </a></tr> <br>
     </table> 
                     </div>
                </div>
            </div>
        </div>
    </div>

                   
 
</body>

</html>