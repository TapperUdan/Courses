<?php
$br = "<br>";

include 'db.php';
function showAllData() {
    $query = "SELECT * FROM users";
    global $connect;
    $result = mysqli_query($connect, $query);
    
    if(!$result) {
        die("Query Failed!" . mysqli_error);
    }
    
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";

    }
}

function loginCreate() {
        global $connect;
        if(isset($_POST['submit'])) {
        $user = $_POST['username'];
        $password = $_POST['password'];
            
        $user = mysqli_real_escape_string($connect, $user);
        $password = mysqli_real_escape_string($connect, $password);
            
        $hashFormat = "$2y$10$";
        $salt = "YouReallyWishThatYouCouldGetThisPassword243";
        $hashSalt = $hashFormat . $salt;
            
        $password = crypt($password, $hashSalt);

        $query = "INSERT INTO users(username, password) ";
        $query .= "VALUES ('$user', '$password')";

        $result = mysqli_query($connect, $query);

        if(!$result) {
            die("Query Failed!" . mysqli_error);
        }else {
            echo "User Created! Welcome.";
        }
    }
}

function loginRead() {
    global $connect;
    $query = "SELECT * FROM users";
    
    
    $result = mysqli_query($connect, $query);
    
    if(!$result) {
        die("Query Failed!" . mysqli_error);
    }
    
    while($row = mysqli_fetch_assoc($result)){
        echo "<pre>";            
        print_r($row);
        echo "</pre>";
    }
}

function loginUpdate() {
    global $connect;
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $user = mysqli_real_escape_string($connect, $user);
        $password = mysqli_real_escape_string($connect, $password);
        
        $hashFormat = "$2y$10$";
        $salt = "YouReallyWishThatYouCouldGetThisPassword243";
        $hashSalt = $hashFormat . $salt;
            
        $password = crypt($password, $hashSalt);

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connect, $query);

        if(!$result) {
            die("Query Failed!" . mysqli_error($connect));
        }else {
            echo "Login Updated";
        }
    }
}

function loginDelete() {
    global $connect;
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";
        
        $result = mysqli_query($connect, $query);
    
        if(!$result) {
            die("Query Failed!" . mysqli_error($connect));
        }else {
            echo "User Deleted!";
        }
    }
}


// ==================SECURITY=============

//  php.net/manual/en/function.crypt.php




?>