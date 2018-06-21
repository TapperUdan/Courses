<?php
$br = "<br>";

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $password = $_POST['password'];
    
    $connect = mysqli_connect('localhost', 'root', '', 'cmsclass');
    
    if($connect){
        echo "We are connected to the Server";
    }else {
        die("database connection failed!");
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        
        <div class="col-sm-6">
            <h1 class="text-center">Login</h1>
            <form action="login.php" method="post">
                <div class="form-group">
                   <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username">
                    
                </div>
                <div class="form-group">
                   <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password">
                    
                </div>
               
                <input type="submit" class="btn btn-primary" name="submit" value="Login">
                    
            </form>
            
        </div>
        
    </div>
    
</body>
</html>