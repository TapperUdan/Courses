<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return Value Functions</title>
</head>
<body>
    
<?php

    $br = "<br>";
    
    function addNumbers($number1, $number2) {
        $sum = $number1 +$number2;
        
        return $sum;
    }
    $result = addNumbers(234,645);
    echo $result;
    echo $br;
    $result = addNumbers(100, $result);
    
    echo $result;
?>
    
</body>
</html>