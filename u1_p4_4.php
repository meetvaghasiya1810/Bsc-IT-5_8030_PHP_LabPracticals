<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program-4_4</title>
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
    }
    else
    {
            echo"The month is not June";
    }
   

   ?> 
</body>
</html>