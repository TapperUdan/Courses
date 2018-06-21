<?php

    $br = "<br>";

    $min = 5;
    $max = 15;
    if(isset($_POST['submit'])){
        
        $names = ['Daniel','Kathryn', 'Sarah', 'John'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(strlen($username) < $min){
            echo "Username has to be longer than 5 characters." . $br;
        }elseif(strlen($username) > $max){
            echo "Username must be shorter than 15 characters" . $br;
        }
        
        if(!in_array($username, $names)){
            echo "Sorry you are not allowed";
        }else{
            echo "Welcome " . $username;
        }
        
    }


    
//    if(isset($_POST['username'])){
//        echo "I found the username <br>";
//    };
//    if(isset($_POST['password'])){
//        echo "I found the Password";
//    };
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form action="form.php" method="post">
       
        <input type="text" placeholder="Enter Username" name="username">
        <input type="password" placeholder="Enter Password" name="password" ><br>
        <input type="submit" name="submit">
    </form>
    

    
</body>
</html>