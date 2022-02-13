<?php

session_start();

require_once("bd.php");
if (isset($_POST['connexion']))
  {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
      if ($con)
       {
        $sql = " SELECT * FROM compte WHERE utilisateur='".$user."' AND password= '".$pass."'";
        $result = mysqli_query($con,$sql);
        if (mysqli_num_rows($result)==1)
        {
          header("location:bienvenue.php");
        }
        
      
              else{
                header("location:index.php");
                }
       }
              
               
       


}
?>