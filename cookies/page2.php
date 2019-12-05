<?php
    // Update Cookie
    setcookie('username', 'Frank', time() + (86400 * 30));

    // Delete cookie
    setcookie('username', 'Frank', time() -36000 );

    if(count($_COOKIE) > 0) {
        echo 'There are '. count($_COOKIE). ' cookies saved <br>';
    } else {
        echo 'There are no cookies set <br>';
    }

    if(isset($_COOKIE['username'])){
        echo 'User '. $_COOKIE['username']. ' is set <br>';
    } else {
        echo 'User is not set';
    }
?>

