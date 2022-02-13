<?php 
    require_once("bd.php");
    if(isset($_GET['Del']))
    {
       $UserID = $_GET['Del'];
       $query = " delete from compte where CNE= '".$UserID."'";
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

?>