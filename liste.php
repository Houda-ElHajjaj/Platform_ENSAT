<?php
    
    require_once("bd.php");
    $query = " select * from compte";
    $result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/bootstrap.css">
    <title>Document</title>
    <style>
body {
	color: green;
}
<style>
table {
border-style: solid;
border-width: 3px;
border-color: green;
}
th {
color: #3D979D;
border-style: solid;
border-width: 3px;
border-color: green;
}
td {
border: 3px dotted green;
}
</style>

</style>
</head>
<body class="bg-dark">
<div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3"> PLATFORM ENSAT</h3>
                    </div>
                    <div class="card-body ">
                        
                    <tr> <a href="bienvenue.php"> Bienvenue </a></tr> <br>
<center><h2> Voici la liste des étudiants GINF1 de l'ENSAT </h2></center>
<table class= "table table-bordered" align = "center">
                         <tr>
                            <th> Nom d'utilisateur </th>
                            <th> CNE </th>
                            <th> Email </th>
                            <th> Image </th>
                            <th> Profile </th>
                            <th> Supprimer </th>
                         </tr>

                         <?php

                             while($row=mysqli_fetch_assoc($result))
                             {
                                 $User = $row['utilisateur'];
                                 $Pass = $row['password'];
                                 $Cne = $row['CNE'];
                                 $Email = $row['email'];
                                 $Photo = $row['photo'];
                             
                         ?>
                               <tr>
                                   <td> <?php echo $User ?> </td>
                                   <td> <?php echo $Cne ?> </td>
                                   <td> <?php echo $Email ?> </td>
                                   <td> <img src="<?php  $Photo; ?>"height="100" width="100"> </td>
                                   <td><a href="profiledit.php?GetID=<?php echo $Cne ?>"> Profile </a></td>
                                   <td><a href="delete.php?Del=<?php echo $Cne ?>"> Supprimer </a></td>
                               </tr>
                         <?php
                             } 
                         ?>


                     </table>

                     </div>
                </div>
            </div>
        </div>
    </div>

                   
 
</body>


</html>