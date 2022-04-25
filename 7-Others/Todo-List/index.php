<?php
require 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="signupSection">
        <div class="info">
            <h2>Plan your day</h2>
            <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
            <p>The Todo List Is Here</p>
        </div>
        <form action="app/index3.php" method="POST" class="signupForm" name="signupform">
            <h2>Sign Up</h2>
            <ul class="noBullet">
                <li>
                    <label for="username"></label>
                    <input type="text" class="inputFields" id="username" name="username" placeholder="Username" value="" oninput="return userNameValidation(this.value)" required />
                </li>
                <li>
                    <label for="password"></label>
                    <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="" oninput="return passwordValidation(this.value)" required />
                </li>
                <li>
                    <label for="email"></label>
                    <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required />
                </li>
                <li id="center-btn">
                    <input type="submit" id="join-btn" name="join" alt="Join" value="Join">
                </li>
            </ul>
        </form>
    </div>
</body>
<script src="script.js">
</script>
</body>

</html>