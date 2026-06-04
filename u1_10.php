<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program10</title>
</head>
<body>
    <?php
    echo" merge odf array ";
    $num1=array(12,34,46,56,45);
    $num2=array(34,46,56,87,90);
    $mer=array_intersect($num1,$num2);
    foreach($mer as $m)
    {
        echo"$m <br>";
    }
    ?>
</body>
</html>