<?php
require('config.php');
// Create Connection
$conn = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if(mysqli_connect_errno()){
    // Connection failed
    echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
}