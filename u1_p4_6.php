<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program4_6</title>
</head>
<body>
    <?php
        $month="June";
        $day="Tue";
        if($month=="June")
        {
            if($day=="Tue")
            {
                $day="Tue";
                 echo"day changed to $day <br>";
                 echo"Therefore date is : ".$day."-".$month;
            }
                elseif($day=="Tue")
                {
                    echo" The day is Tue";
                }
                else
                {
                    echo" The day is not Tue or Wed";
                }
         

        }
        else
        {
                echo"The month is not June";
        }
     
    ?>
</body>
</html>