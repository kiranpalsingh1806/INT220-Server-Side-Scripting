<?php
require '../db_conn.php';
session_start();
?>

<?php
$cookie_name = "username";
$cookie_value = $_POST["username"];
setcookie($cookie_name, $cookie_value, time() + (60 * 60), "/");

$cookie_name = "password";
$cookie_value = $_POST["password"];
setcookie($cookie_name, $cookie_value, time() + (60 * 60), "/");

$cookie_name = "email";
$cookie_value = $_POST["email"];
setcookie($cookie_name, $cookie_value, time() + (60 * 60), "/");

$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["email"] = $_POST["email"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $password = $_POST["password"];
    if (!preg_match("#[0-9]+#", $password)) {
        $error .= "Password must include at least one number!
        ";
    }
    if (!preg_match("#[a-z]+#", $password)) {
        $error .= "Password must include at least one letter!
        ";
    }
    if (!preg_match("#[A-Z]+#", $password)) {
        $error .= "Password must include at least one CAPS!
        ";
    }

    $full_name = $_POST["username"];
    if (!preg_match("/^[a-zA-z\s]+$/", $full_name)) {
        $Err = " Error :(  Only alphabets and whitespace are allowed.";
        echo "<br><br>";
        echo $Err;
    } else {
        // echo "<br>";
        // echo "Your name is $full_name";
    }

    $email = $_POST["email"];
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $email = (preg_match($regex, $email)) ? $email : "invalid email";
    ?>

    <?php

    // Adding users to the table
    if (isset($_POST['username'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        if (empty($username) || empty($password) || empty($email)) {
            echo "Please enter your full information";
        } else {
            $stmt = $conn->prepare("INSERT INTO users(username, password, email) VALUE(?, ?, ?)");
            $res = $stmt->execute([$username, $password, $email]);
        }
    }
    ?>
    <div class="header" style="text-align: center; background-color : brown; color:white; padding: 10px 0; font-size:25px;">
        Day Planner
        <form action="logged-out.php" method="post">
            <?php
            echo "$_SESSION[username], you are logged in."

            ?>
            <input type="submit" value="Log Out" name="submit">
        </form>
    </div>
    <div class="main-section">
        <div class="add-section">
            <form action="app/add.php" method="POST" autocomplete="off">
                <?php if (isset($_GET['mess']) && $_GET['mess'] == 'error') { ?>
                    <input type="text" name="title" style="border-color: #ff6666" placeholder="This field is required" />
                    <button type="submit">Add &nbsp; <span>&#43;</span></button>

                <?php } else { ?>
                    <input type="text" name="title" placeholder="Add task here...." />
                    <button type="submit">Add &nbsp; <span>&#43;</span></button>
                <?php } ?>
            </form>
        </div>
        <?php
        $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
        ?>
        <div class="show-todo-section">
            <?php if ($todos->rowCount() <= 0) { ?>
                <div class="todo-item">
                    <div class="empty">
                        <img src="img/2.jpg" height="300px" /><br>
                        <img src="img/Ellipsis.gif" width="80px">
                    </div>
                </div>
            <?php } ?>

            <?php while ($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="todo-item">
                    <span id="<?php echo $todo['id']; ?>" class="remove-to-do">x</span>
                    <?php if ($todo['checked']) { ?>
                        <input type="checkbox" class="check-box" data-todo-id="<?php echo $todo['id']; ?>" checked />
                        <h2 class="checked"><?php echo $todo['title'] ?></h2>
                    <?php } else { ?>
                        <input type="checkbox" data-todo-id="<?php echo $todo['id']; ?>" class="check-box" />
                        <h2><?php echo $todo['title'] ?></h2>
                    <?php } ?>
                    <br>
                    <small>created: <?php echo $todo['date_time'] ?></small>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.remove-to-do').click(function() {
                const id = $(this).attr('id');

                $.post("app/remove.php", {
                        id: id
                    },
                    (data) => {
                        if (data) {
                            $(this).parent().hide(600);
                        }
                    }
                );
            });

            $(".check-box").click(function(e) {
                const id = $(this).attr('data-todo-id');

                $.post('app/check.php', {
                        id: id
                    },
                    (data) => {
                        if (data != 'error') {
                            const h2 = $(this).next();
                            if (data === '1') {
                                h2.removeClass('checked');
                            } else {
                                h2.addClass('checked');
                            }
                        }
                    }
                );
            });
        });
    </script>
</body>

</html>