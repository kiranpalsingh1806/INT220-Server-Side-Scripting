<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #footer {
            background-color: white;
            text-decoration: none;
            margin-top: 10px;
            padding-bottom: 20px;
        }
    </style>

</head>

<body>
    <div id="footer">
        <form action="logged-out.php" method="post">
            <input type="submit" value="Log Out" name="submit">
        </form>
        <form action="session-details.php" method="post">
            <input type="submit" value="Session Details" name="submit">
        </form>
    </div>
</body>

</html>