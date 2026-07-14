<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $conn = new mysqli("localhost:3307","root","","test");
        if($conn->connect_error){
            die("Connection failed:" .$conn->connect_error);
        }
        $queries = [
        "SELECT HOUR(NOW()) AS Hour",
        "SELECT MINUTE(NOW() AS Minute",
        "SELECT SECOND(NOW()) AS Second",
        "SELECT DATE_FORMAT(NOW(), '%d-%n-%Y%H:%i:%s') AS Formatted_Date",
        "SELECT DATE_SUB(CURDATENOW(),Interval 10 DAY) AS Date_Subtract",
        "SELECT DATE_ADD(CURDATE(),Interval 10 DAY) AS Date_Add"
        ];

        foreach($queries as $sql){
            echo"<br>";
            $result = $conn->query($sql);
            if($result){
                while($row=$result->fetch_assoc()){
                    foreach($row as $key=>$value)
                    {
                        echo"<b>$key :</b>";
                    }
                }
            }
            else {
                echo "Query Eroor";
            }
        }
        ?>
</body>
</html>