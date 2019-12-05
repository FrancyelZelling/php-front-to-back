<?php
    // $_GET is a superglobal that is created when we use a method of GET, and it is an array, and contains some info
    // print_r($_GET); // Will print the array
    
    // On video this doenst work, gives an error that this var doenst exitst, but for me 
    // works file
    // echo $_GET['name'];
    /*
    if(isset($_GET['name'])){
        // htmlentities removes any power that contains in the field
        // in case the user enter js code
        // echo htmlentities($_GET['name']) ;
    }

    if(isset($_POST['name'])){
        // htmlentities removes any power that contains in the field
        // in case the user enter js code
        echo htmlentities($_POST['name']) ;
    }
    

    if(isset($_REQUEST['name'])){
        // htmlentities removes any power that contains in the field
        // in case the user enter js code
        echo htmlentities($_REQUEST['name']) ;
    }
    */

    // echo $_SERVER['QUERY_STRING'];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
</head>
<body>
    <form method="GET" action="index.php">
        <div class="">
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div class="">
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>