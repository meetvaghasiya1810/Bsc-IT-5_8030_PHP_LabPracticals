<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"<hr><h3>2 - array_chunk()</h3>";
    $months = array("Jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec");
    print_r(array_chunk($months,3,"<br>"));
    ?>
</body>
</html>