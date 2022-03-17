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
    class RegularSubjects
    {
        public $name, $physics, $chemistry, $maths; // Regular Subjects
        public $biology, $physicalEducation, $infoTechnology; // Other Subjects
        public $grandTotal;

        function grandTotal()
        {
            echo "The grand total is : $this->grandTotal <br><br>";
        }
    }

    class BiologyStudent extends RegularSubjects
    {
        function __construct($name, $one, $two, $three, $four)
        {
            echo "Student Name : $name <br>";
            echo "Branch Name : Biology <br>";
            $this->physics = $one;
            $this->chemistry = $two;
            $this->maths = $three;
            $this->biology = $four;
            $this->grandTotal = $this->physics + $this->chemistry + $this->maths + $this->biology;
        }
    }

    class PhysicalEduStudent extends RegularSubjects
    {

        function __construct($name, $one, $two, $three, $four)
        {
            echo "Student Name : $name <br>";
            echo "Branch Name : Physical Education <br>";
            $this->physics = $one;
            $this->chemistry = $two;
            $this->maths = $three;
            $this->physicalEducation = $four;
            $this->grandTotal = $this->physics + $this->chemistry + $this->maths + $this->physicalEducation;
        }
    }

    class InfoTechStudent extends RegularSubjects
    {
        function __construct($name, $one, $two, $three, $four)
        {
            echo "Student Name : $name <br>";
            echo "Branch Name : Infomation Technology <br>";
            $this->physics = $one;
            $this->chemistry = $two;
            $this->maths = $three;
            $this->infoTechnology = $four;
            $this->grandTotal = $this->physics + $this->chemistry + $this->maths + $this->infoTechnology;
        }
    }

    $bioStudent = new BiologyStudent("Raman", 50, 50, 50, 50);
    $bioStudent->grandTotal();
    $itStudent = new InfoTechStudent("Mukund", 50, 50, 50, 100);
    $itStudent->grandTotal();
    $phyEduStudent = new PhysicalEduStudent("Ramesh", 50, 50, 50, 150);
    $phyEduStudent->grandTotal();
    ?>
</body>

</html>