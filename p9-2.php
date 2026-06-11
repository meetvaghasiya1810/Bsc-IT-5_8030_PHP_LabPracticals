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
    $nm=$_GET['uname'];
    echo"<h3> orignal array:<?h3>";
    foreach ($nm as $val)
    {
        echo $val."<br>";
    }

    echo"<h3> reversed array: </h3>";
    $rev = array_reverse($nm);
    foreach ($rev as $val)
    {
        echo $val."<br>";
    }
    ?>