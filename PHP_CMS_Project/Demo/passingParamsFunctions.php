<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Passing Paramiters</title>
</head>
<body>
    
<?php

//    function greeting($message) {
//        echo $message;
//        
//    }
//    
//    greeting("Hello World!");
    
    function addNumbers($number1, $number2){
        
        $sum = $number1 + $number2;
        echo $sum;
    }
    
    addNumbers(345,3465);
?>
    
</body>
</html>