<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php
    
    $br = "<br>";

    $x = "outside"; //Global Scope
    function convert() {
        global $x;
        $x = "inside"; //Local Scope
        
    }
    
    echo $x;
    
    convert();
    
    echo $br . $x;
    
    
    
    
?>
    
</body>
</html>