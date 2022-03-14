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

    $kiranpal = new Student();
    $kiranpal->set_name("Kiranpal Singh");
    $kiranpal->set_regNo("11903472");
    $kiranpal->get_name();
    $kiranpal->get_regNo();

    $dummy = new Student();
    $dummy->set_name("Dummy");
    $dummy->set_regNo("11992112");
    $dummy->get_name();
    $dummy->get_regNo();

    $foobar = new Student();
    $foobar->set_name("Foo Bar");
    $foobar->set_regNo("12003421");
    $foobar->get_name();
    $foobar->get_regNo();
    ?>
</body>

</html>