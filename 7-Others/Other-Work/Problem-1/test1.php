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
    class ContinuousAssessment
    {
        public $maxCA = 30;
        public $ca1 = 27;
        public $ca2 = 28;
    }

    class FinalExam extends ContinuousAssessment
    {
        public $finalPaper, $maxFinal = 100;

        function __construct($marks)
        {
            $this->finalPaper = $marks;
        }

        function totalMarks()
        {
            $this->grandTotal = $this->ca1 + $this->ca2 + $this->finalPaper;
            echo "Marks obtained are $this->grandTotal <br>";
            $marksGivenFrom = $this->maxCA + $this->maxCA + $this->maxFinal;
            echo "Total Marks are $marksGivenFrom <br>";
        }
    }

    $kiranpal = new FinalExam(98);
    $kiranpal->totalMarks();
    ?>
</body>

</html>