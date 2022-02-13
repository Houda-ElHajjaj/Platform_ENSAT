<?php

    require_once("bd.php");
    if(isset($_POST['sign']))
    {
        if(empty($_POST['user']) || empty($_POST['pass']) ||empty($_POST['cne'])||empty($_POST['email'])||empty($_POST['photo']))
        {
          
            echo ' Please fill in the blanks ';
            
        }
        else
        {
            $User = $_POST['user'];
            $Pass = $_POST['pass'];
            $Cne = $_POST['cne'];
            $Email = $_POST['email'];
            $Photo = $_POST['photo'];

            $query = " insert into compte (utilisateur, password, CNE, email, photo) values('$User','$Pass','$Cne','$Email','$Photo')";
            $result = mysqli_query($con,$query); 

            if($result)
            {
                header("location:bienvenue.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.html");  
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
   
    <style>
        
        body{
            margin : 23%;
            font-size: 400%;
            text-align: center;
            color: green;
        }
    </style>
</head>
<body class="bg-dark">
    
</body>
</html>