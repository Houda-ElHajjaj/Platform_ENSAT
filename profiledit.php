<?php 

     require_once("bd.php");
     $UserID = $_GET['GetID'];
     $query = " select * from compte where CNE='".$UserID."'";
     $result = mysqli_query($con,$query);

     while($row=mysqli_fetch_assoc($result))
     {
        $User = $row['utilisateur'];
        $Pass = $row['password'];
        $Cne = $row['CNE'];
        $Email = $row['email'];
        $Photo = $row['photo'];
     }
    


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
            <div class="col-lg-18 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3"> PLATFORM ENSAT</h3>
                    </div>
                     <div class="card-body ">
                     <form action="update.php?ID=<?php echo $UserID ?>" method="post" enctype="multipart/form-data">
            Nom d'utilisateur :
            <input type="text"  class="form-control mb-2"  name="newuser" value="<?php echo $User ?>">
            CNE :
            <input type="number"  class="form-control mb-2"  name="newcne" value="<?php echo $Cne ?>">
            Email :
            <input type="text"  class="form-control mb-2" name="newemail" value="<?php echo $Email ?>">
            Photo :
            <input type="file" class="form-control mb-2" name="newphoto"  id="newphoto" value="<?php echo $Photo ?>">
            <button class="btn btn-primary " name="update" > Modifier </button>
        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>

                   
 
</body>


</html> 