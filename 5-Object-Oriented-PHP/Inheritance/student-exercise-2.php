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
        public $name, $physics, $chemistry, $maths;
        public $subTotal;

        function __construct($name, $one, $two, $three)
        {
            $this->name = $name;
            $this->physics = $one;
            $this->chemistry = $two;
            $this->maths = $three;
            $this->subTotal = $this->physics + $this->chemistry + $this->maths;
        }
    }

    class BiologyStudent extends RegularSubjects
    {
        public $biology = 40;

        function totalMarks()
        {
            echo "Student name : $this->name <br>";
            echo "Branch:  Biology <br>";
            $this->subTotal += $this->biology;
            echo "Total marks are $this->subTotal <br><br>";
        }
    }

    class PhysicalEduStudent extends RegularSubjects
    {
        public $physicalEducation = 60;

        function totalMarks()
        {
            echo "Student name : $this->name <br>";
            echo "Branch:  Physical Education <br>";
            $this->subTotal += $this->physicalEducation;
            echo "Total marks are $this->subTotal <br><br>";
        }
    }

    class InfoTechStudent extends RegularSubjects
    {
        public $infoTechnology = 70;

        function totalMarks()
        {
            echo "Student name : $this->name <br>";
            echo "Branch: Information Technology  <br>";
            $this->subTotal += $this->infoTechnology;
            echo "Total marks are $this->subTotal <br><br>";
        }
    }

    $bioStudent = new BiologyStudent("Raman", 10, 20, 30);
    $bioStudent->totalMarks();
    $itStudent = new InfoTechStudent("Mukund", 10, 20, 30);
    $itStudent->totalMarks();
    $phyEduStudent = new PhysicalEduStudent("Ramesh", 10, 20, 30);
    $phyEduStudent->totalMarks();
    ?>
</body>

</html>