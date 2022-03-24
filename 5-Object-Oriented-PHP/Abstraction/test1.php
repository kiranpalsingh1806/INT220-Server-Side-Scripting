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
        abstract public function countryOfOrigin();
    }

    class Nokia extends Mobile
    {
        public function brandDetails()
        {
            echo " It is $this->brand <br> ";
        }
        public function countryOfOrigin()
        {
            return "Country of Origin :  Finland<br> ----- <br>";
        }
    }

    class BlackBerry extends Mobile
    {
        public function brandDetails()
        {
            echo "It is $this->brand<br>";
        }
        public function countryOfOrigin()
        {
            return "Country of Origin :  Canada <br> ----- <br>";
        }
    }

    class Micromax  extends Mobile
    {
        public function brandDetails()
        {
            echo "It is $this->brand<br>";
        }
        public function countryOfOrigin()
        {
            return "Country of Origin :  India<br> ----- <br>";
        }
    }

    $nokia1100 = new Nokia("Nokia 1100");
    echo $nokia1100->brandDetails();
    echo $nokia1100->countryOfOrigin();
    $nokia5233 = new Nokia("Nokia 5233");
    echo $nokia5233->brandDetails();
    echo $nokia5233->countryOfOrigin();
    $blackberry9700 = new BlackBerry("Blackberry 9700");
    echo $blackberry9700->brandDetails();
    echo $blackberry9700->countryOfOrigin();
    $micromax11 = new Micromax("Micromax 11");
    echo $micromax11->brandDetails();
    echo $micromax11->countryOfOrigin();
    ?>
</body>

</html>