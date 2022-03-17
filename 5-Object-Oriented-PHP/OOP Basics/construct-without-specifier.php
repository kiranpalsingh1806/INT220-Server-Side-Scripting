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
    class Student
    {
        function __construct($name)
        {
            $this->name = $name;
        }

        function printName()
        {
            echo "My name is $this->name <br>";
        }

        function __destruct()
        {
            echo "I am destructor. I am here without calling :( \n";
        }
    }

    $kiranpal = new Student("Kiranpal Singh");
    $kiranpal->printName();
    ?>
</body>

</html>