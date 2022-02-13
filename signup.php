<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <title>Document</title>
    <style>

table {
    font-size: 100%;
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
                    <form action="insert.php" method="post">
     <table align="center">
         <tr>
             <td> Nom d'utilisateur :  </td>
             <td><input type="text" name="user"></td>
         </tr>
         
         <tr>
            <td> <label>Mot de passe :</label></td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td> CNE :</td>
            <td><input type="number" name="cne"></td>
        </tr>
        <tr>
            <td> Email :</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td> Photo :</td>
            <td><input type="file" name="photo"></td>
        </tr>
        <tr>
            <td> <input type="submit" name="sign" value="Sign Up"></td>
            <td> <input type="reset" name="annuler" value="Annuler"></td>
        </tr>
     </table>
 </form>   
                     </div>
                </div>
            </div>
        </div>
    </div>

                   
 
</body>

</html>