<?php
    if(isset($_POST['submit'])){
        session_start();

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        // Redirect
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
    <title>PHP Sessions</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name" id="" placeholder="Enter Name">
    <br>
    <input type="text" name="email" id="" placeholder="Enter Email">
    <br>
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>
