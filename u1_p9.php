<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program9</title>
</head>
<body>
 <?php
    echo" array reversing <br>";
    $num=array(12,34,76,59,45);
    $rev=array_reverse($num);
    foreach($rev as $r)
    {
        echo"$r <br>";
    }
 ?>
</body>
</html>