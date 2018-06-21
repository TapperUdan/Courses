   <?php
     $connect = mysqli_connect('localhost', 'root', '', 'cmsclass');
    if(!$connect){
        die("database connection failed!");
    }
?>