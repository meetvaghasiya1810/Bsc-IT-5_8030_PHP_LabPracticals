<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Select operator:
    <select name="operator">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select><br><br>

    <input type="submit" name="calculate" value="Calculate">
</form>

    <?php
    function calculate($num1,$num2,$op){
        switch($op) {
            case 'Addition':
                return $num1+$num2;

            case 'Subtraction':
                return $num1-$num2;

            case 'Multiplication':
                return $num1*$num2;

            case 'Division':
                return $num2!=0 ? $num1/num2: "Cannot divide by Zero";

            default:
                return "Invalid Operator";
        }
    }
    if(isset($_post['submit'])){
        $num1=$_post['num1'];
        $num2=$_post['num2'];
        $op=$_post['operation'];

        $result=calculate($num1,$num2,$op);
        echo"<h3>Result:$result</h3>";
    }
    ?>
</body>
</html>