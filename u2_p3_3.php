<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"<hr><h3>3 - array_count_values()</h3>";
    $colors = array("Red","blue","white","green","red","red");
    print_r(array_count_values($colors));
    ?>
</body>
</html>