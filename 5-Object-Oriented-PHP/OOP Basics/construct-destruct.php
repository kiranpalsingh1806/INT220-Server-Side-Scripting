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
        public $name = "My name is Kiranpal Singh\n";
        public $regNo;

        function __construct($myName = "Dummy name. I am constructor :)")
        {
            echo "$myName <br>";
        }

        function printName()
        {
            echo "$this->name <br>";
        }

        function __destruct()
        {
            echo "I am destructor. I am here without calling me :( \n";
        }
    }

    $kiranpal = new Student();
    $kiranpal->printName();
    ?>
</body>

</html>