<?php

     require_once("bd.php");

    if(isset($_POST['update']))
    {
         $UserID = $_GET['ID'];
         $User = $_POST['newuser'];
         $Email = $_POST['newemail'];
         $Photo = $_FILES['newphoto']['name'];;

         $query = " update compte set utilisateur = '".$User."', email = '".$Email."', photo = '".$Photo."' where CNE = '".$UserID."'";
         $result = mysqli_query($con,$query);

         if($result)
         {
            header("location:liste.php");
         }
         else
         {
             echo ' Please Check Your Query';
         }
    }
    else
    {
         header("location:liste.php");
    }




?>