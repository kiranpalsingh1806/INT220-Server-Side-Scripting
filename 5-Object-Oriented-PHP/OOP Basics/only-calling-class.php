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
        function __construct($name, $regno, $course)
        {
            $this->name = $name;
            $this->regno = $regno;
            $this->course = $course;
        }

        function __destruct()
        {
            echo "Your name is $this->name <br>";
            echo "Your registration number is $this->regno <br>";
            echo "Your course name is $this->course <br>";
        }
    }

    $kiranpal = new Student("Kiranpal Singh", 11, "B.Tech");
    $dummy = new Student("Dummy", 15, "M.Tech");
    ?>
</body>

</html>