
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    error_reporting(0);
    ?>

    <?php
        $days = array("Monday","Tuesday","Wednesday","Tursday","Friday","Saturday","Sunday");
        foreach($days as $d){
            echo $d . "<br>";
        }

    ?>
</body>
</html>