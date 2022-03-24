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
    interface Attendance
    {
        public function attendance();
    }

    interface ContinuousAssessment
    {
        public function ca();
    }

    class Kiranpal implements Attendance, ContinuousAssessment
    {
        public function attendance()
        {
            echo "Kiranpal is present <br>";
        }

        public function ca()
        {
            echo "Kiranpal has given all his CAs <br> ------ <br>";
        }
    }

    class Mukund implements Attendance, ContinuousAssessment
    {
        public function attendance()
        {
            echo "Mukund is present <br>";
        }
        public function ca()
        {
            echo "Mukund has given all his CAs except one. <br> ------ <br>";
        }
    }
    class Tarun implements Attendance, ContinuousAssessment
    {
        public function attendance()
        {
            echo "Tarun is absent<br>";
        }
        public function ca()
        {
            echo "Tarun has not given any CAs. <br> ------ <br>";
        }
    }

    $kiranpal = new Kiranpal();
    $tarun = new Tarun();
    $mukund = new Mukund();

    $students = array($kiranpal, $tarun, $mukund);
    foreach ($students as $student) {
        $student->attendance();
        $student->ca();
    }
    ?>
</body>

</html>