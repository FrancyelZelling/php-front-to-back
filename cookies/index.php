<?php
    if(isset($_POST['submit'])) {
        $username = htmlentities($_POST['name']);
                                                // 1 hour
        setcookie('username', $username, time() + 3600);

        header('Location: page2.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Cookies</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name" id="" placeholder="Username">
    <br>
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>
