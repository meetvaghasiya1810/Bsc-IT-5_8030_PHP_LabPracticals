<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program4_7</title>
</head>
<body>
    <?php 
        echo" 1. Jan <br> 2. Feb <br> 3. Mar <br>";
        $num=2;
        switch($num)
        {
            case 1:
                echo" the month is jan";
                break;
            case 2: 
                echo"the month is feb ";
                break;
            case 3: 
                echo" the month is mar ";
                break;
            default;
             echo" the month is invalid";
        }
    ?>
</body>
</html>