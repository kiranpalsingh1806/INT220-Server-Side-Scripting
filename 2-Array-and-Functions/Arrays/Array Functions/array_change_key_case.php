<!DOCTYPE html>
<html>

<body>

    <?php
    echo "<pre>";
    $players = array("Captain1" => "Dhoni", "Captain2" => "Kohli", "Captain3" => "Rohit");
    print_r(array_change_key_case($players, CASE_UPPER));
    echo "<pre>";
    ?>

</body>

</html>