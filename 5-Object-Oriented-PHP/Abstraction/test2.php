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
        public function prefixName($name, $gender, $time, $separator = ".", $greet = "Dear")
        {
            if ($gender == "M") {
                $prefix = "Mr";
            } else {
                $prefix = "Mrs";
            }
            if ($name == "Jane Doe") {
                $prefix = "Mrs";
            } else {
                $prefix = "";
            }
            return "{$greet} {$prefix}{$separator} {$name}";
        }
    }

    $kiranpal = new ChildClass;
    echo $kiranpal->prefixName("Kiranpal Singh", "M", 10);
    echo "<br>";
    echo $class->prefixName("Jane Doe");
    ?>

</body>

</html>