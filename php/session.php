<?php
    session_start();

    $username = 'Grace';
    $auth = 1;
    $_SESSION['username'] = $username;

    if(isset($_SESSION['username'])):
        header(`Location: index.php'. md5($auth).'?'.$username.'`);
    endif;