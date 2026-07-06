<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        echo"<hr><h3>1 - array_change_key_case()</h3>";
        $arr = array(
            "One" => 1,
            "Two" => 2,
            "Three" => 3
        );
        echo"<br><b>lower case keys:</b><br>";
        print_r(array_change_key_case($arr, CASE_LOWER));
        echo"<br><b>upper case keys:</b><br>";
        print_r(array_change_key_case($arr, CASE_UPPER));
    ?>
</body>
</html>