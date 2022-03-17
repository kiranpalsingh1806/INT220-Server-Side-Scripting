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
    class First
    {
        public $firstVal;

        function __construct($one)
        {
            $this->firstVal = $one;
        }
    }

    class Second extends First
    {
        function myValue()
        {
            echo "My value is $this->firstVal";
        }
    }

    $object1 = new Second(30);
    $object1->myValue();
    ?>
</body>

</html>