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
        $laptop = array(
            array("Laptop","Legion","80000"),
            array("hp","Victus","70000"),
        );

        for($i=0;$i<count($laptop);$i++){
            for($j=0;$j<count($laptop[$i]);$j++){
                echo $laptop[$i][$j]." | ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>