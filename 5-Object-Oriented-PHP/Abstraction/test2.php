<!DOCTYPE html>
<html>

<body>

    <?php
    abstract class ParentClass
    {
        abstract protected function prefixName($name, $gender, $time);
    }

    class ChildClass extends ParentClass
    {
        public function prefixName($name, $gender, $time, $separator = ".", $greet = "")
        {
            if ($gender == "M") {
                $prefix = "Mr";
            } else if ($gender == "F") {
                $prefix = "Mrs";
            }

            if ($time < 12) {
                $greet = "Good Morning :)";
            } else if ($time < 16) {
                $greet = "Good Afternoon :)";
            } else if ($time < 20) {
                $greet = "Good Evening :)";
            } else if ($time < 24) {
                $greet = "Good Night :|";
            }
            return "{$greet} {$prefix}{$separator} {$name} <br>";
        }
    }

    $kiranpal = new ChildClass;
    echo $kiranpal->prefixName("Kiranpal Singh", "M", 10);
    $riya = new ChildClass;
    echo $riya->prefixName("Riya", "F", 22);
    $jatin = new ChildClass;
    echo $jatin->prefixName("Jatin Sohlot", "M", 17);
    echo "<br>";
    ?>

</body>

</html>