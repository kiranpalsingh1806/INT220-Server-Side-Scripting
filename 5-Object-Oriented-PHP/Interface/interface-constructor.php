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
        public $status, $first, $second, $third;
        public function __construct($status, $first = "", $second, $third)
        {
            $this->status = $status;
            $this->first = $first;
            $this->second = $second;
            $this->third = $third;
        }
        public function attendance()
        {
            echo "Kiranpal is $this->status <br>";
        }

        public function ca()
        {
            echo "Kiranpal has given $this->first $this->second $this->third CAs <br> ------ <br>";
        }
    }

    class Mukund implements Attendance, ContinuousAssessment
    {
        public $status, $first, $second, $third;
        public function __construct($status, $first = "", $second = "", $third = "")
        {
            $this->status = $status;
            $this->first = $first;
            $this->second = $second;
            $this->third = $third;
        }
        public function attendance()
        {
            echo "Mukund is $this->status <br>";
        }
        public function ca()
        {
            echo "Mukund has given $this->first $this->second $this->third CAs <br> ------ <br>";
        }
    }
    class Tarun implements Attendance, ContinuousAssessment
    {
        public $status, $first, $second, $third;
        public function __construct($status, $first = "", $second = "", $third = "")
        {
            $this->status = $status;
            $this->first = $first;
            $this->second = $second;
            $this->third = $third;
        }
        public function attendance()
        {
            echo "Tarun is $this->status <br>";
        }
        public function ca()
        {
            echo "Kiranpal has given $this->first $this->second $this->third CAs <br> ------ <br>";
        }
    }

    $kiranpal = new Kiranpal("Present", "First", "Second", "Third");
    $kiranpal->attendance();
    $kiranpal->ca();
    $tarun = new Tarun("Absent", "First");
    $tarun->attendance();
    $tarun->ca();
    $mukund = new Mukund("Present", "First", "Third");
    $mukund->attendance();
    $mukund->ca();
    ?>
</body>

</html>