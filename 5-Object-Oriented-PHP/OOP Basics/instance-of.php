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

    use Student as GlobalStudent;

    class Student
    {
        public $name;
        public $regNo;

        function set_name($name)
        {
            $this->name = $name;
        }

        function set_regNo($number)
        {
            $this->regNo = $number;
        }

        function  get_name()
        {
            echo "$this->name <br> ";
        }

        function get_regNo()
        {
            echo "$this->regNo  <br> ------ <br>";
        }
    }

    class Student2
    {
        public $name;
    }

    // Create instances of Student class
    $kiranpal = new Student();
    $dummy = new Student();
    $foobar = new Student2();

    // Create instances of Student2 class
    $kiranpalsingh = new Student2();

    var_dump($kiranpal instanceof Student);
    echo "<br>";
    var_dump($kiranpalsingh instanceof Student);
    ?>
</body>

</html>