<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action=""method="get">
        <input type="text" name="uname[0]"> <br> <br>
        <input type="text" name="uname[1]"> <br> <br>
        <input type="text" name="uname[2]"> <br> <br>

        <input type="submit" name="add"> <br> <br>
    </form>
</body>
</html>

<?php
   echo"<h3>Array1:<?h3>";
   foreach ($a1 as $val)
   {
        echo $val ."<br>";
   }

   echo"<h3>Array2:<?h3>";
   foreach ($a2 as $val)
   {
        echo $val ."<br>";
   }

   $merged=array_merge($a1,$a2);
   
