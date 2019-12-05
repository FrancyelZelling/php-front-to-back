<?php
    // Message vars
    $msg = '';
    $msgClass = '';
    // Check for submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // Get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check required fields
        if(!empty($name) && !empty($email) && !empty($message)) {
            // Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $msg = 'Please use a valid email!';
                $msgClass = 'alert-danger';
            } else {
                $toEmail = 'support@francyelzelling.com';
                $subject = 'Contact request from '. $name;
                $body = '<h4>Contact Requeest</h4>
                        <h2>Name: </h2>'. $name . '
                        <h2>Email: </h2>'. $email. '
                        <h2>Message</h2>
                        <p>'. $message .'</p>
                ';

                // Email headers
                $headers = 'MIME-Version: 1.0'. "\r\n";
                $headers .= 'Content-type:text/html;charset=UTF-8'. "\r\n";

                // Aditional headers
                $headers .= 'From: '. $name. '<'. $email. '>' . "\r\n";

                if(mail($toEmail, $subject, $body, $headers)) {
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Your email was not sent' ;
                    $msgClass = 'alert-danger';
                }

            }
        } else {
            $msg = 'Please fill in all fields!';
            $msgClass = 'alert-danger';
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <title>Contact Form</title>
</head>
<body>
    <nav class="navbar navbar-default bg-dark" >
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>

    <?php if($msg != ''): ?>
       <div class="alert <?php echo $msgClass ?>"><?php echo $msg?></div>
    <?php endif; ?>

    <div class="container mt-4">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id=""
                       value="<? echo isset($_POST['name']) ? $name : '' ?>">
            </div>
            <div class="form-group">
                <label for="email">Name</label>
                <input class="form-control" type="text" name="email" id=""
                       value="<? echo isset($_POST['email']) ? $email : '' ?>">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="" cols="30" rows="10"><? echo isset($_POST['message']) ? $message : '' ?></textarea>
            </div>
            <button class="btn btn-success" name="submit" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>