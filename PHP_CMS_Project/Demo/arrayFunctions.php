<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php
    $br = "<br>";
    $list = [343,34,323,23,54, 232,453];
    
    echo max($list).$br;
    
    echo min($list).$br;
    
    sort($list);
    
    print_r($list).$br;
    
    
    //php.net/manual/en/ref.array.php
    
?>
    
</body>
</html>