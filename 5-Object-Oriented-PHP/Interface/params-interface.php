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
        public function attendance(...$params);
    }

    interface ContinuousAssessment
    {
        public function ca(...$params);
    }

    class Kiranpal implements Attendance, ContinuousAssessment
    {
        public function attendance(...$params)
        {
            $temp = $params[0];
            echo "Kiranpal is $temp <br>";
        }

        public function ca(...$params)
        {
            $first = $params[0];
            $second = $params[1];
            $third = $params[2];
            echo "Kiranpal has given $first $second $third CAs <br> ------ <br>";
        }
    }

    class Mukund implements Attendance, ContinuousAssessment
    {
        public function attendance(...$params)
        {
            $temp = $params[0];
            echo "Mukund is $temp <br>";
        }

        public function ca(...$params)
        {
            $first = $params[0];
            $second = $params[1];
            $third = $params[2];
            echo "Mukund has given $first $second $third CAs <br> ------ <br>";
        }
    }


    $kiranpal = new Kiranpal();
    $kiranpal->attendance("Present");
    $kiranpal->ca("First", "Second", "Third");
    $mukund = new Mukund();
    $mukund->attendance("Present");
    $mukund->ca("First", "Third", "");
    ?>
</body>

</html>