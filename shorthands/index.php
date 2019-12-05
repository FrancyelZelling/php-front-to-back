<?php

    $loggedIn = false;
    $arr = [1,2,3,4,5];

    // if($loggedIn) {
    //     echo 'You are logged in';
    // } else {
    //     echo 'You are NOT logged in';
    // }
    
    // echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

    // $isRegistred = ($loggedIn == true) ? true : false;

    // echo $isRegistred;

    // $age = 7;
    // $score = 15;

    // echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional'):(($age > 10 ? 'Horrible' : 'Avegrage')));
?>

<div class="">
    <?php if($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Not Logged In</h1>
    <?php } ?>
</div>

<div class="">
    <?php if($loggedIn): ?>
        <h2>Welcome user</h2>
    <?php else: ?>
        <h2>Welcome Guest</h2>
    <? endif; ?>
</div>

<div>
    <?php for($i = 0; $i < 6; $i++): ?>
        <a href="#!"><?php echo $i; ?></a>
    <?php endfor; ?>
</div>