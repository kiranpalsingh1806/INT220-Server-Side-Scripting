<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Calculator
    {
        function __construct($number1, $number2)
        {
            $this->num1 = $number1;
            $this->num2 = $number2;
        }

        function addition()
        {
            $result = $this->num1 + $this->num2;
            echo "The addition of two number is $result <br>";
        }

        function subtraction()
        {
            $result = $this->num1 - $this->num2;
            echo "The subtraction of two number is $result <br>";
        }
        function multiply()
        {
            $result = $this->num1 * $this->num2;
            echo "The multiplication of two number is $result <br>";
        }
    }

    $calculate1 = new Calculator(30, 10);
    $calculate1->addition();
    $calculate1->subtraction();
    $calculate1->multiply();
    ?>
</body>

</html>