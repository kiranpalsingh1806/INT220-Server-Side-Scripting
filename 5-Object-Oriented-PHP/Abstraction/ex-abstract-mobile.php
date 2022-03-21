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
    abstract class Mobile
    {
        public $brand;
        public function __construct($name)
        {
            $this->brand = $name;
        }
        abstract public function brandDetails();
    }

    class Nokia extends Mobile
    {
        public function brandDetails()
        {
            return "Thankyou for choosing Finland company. It is $this->brand <br> ---- <br>";
        }
    }

    class BlackBerry extends Mobile
    {
        public function brandDetails()
        {
            return "We are a Canada Company. It is $this->brand<br> ---- <br>";
        }
    }

    class Micromax  extends Mobile
    {
        public function brandDetails()
        {
            return "We are an Indian Company. It is $this->brand<br> ---- <br>";
        }
    }

    $nokia1100 = new Nokia("Nokia 1100");
    echo $nokia1100->brandDetails();
    $nokia5233 = new Nokia("Nokia 5233");
    echo $nokia5233->brandDetails();
    $blackberry9700 = new BlackBerry("Blackberry 9700");
    echo $blackberry9700->brandDetails();
    $micromax11 = new Micromax("Micromax 11");
    echo $micromax11->brandDetails();
    ?>
</body>

</html>