<?php

if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        echo $name;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
   
   <form action="the_post.php" method="post">
       
       <input type="text" name="name">
       <input type="submit" name="submit">       
       
   </form>
    
</body>
</html>